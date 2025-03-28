<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lopez</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('assets/css/plugins/daiysiui5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar pequeño -->
        <aside class="sidebar-small hidden lg:flex rounded-tr-3xl rounded-br-3xl" id="sidebarSmall">
            <div class="text-center">
                <ul class="menu menu-lg rounded-box">
                    <li class="p-2">
                        <button onclick="toggleSidebar('sidebarLarge')" class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
                        <i class="material-icons text-3xl">view_list</i>
                    </li>
                    <li class="p-2">
                        <button onclick="toggleSidebar('sidebarMessages')" class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
                            <i class="material-icons text-3xl">sms</i>
                        </button>
                    </li>
                    <li class="p-2">
                        <button onclick="toggleSidebar('sidebarNotifications')" class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
                            <i class="material-icons text-3xl">notifications</i>
                        </button>
                    </li>
                    <li class="p-2">
                        <button onclick="toggleSidebar('sidebarSettings')" class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
                            <i class="material-icons text-3xl">settings</i>
                        </button>
                    </li>
                </ul>
                
            </div>
        </aside>
        
        <!-- Sidebar grande -->
        <aside class="sidebar-large rounded-tr-3xl rounded-br-3xl" id="sidebarLarge">
            <nav class="mt-5">
                <a href="/dashboard" class="flex items-center space-x-2 text-primary transition-colors rounded-lg group hover:bg-primary hover:text-white">
                    <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:text-white"><i class="material-icons text-3xl">home</i></span>
                    <span>Inicio</span>
                </a>
                <a href="/product" class="flex items-center space-x-2 text-primary transition-colors rounded-lg group hover:bg-primary hover:text-white">
                    <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:text-white"><i class="material-icons text-3xl">inventory_2</i></span>
                    <span>Productos</span>
                </a>
                <a href="/product" class="flex items-center space-x-2 text-primary transition-colors rounded-lg group hover:bg-primary hover:text-white">
                    <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:text-white"><i class="material-icons text-3xl">fact_check</i></span>
                    <span>Facturación</span>
                </a>
            </nav>
        </aside>

        <!-- Sidebar de mensajes -->
        <aside class="sidebar-messages rounded-tr-3xl rounded-br-3xl" id="sidebarMessages">
            <nav class="mt-5">
                <p class="p-2 text-gray-600">📩 Mensajes</p>
            </nav>
        </aside>

        <!-- Sidebar de notificaciones -->
        <aside class="sidebar-notifications rounded-tr-3xl rounded-br-3xl" id="sidebarNotifications">
            <nav class="mt-5">
                <p class="p-2 text-gray-600">🔔 Notificaciones</p>
            </nav>
        </aside>

        <!-- Sidebar de setting -->
        <aside class="sidebar-settings rounded-tr-3xl rounded-br-3xl" id="sidebarSettings">
            <nav class="mt-5">
                <ul class="menu bg-base-200 rounded-box w-56">
                    <li>
                        <h2 class="menu-title">Compañia</h2>
                        <ul>
                            <li>
                                <a href="/company" class="flex items-center space-x-2 text-primary transition-colors rounded-lg group hover:bg-primary hover:text-white">
                                    <i class="material-icons text-3xl">store</i> Configuración</a>
                            </li>
                            <li>
                                <a href="/page" class="flex items-center space-x-2 text-primary transition-colors rounded-lg group hover:bg-primary hover:text-white">
                                    <i class="material-icons text-3xl">web</i> Pagina</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <br>
                <ul class="menu bg-base-200 rounded-box w-56">
                    <li>
                        <h2 class="menu-title">Usuario</h2>
                        <ul>
                            <li>
                                <a href="/profile" class="flex items-center space-x-2 text-primary transition-colors rounded-lg group hover:bg-primary hover:text-white">
                                    <i class="material-icons text-3xl">person</i> Perfil</a>
                            </li>
                            <li>
                                <a href="/logout" class="flex items-center space-x-2 text-primary transition-colors rounded-lg group hover:bg-primary hover:text-white">
                                    <i class="material-icons text-3xl">logout</i> Cerrar session</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <div class="content flex flex-col flex-grow overflow-auto" onclick="closeAllSidebars()">