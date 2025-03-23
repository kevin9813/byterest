import Global from "../controllers/global.js";

const app = Vue.createApp({
    setup() {
        const isLoading = Vue.ref(false); 
        const products = Vue.ref([]); 
        const product = Vue.ref([]); 
        const status = Vue.ref([]); 
        const state = Vue.ref(1); 
        const categories = Vue.ref([]);
        const category = Vue.ref(0);
        //Modal Productos
        const isLoadingModal = Vue.ref(false);
        const is_update = Vue.ref(false);
        const product_id = Vue.ref(''); 
        const msg = Vue.ref(false);
        const name = Vue.ref(''); 
        const description = Vue.ref(''); 
        const price = Vue.ref(''); 
        const active = Vue.ref(true); 
        const image = Vue.ref(null);
        const imagePreview = Vue.ref(""); // Guardará la URL de la imagen cargada


         // Cargar datos al iniciar
         const loadData = async () => {
            isLoading.value = true;
            await Promise.all([fetchCategory(), fetchList(), fillState()]);
            isLoading.value = false;
        };

        const fillState = async () => {
            status.value = await [
                { id: 1, name: 'Activos' },
                { id: 2, name: 'Inactivos' },
            ];
        };

        const fetchCategory = async () => {
            try {
                const data = await Global.get('/general/categories');
                categories.value = data;
            } catch (error) {
                console.error("Error al obtener la respuesta:", error);
            }
        };

        const fetchList = async () => {
            try {
                const data = await Global.get('/product/list');
                products.value = data;
            } catch (error) {
                console.error("Error al obtener la respuesta:", error);
            }
        };

        const formatNumber = (value) => {
            return Global.utils.formatNumber(value);
        };

        const ModalProducts = (update, data) => {
            is_update.value = update;
            if(is_update.value){
                name.value =  data.name;
                category.value =  data.category_id;
                description.value =  data.description;
                price.value =  data.price;
                active.value = (data.is_active) ? true : false;
                imagePreview.value = data.img;
                product_id.value = data.id;
            }
        }

        const handleFileUpload = (event) => {
            msg.value = "";
            const file = event.target.files[0]; // Obtener el archivo

            if (!file) return;
            // Formatos permitidos
            const validFormats = ["image/jpeg", "image/png", "image/heic"];
            if (!validFormats.includes(file.type)) {
                msg.value = "Formato no permitido. Usa JPG, PNG o HEIC";
                event.target.value = ""; // Limpiar input
                return;
            }
            // Crear una URL de vista previa
            image.value = file;
            imagePreview.value = URL.createObjectURL(file);
        }


        const addUpdateProduct = async () => {
            isLoadingModal.value = true;
            msg.value = "";
            let hasError = false;

            if(price.value < 100){
                msg.value = "El precio no puede ser menor a 100.";
                hasError = true;
            }else if(!price.value) {
                msg.value = "El precio es obligatorio.";
                hasError = true;
            }
            if (!description.value) {
                msg.value = "La descripción es obligatoria.";
                hasError = true;
            }
            if (category.value == 0) {
                msg.value = "La categoria es obligatoria.";
                hasError = true;
            }
            if (!name.value) {
                msg.value = "El nombre es obligatorio.";
                hasError = true;
            }

            if(!hasError){
                const formData = new FormData();
                formData.append("name", name.value);
                formData.append("description", description.value); 
                formData.append("category", category.value); 
                formData.append("price", price.value); 
                formData.append("active", active.value);
                if (image.value){ formData.append("image", image.value); }
                if (is_update.value){ formData.append("id", product_id.value); }

                
            
                try {
                    const data = await Global.post('/product/file', formData);
                    if(data.status == 200){
                       // window.location.reload();
                    }
                    console.log(data);
                } catch (error) {
                    console.error("Error al obtener la respuesta:", error);
                } finally {
                    isLoadingModal.value = false;
                }
            }
        }


        Vue.onMounted(() => {
            loadData();
        });

        return {
            //Functions
            formatNumber,
            ModalProducts,
            handleFileUpload,
            addUpdateProduct,
            //Variables
            isLoading,
            products,
            product,
            status,
            state,
            categories,
            category,
            //Variables modals productos
            is_update,
            msg,
            name,
            description,
            price,
            active,
            imagePreview
        };
    }
});

// Montar la aplicación
app.mount("#list-product");

