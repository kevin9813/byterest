<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-900">

    <div class="bg-gray-800 p-8 rounded-2xl shadow-lg w-96 text-white">
        <h2 class="text-2xl font-semibold text-center mb-6">Bienvenido</h2>
        
        @if(session('error'))
            <div class="bg-red-500 text-white text-sm p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.auth') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="usuario" class="text-sm font-light">Usuario</label>
                <input type="text" id="usuario" name="usuario" required 
                    class="w-full mt-1 p-2 rounded bg-gray-700 border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">
            </div>

            <div>
                <label for="password" class="text-sm font-light">Contraseña</label>
                <input type="password" id="password" name="password" required 
                    class="w-full mt-1 p-2 rounded bg-gray-700 border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">
            </div>

            <button type="submit"
                class="w-full py-2 bg-blue-600 hover:bg-blue-700 transition rounded text-white font-semibold">
                Iniciar Sesión
            </button>
        </form>
    </div>

</body>
</html>
