<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $tittle}} | ByteRest</title>
    <!-- Favicon icon -->
    <link rel="icon"  href="{{ asset('assets/img/logo.svg') }}"  type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
</head>

<body class="bg-gray-100">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<div class="flex h-screen">
        <!-- Sidebar -->
        <div class="group flex flex-col items-center w-16 hover:w-64 transition-all duration-300 bg-gray-600 text-white shadow-lg">
            <!-- Header -->
            <div class="flex items-center justify-between w-full p-4">
                <span class="text-xl font-bold hidden group-hover:block">Menú</span>
                <label for="sidebar-toggle" class="btn btn-circle text-white bg-transparent border-none lg:hidden">☰</label>
            </div>

            <!-- Usuario -->
            <div class="flex flex-col items-center group-hover:flex-row gap-2 p-4">
                <img src="https://i.pravatar.cc/40" class="rounded-full border-2 border-white">
                <span class="hidden group-hover:block">{{ session('user_name') }}</span>
            </div>

            <!-- Menú -->
            <ul class="menu p-2 flex-1 w-full">
                <li>
                    <a href="/dashboard" class="flex items-center gap-2">
                        <span class="material-icons text-white-500 text-3xl">home</span>
                        <span class="hidden group-hover:inline">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/product" class="flex items-center gap-2">
                        <span class="material-icons text-white-500 text-3xl">view_list</span>
                        <span class="hidden group-hover:inline">Productos</span>
                    </a>
                </li>
                <li>
                    <a href="/company" class="flex items-center gap-2">
                        <span class="material-icons text-white-500 text-3xl">settings</span>
                        <span class="hidden group-hover:inline">Configuración</span>
                    </a>
                </li>
            </ul>
        </div>