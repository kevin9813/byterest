
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


