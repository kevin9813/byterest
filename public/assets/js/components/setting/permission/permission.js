import Global from "../../controllers/global.js";

const app = Vue.createApp({
    setup() {
        const isLoading = Vue.ref(true); // Inicia el cargando
        const rolesByPermissions = Vue.ref(null); 


        const fetchCompany = async () => {
            try {
                const data = await Global.get('/permission/by-role');
                rolesByPermissions.value = data;
            } catch (error) {
                console.error("Error al obtener la empresa:", error);
            }finally {
                isLoading.value = false; // Finaliza el cargando
            }
        };

        const gestionarPermissions = async (permission_id, role_id) => {
            console.log(permission_id);
            console.log(role_id);
        };
       

        Vue.onMounted(() => {
            fetchCompany();
        });

        return {
            gestionarPermissions,
            isLoading,
            rolesByPermissions
        };
    }
});

// Montar la aplicación
app.mount("#permission");