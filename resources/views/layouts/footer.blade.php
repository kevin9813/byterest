    </div>
    <!-- Barra inferior en móviles -->
    <nav class="bottom-nav block lg:hidden">
        <button onclick="toggleSidebar('sidebarLarge')"  class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
            <i class="material-icons text-3xl">view_list</i>
        </button>
        <button onclick="toggleSidebar('sidebarMessages')"  class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
            <i class="material-icons text-3xl">sms</i>
        <button onclick="toggleSidebar('sidebarNotifications')"  class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
            <i class="material-icons text-3xl">notifications</i>
        </button>
        <button onclick="toggleSidebar('sidebarSettings')" class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
            <i class="material-icons text-3xl">settings</i>
        </button>
    </nav>
    </div>

    {{-- app --}}
    <script src="{{ asset("assets/js/app.js?v=1") }}"></script>
    <!--Vuej -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>  
    <!-- Tailwind desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- Funciones globales de vuejs --}}
    <script type="module" src="{{ asset("assets/js/components/controllers/global.js?v=1.1") }}"></script>

    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    {{-- Scripts de json para cada vista  --}}
    @if ($script != "")
        @if (is_array($script))
            @foreach ($script as $scrip)
                <script type="module" src="{{ asset("assets/js/" . $scrip . ".js?v=1.0.1") }}"></script>
            @endforeach
        @else
            <script type="module" src="{{ asset("assets/js/" . $script . ".js?=1.0.1") }}"></script>
        @endif
    @endif
    
    </body>
</html>

