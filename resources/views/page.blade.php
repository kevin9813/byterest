<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema POS - Sidebar & Navbar Inferior</title>
    
    <!-- Tailwind desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- DaisyUI -->
    <script src="https://cdn.jsdelivr.net/npm/daisyui@3.5.0"></script>

    <style>
        /* Ajustes para el Sidebar Pequeño */
        .sidebar-small {
            position: fixed;
            top: 0;
            left: 0;
            width: 60px;
            height: 100vh;
            background: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            padding-top: 20px;
            padding-bottom: 20px;
            transition: width 0.3s;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        /* Sidebar grande y otros menús laterales */
        .sidebar-large, .sidebar-notifications, .sidebar-messages {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100vh;
            background: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: left 0.3s;
            z-index: 20;
        }

        .sidebar-large.open, .sidebar-notifications.open, .sidebar-messages.open {
            left: 60px;
        }

        /* Contenido principal */
        .content {
            margin-left: 60px;
            flex: 1;
            min-height: 100vh;
            background: #F3F4F6;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Barra inferior en móviles */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            z-index: 30;
        }

        .border-r-1{
            border-right-width: 1px;
        }

        .border-r-2{
            border-right-width: 2px;
        }

        .rounded-tr-3xl{
            border-top-right-radius: 2px;
        }

        .rounded-br-3xl {
            border-bottom-right-radius: 1.5rem;
        }

        @media (min-width: 768px) { 
            .bottom-nav {
                display: none !important;
            }
        }

        /* Ajustes para móviles */
        @media (max-width: 768px) {
            .sidebar-small {
                display: none;
            }

            .content {
                margin-left: 0;
            }

            .sidebar-large, .sidebar-notifications, .sidebar-messages {
                top: 0;
                left: -80%;
                height: 100vh;
                width: 70%;
                border-radius: 0;
            }

            .sidebar-large.open, .sidebar-notifications.open, .sidebar-messages.open {
                left: 0;
            }
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar pequeño -->
        <aside class="sidebar-small hidden lg:flex rounded-tr-3xl rounded-br-3xl" id="sidebarSmall">
            <div class="text-center">
                <button onclick="toggleSidebar('sidebarLarge')">🏠</button>
                <button onclick="toggleSidebar('sidebarMessages')">💬</button>
                <button onclick="toggleSidebar('sidebarNotifications')">🔔</button>
            </div>
        </aside>
        
        <!-- Sidebar grande -->
        <aside class="sidebar-large rounded-tr-3xl rounded-br-3xl" id="sidebarLarge">
            <button onclick="closeAllSidebars()">✕</button>
            <nav class="mt-5">
                <a href="#" class="block p-2 text-purple-600">🏠 Home</a>
                <a href="#" class="block p-2 text-purple-600">📄 Pages</a>
            </nav>
        </aside>

        <!-- Sidebar de mensajes -->
        <aside class="sidebar-messages rounded-tr-3xl rounded-br-3xl" id="sidebarMessages">
            <button onclick="closeAllSidebars()">✕</button>
            <nav class="mt-5">
                <p class="p-2 text-gray-600">📩 Mensajes</p>
            </nav>
        </aside>

        <!-- Sidebar de notificaciones -->
        <aside class="sidebar-notifications rounded-tr-3xl rounded-br-3xl" id="sidebarNotifications">
            <button onclick="closeAllSidebars()">✕</button>
            <nav class="mt-5">
                <p class="p-2 text-gray-600">🔔 Notificaciones</p>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <div class="content flex-1" onclick="closeAllSidebars()">
            <h1 class="text-2xl font-bold text-gray-600">In progress</h1>
        </div>
        
        <!-- Barra inferior en móviles -->
        <nav class="bottom-nav block lg:hidden">
            <button onclick="toggleSidebar('sidebarLarge')">🏠</button>
            <button onclick="toggleSidebar('sidebarMessages')">💬</button>
            <button onclick="toggleSidebar('sidebarNotifications')">🔔</button>
        </nav>
    </div>

    <script>
        function toggleSidebar(id) {
            closeAllSidebars();
            document.getElementById(id).classList.toggle("open");
        }
        
        function closeAllSidebars() {
            document.getElementById("sidebarLarge").classList.remove("open");
            document.getElementById("sidebarMessages").classList.remove("open");
            document.getElementById("sidebarNotifications").classList.remove("open");
        }
    </script>

</body>
</html>
