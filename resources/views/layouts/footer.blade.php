    
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    

    <!--Vuej -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
  
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
