import Global from "../../controllers/global.js";

const app = Vue.createApp({
    setup() {
        const isLoading = Vue.ref(true); // Inicia el cargando
        const rolesByPermissions = Vue.ref(null); 
        const RolesWithUser = Vue.ref([]); 

        // Cargar datos al iniciar
        const loadData = async () => {
            isLoading.value = true;
            await Promise.all([fetchCompany(), fetchRolesWithUser()]);
            isLoading.value = false;
        };

        const fetchCompany = async () => {
            try {
                const data = await Global.get('/permission/by-role');
                rolesByPermissions.value = data;
            } catch (error) {
                console.error("Error:", error);
            }
        };

        const fetchRolesWithUser = async () => {
            try {
                const data = await Global.get('/general/roles');
                RolesWithUser.value = data;
            } catch (error) {
                console.error("Error:", error);
            }
        };

        const gestionarPermissions = async (roleId, permissionId, isChecked) => {
            //Global.utils.swalAlertLoading();
            try {
                const dataSend = {
                    "permissionId": permissionId, "roleId": roleId, "isChecked": isChecked
                };
                const data = await Global.post('/permission/addAndDelete', dataSend);
                Global.utils.swalAlertToast('success', data.message);
            } catch (error) {
                console.error("Error:", error);
            }
        };
       

        Vue.onMounted(() => {
            loadData();
        });

        return {
            gestionarPermissions,
            isLoading,
            rolesByPermissions,
            RolesWithUser
        };
    }
});

// Montar la aplicación
app.mount("#permission");