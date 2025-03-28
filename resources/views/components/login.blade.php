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


{{-- <div class="flex flex-col w-full md:w-1/2 xl:w-2/5 2xl:w-2/5 3xl:w-1/3 mx-auto p-8 md:p-10 2xl:p-12 3xl:p-14 bg-[#000000] rounded-2xl shadow-xl">
    <div class="flex flex-col justify-center mx-auto items-center gap-3 pb-4">
        <div>
            <img src="/favicon.svg" alt="Logo" width="50">
        </div>
        <!---->
         <h1 class="text-3xl font-bold text-[#ffffff] text-[#ffffff] my-auto">Bienvenido</h1>
    </div>
    <!---->
    <form class="flex flex-col">
        <div class="pb-2">
            <label for="email" class="block mb-2 text-sm font-medium text-[#ffffff]">Email</label>
            <div class="relative text-gray-400"><span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></span> 
                <input type="email" name="email" id="email" class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring-3 ring-transparent focus:ring-1 focus:outline-hidden focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4" placeholder="name@company.com" autocomplete="off">
            </div>
        </div>
        <div class="pb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-[#ffffff]">Password</label>
            <div class="relative text-gray-400"><span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-asterisk"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M12 8v8"></path><path d="m8.5 14 7-4"></path><path d="m8.5 10 7 4"></path></svg></span> 
                <input type="password" name="password" id="password" placeholder="••••••••••" class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring-3 ring-transparent focus:ring-1 focus:outline-hidden focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4" autocomplete="new-password">
            </div>
        </div>
        <button type="submit" class="w-full text-[#FFFFFF] bg-[#070083] focus:ring-4 focus:outline-hidden focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-6">Login</button>
        <div class="text-sm  text-[#ffffff] text-center">Don't have an accout yet? <a href="#" class="font-medium text-[#070083] hover:underline">Sign Up</a>
        </div>
    </form>
    <!---->
</div> --}}