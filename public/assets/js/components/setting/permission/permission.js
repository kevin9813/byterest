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

        const gestionarPermissions = async (roleId, permissionId, isChecked) => {
            Global.utils.swalAlertLoading();
            try {
                const dataSend = {
                    "permissionId": permissionId, "roleId": roleId, "isChecked": isChecked
                };
                const data = await Global.post('/permission/addAndDelete', dataSend);
                Global.utils.swalAlertBasic('success', 'Permiso', data.message);
            } catch (error) {
                console.error("Error al obtener la empresa:", error);
            }
            

            console.log(permissionId);
            console.log(roleId);
            console.log(isChecked);
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