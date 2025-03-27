    
   </div>
    <!--Vuej -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>  
  
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
