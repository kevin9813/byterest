import Global from "../../controllers/global.js";

const app = Vue.createApp({
    setup() {
        const isLoading = Vue.ref(true); // Inicia el cargando
        const company = Vue.ref(null); 
       
        const fetchCompany = async () => {
            try {
                const data = await Global.get('/company/detail');
                company.value = data;
            } catch (error) {
                console.error("Error al obtener la empresa:", error);
            }finally {
                isLoading.value = false; // Finaliza el cargando
            }
        };


        Vue.onMounted(() => {
            fetchCompany();
        });

        return {
            isLoading,
            company, 
        };
    }
});

// Montar la aplicación
app.mount("#company");

