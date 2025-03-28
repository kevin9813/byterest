
// document.addEventListener("contextmenu", (event) => event.preventDefault()); // Bloquea clic derecho
// document.addEventListener("keydown", (event) => {
//     if (event.ctrlKey && (event.key === "u" || event.key === "U")) {
//         event.preventDefault(); // Bloquea Ctrl + U (ver código fuente)
//     }
//     if (event.ctrlKey && event.shiftKey && (event.key === "i" || event.key === "I")) {
//         event.preventDefault(); // Bloquea Ctrl + Shift + I
//     }
//     if (event.key === "F12") {
//         event.preventDefault(); // Bloquea F12
//     }
// });


function toggleSidebar(id) {
    let sidebar = document.getElementById(id);

    if (sidebar.classList.contains("open")) {
        sidebar.classList.remove("open"); // Si está abierto, ciérralo
    } else {
        closeAllSidebars(); // Cierra los otros sidebars
        sidebar.classList.add("open"); // Ábrelo
    }
}


function closeAllSidebars() {
    document.getElementById("sidebarLarge").classList.remove("open");
    document.getElementById("sidebarMessages").classList.remove("open");
    document.getElementById("sidebarNotifications").classList.remove("open");
    document.getElementById("sidebarSettings").classList.remove("open");
}

function toggleTheme() {
    let htmlElement = document.documentElement;
    let currentTheme = htmlElement.getAttribute("data-theme");

    if (currentTheme === "light") {
        htmlElement.setAttribute("data-theme", "dark");
        localStorage.setItem("theme", "dark");
    } else {
        htmlElement.setAttribute("data-theme", "light");
        localStorage.setItem("theme", "light");
    }
}

// Mantener el tema al recargar la página
document.addEventListener("DOMContentLoaded", () => {
    const savedTheme = localStorage.getItem("theme") || "light";
    document.documentElement.setAttribute("data-theme", savedTheme);
});

