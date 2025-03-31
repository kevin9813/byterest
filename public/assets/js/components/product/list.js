import Global from "../controllers/global.js";

const app = Vue.createApp({
    setup() {
        const isLoading = Vue.ref(false); 
        const isLoadingTable = Vue.ref(false); 
        const page = Vue.ref(1);
        const code_filter = Vue.ref(''); 
        const name_filter = Vue.ref(''); 
        const products = Vue.ref([]); 
        const product = Vue.ref([]); 
        const status = Vue.ref([]); 
        const state = Vue.ref(1); 
        const categories = Vue.ref([]);
        const category = Vue.ref(0);
        //Modal Productos
        const isModalOpen = Vue.ref(false);
        const isLoadingModal = Vue.ref(false);
        const is_update = Vue.ref(false);
        const product_id = Vue.ref(''); 
        const msg = Vue.ref('');
        const name = Vue.ref(''); 
        const code = Vue.ref(''); 
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
            isLoadingTable.value = true;
            var url = "/product/list";

            if (page.value != 1) { url += "?page=" + page.value; }

            let dataSend = {};
            dataSend.state = state.value;
            if (code_filter.value.trim()) {
                dataSend.code = code_filter.value;
            }
            if (name_filter.value.trim()) {
                dataSend.name = name_filter.value;
            }
            if (category.value > 0) {
                dataSend.category = category.value;
            }

            try {
                const data = await Global.post(url, dataSend);
                products.value = data;
                isLoadingTable.value = false;
            } catch (error) {
                console.error("Error al obtener la respuesta:", error);
            }
        };

        const formatNumber = (value) => {
            return Global.utils.formatNumber(value);
        };


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
            if (!code.value) {
                msg.value = "El codigo es obligatorio.";
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
                formData.append("code", code.value);
                formData.append("description", description.value); 
                formData.append("category", category.value); 
                formData.append("price", price.value); 
                formData.append("active", active.value);
                if (image.value){ formData.append("image", image.value); }
                if (is_update.value){ formData.append("id", product_id.value); }

                Global.utils.swalAlertLoading();
                try {
                    const data = await Global.post('/product/file', formData);
                    if(data.status == 200){
                        Global.utils.swalAlertBasic('success', 'Producto', data.message);
                        await esperar(2000); // Espera 2 segundos 
                        window.location.reload();
                    }
                    console.log(data);
                } catch (error) {
                    console.error("Error al obtener la respuesta:", error);
                } finally {
                    isLoadingModal.value = false;
                }
            }
        }

        const changePage = (page_number) => {
            page.value = page_number;
            fetchList();
        }

        const openModal = (update, data)=> {
            isModalOpen.value = true;  // Abre el modal
            is_update.value = update;
            if(is_update.value){
                name.value =  data.name;
                category.value =  data.category_id;
                code.value =  data.code;
                description.value =  data.description;
                price.value =  data.price;
                active.value = (data.status) ? true : false;
                imagePreview.value = data.image;
                product_id.value = data.id;
            }
            const modal = document.getElementById('my_modal_products');
            modal.showModal(); // Muestra el modal con la función nativa de `<dialog>`
        }
        const closeModal = ()=> {
            isModalOpen.value = false; // Cierra el modal
            const modal = document.getElementById('my_modal_products');
            modal.close(); // Cierra el modal con la función nativa de `<dialog>`
        }

        Vue.onMounted(() => {
            loadData();
        });

        return {
            //Functions
            fetchList,
            formatNumber,
            handleFileUpload,
            addUpdateProduct,
            changePage,
            //Variables
            isLoadingTable,
            isLoading,
            code_filter,
            name_filter,
            products,
            product,
            status,
            state,
            categories,
            category,
            //Variables modals productos
            openModal,
            closeModal,
            isModalOpen,
            is_update,
            msg,
            name,
            code,
            description,
            price,
            active,
            imagePreview
        };
    }
});
// Montar la aplicación
app.mount("#list-product");

