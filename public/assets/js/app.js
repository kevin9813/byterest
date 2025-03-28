
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

