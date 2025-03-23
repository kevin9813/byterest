import Global from "../../controllers/global.js";

const app = Vue.createApp({
    setup() {
        const isLoading = Vue.ref(true); // Inicia el cargando
        const company = Vue.ref(null); 
        const navItems = Vue.ref(["active", "", ""]);
        const tabItems = Vue.ref(["active show", "", ""]);


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

        const navActive = (activeIndex) => {
            navItems.value = navItems.value.map((_, index) =>
                index === activeIndex ? "active" : ""
            );
            tabItems.value = tabItems.value.map((_, index) =>
                index === activeIndex ? "active show" : ""
            );
        }

        Vue.onMounted(() => {
            fetchCompany();
        });

        return {
            navActive,
            isLoading,
            company,
            navItems,
            tabItems, 
        };
    }
});

// Montar la aplicación
app.mount("#company");

