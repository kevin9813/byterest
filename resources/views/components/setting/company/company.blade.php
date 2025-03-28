<!-- Contenido Principal -->
<main class="flex-1 p-6 overflow-auto h-screen">
    <div class="pcoded-content" id="company">

        <div v-show="isLoading"><center><img :src="'/assets/img/gif/loading.gif'" alt=""></center></div>
        <div v-show="!isLoading">

            {{-- https://nexus.daisyui.com/pages/get-help --}}
            <div class="card bg-base-100 shadow-xl p-4">
                <div class="bg-primary/10 rounded-box relative w-full overflow-hidden p-6">
                    <div class="flex justify-between">
                        <div>
                            <div class="flex items-center gap-1">
                                <p class="text-sm">Nit: @{{company?.nit}}</p>
                            </div>
                            <p class="text-primary mt-4 text-xl font-medium">@{{company?.name}}</p>
                            <p class="text-base-content/80">@{{company?.slogan}}</p>
                        </div>
                        <div class="flex flex-col items-end justify-between">
                            <button class="btn btn-sm btn-primary max-xl:btn-square">
                                <i class="material-icons text-3xl">edit_square</i>
                                <span class="max-xl:hidden">Editar</span>
                            </button>
                            <div class="text-base-content/60 flex items-center gap-2 max-xl:hidden">
                                <span class="iconify lucide--clock size-4"></span>
                                <p class="text-sm">Ultimo cambio: 2025-12-05</p>
                            </div>
                        </div>
                    </div>
                    <span class="iconify lucide--settings text-primary/5 absolute start-1/2 -bottom-12 size-44 -rotate-25"></span>
                </div>
            </div><br>

            <div class="card bg-base-100 shadow-xl p-4">
                <p class="mt-12 text-center text-2xl font-medium">Sucursales</p>
                <div class="card w-96 bg-base-100 shadow-sm">
                    <div class="card-body" v-for="branch in company?.branches">
                        <div class="flex justify-between">
                            <h2 class="text-3xl font-bold">@{{ branch.name }}</h2>
                        </div>
                        <ul class="mt-6 flex flex-col gap-2 text-xs">
                            <li>
                                <span><i class="material-icons text-3xl">map</i> Ciudad: @{{ branch?.city.name }}</span>
                            </li>
                            <li>
                                <span><i class="material-icons text-3xl">location_on</i> Direccion: @{{ branch.address }}</span>
                            </li>
                            <li>
                                <span><i class="material-icons text-3xl">smartphone</i> Whatsapp: @{{ branch.whatsapp_number }}</span>
                            </li>
                            <li>
                                <span><i class="material-icons text-3xl">add_shopping_cart</i> Ordenes: @{{ (branch.receives_orders == "1" ? "Si":"No") }}</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <button class="btn btn-primary btn-block">Editar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
