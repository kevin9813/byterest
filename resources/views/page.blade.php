<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema POS - Sidebar & Navbar Inferior</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/daisyui@3.5.0"></script>
    <style>
        /* Sidebar pequeño */
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
        }
        .sidebar-small button {
            margin: 10px 0;
            font-size: 24px;
        }

        /* Estilo de la imagen de perfil */
        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ccc;
        }

        /* Sidebar grande */
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
        
        .overlay.show {
            display: block;
        }
        
        /* Contenido */
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
        .bottom-nav button {
            font-size: 24px;
        }
        
        /* Ajustes en móviles */
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
            .overlay {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="overlay" id="overlay" onclick="closeAllSidebars()"></div>
    <div class="flex h-screen">
        <!-- Sidebar pequeño -->
        <aside class="sidebar-small hidden lg:flex" id="sidebarSmall">
            <div class="text-center">
                <button onclick="toggleSidebar('sidebarLarge')">🏠</button>
                <button onclick="toggleSidebar('sidebarMessages')">💬</button>
                <button onclick="toggleSidebar('sidebarNotifications')">🔔</button>
            </div>
            <div>
                <img src="https://via.placeholder.com/40" alt="Perfil" class="profile-pic">
            </div>
        </aside>
        
        <!-- Sidebar grande -->
        <aside class="sidebar-large" id="sidebarLarge">
            <button onclick="closeAllSidebars()">✕</button>
            <nav class="mt-5">
                <a href="#" class="block p-2 text-purple-600">🏠 Home</a>
                <a href="#" class="block p-2 text-purple-600">📄 Pages</a>
            </nav>
        </aside>
        
        <!-- Sidebar de mensajes -->
        <aside class="sidebar-messages" id="sidebarMessages">
            <button onclick="closeAllSidebars()">✕</button>
            <nav class="mt-5">
                <p class="p-2 text-gray-600">📩 Mensajes</p>
            </nav>
        </aside>

        <!-- Sidebar de notificaciones -->
        <aside class="sidebar-notifications" id="sidebarNotifications">
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
        <nav class="bottom-nav lg:hidden">
            <button onclick="toggleSidebar('sidebarLarge')">🏠</button>
            <button onclick="toggleSidebar('sidebarMessages')">💬</button>
            <button onclick="toggleSidebar('sidebarNotifications')">🔔</button>
        </nav>
    </div>

    <script>
        function toggleSidebar(id) {
            closeAllSidebars();
            document.getElementById(id).classList.toggle("open");
            document.getElementById("overlay").classList.toggle("show");
        }
        
        function closeAllSidebars() {
            document.getElementById("sidebarLarge").classList.remove("open");
            document.getElementById("sidebarMessages").classList.remove("open");
            document.getElementById("sidebarNotifications").classList.remove("open");
            document.getElementById("overlay").classList.remove("show");
        }
    </script>
</body>
</html>
