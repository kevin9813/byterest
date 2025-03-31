const Global = (() => {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    async function request(method, url, data = null) {
        const options = {
            method,
            headers: {
                ...(csrfToken && { "X-CSRF-TOKEN": csrfToken }) // Agrega CSRF solo si existe
            },
            credentials: "same-origin"
        };

        if (data) {
            if (data instanceof FormData) {
                options.body = data; // No convertir FormData a JSON
            } else {
                options.body = JSON.stringify(data);
                options.headers["Content-Type"] = "application/json"; // Solo para JSON
            }
        }


        try {
            const response = await fetch(url, options);
            const result = await response.json();

            if (!response.ok) {
                throw new Error(result.message || `Error ${response.status}: ${response.statusText}`);
            }

            return result;
        } catch (error) {
            console.error("Error en la petición:", error);
            return { error: error.message };
        }
    }

    
    // Funciones auxiliares adicionales
    const utils = {
        toUpperCase: (text) => text ? text.toUpperCase() : '',
        toLowerCase: (text) => text ? text.toLowerCase() : '',
        capitalize: (text) => text ? text.charAt(0).toUpperCase() + text.slice(1).toLowerCase() : '',
        formatNumber: (value) => value ?  new Intl.NumberFormat('es-CO', { minimumFractionDigits: 0, maximumFractionDigits: 0 }).format(value) : "0",

        //Alertas swal
        swalAlertLoading(title = "Cargando...", text = 'Por favor, espere...'){ Swal.fire({ title: title, text: text, allowOutsideClick: false, didOpen: () => { Swal.showLoading(); }}); }, 
        swalAlertBasic(icon, title, text){ Swal.fire({ icon: icon, title: title, text: text}); },
        swalAlertToast(icon, title){const Toast = Swal.mixin({ toast: true, position: "top-end", showConfirmButton: false, timer: 3000, timerProgressBar: true, didOpen: (toast) => {toast.onmouseenter = Swal.stopTimer; toast.onmouseleave = Swal.resumeTimer; } }); Toast.fire({icon: icon, title: title }); },
    };

    return {
        get: (url) => request("GET", url),
        post: (url, data) => request("POST", url, data),
        put: (url, data) => request("PUT", url, data),
        delete: (url) => request("DELETE", url),
        utils // Exporta el objeto con funciones auxiliares
    };
})();

export default Global;
