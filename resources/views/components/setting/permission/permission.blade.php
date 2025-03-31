<!-- Contenido Principal -->
<main class="flex-1 p-6 overflow-auto h-screen">
    <div class="pcoded-content" id="permission">

        <div v-show="isLoading"><center><img :src="'/assets/img/gif/loading.gif'" alt=""></center></div>
        <div v-show="!isLoading" class="grid grid-cols-1 gap-6 xl:grid-cols-3 2xl:grid-cols-4">
            <div class="col-span-1 xl:col-span-2 2xl:col-span-3">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium">Permisos</h3>
                    <div class="inline-flex items-center gap-3">
                        <div class="drawer drawer-end">
                            <input id="apps-file-overview-drawer" class="drawer-toggle" aria-label="File Overview Trigger" type="checkbox">
                            <div class="drawer-content">
                                <label for="apps-file-overview-drawer" class="btn drawer-button btn-sm btn-ghost border-base-300 flex xl:hidden"><i class="material-icons">topic</i></label>
                            </div>
                            <div class="drawer-side z-[50]">
                                <label for="apps-file-overview-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                                {{-- Roles movil  --}}
                                <div class="w-72">
                                    <div class="card bg-base-100 card-border">
                                        <div class="card-body gap-0">
                                            <div class="flex items-center justify-between">
                                                <p class="font-medium">Roles</p>
                                                <button class="btn btn-success btn-outline btn-sm border-transparent">Crear</button>
                                            </div>
                                            <div class="card card-border bg-primary/5 border-primary/10 mt-3">
                                                <div class="card-body p-4">
                                                    <div class="flex items-center gap-2.5">
                                                        <span class="iconify lucide--hard-drive text-primary size-4.5"></span>
                                                        <span class="font-medium">Administrador</span>
                                                        <span class="text-primary ms-auto text-sm font-medium">20 Usuario</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- permisos  --}}
                <div role="tablist" class="tabs tabs-lift">
                    <template v-for="(role, index) in rolesByPermissions?.roles" :key="role.id">
                        <!-- TAB HEADER -->
                        <input role="tab" class="tab" :aria-label="role.name" type="radio" :checked="index === 0" name="tabs-radio"></input>
                        <!-- TAB CONTENT -->
                        <div class="tab-content border-base-200 bg-base-100 p-6">
                            <h2 class="text-lg font-bold">@{{ role.name }}</h2>
                            <!-- Agrupación por type_name -->
                            <div v-for="type_name in [...new Set(rolesByPermissions?.permissions.map(p => p.type_name))]" :key="type">
                                <h3 class="mt-4 text-md font-semibold">@{{ type_name }}</h3>
                                <div v-for="permission in rolesByPermissions?.permissions.filter(p => p.type_name === type_name)" :key="permission.id">
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" @click="gestionarPermissions(role.id, permission.id, $event.target.checked)" :checked="role?.permissions.some(rp => rp?.id === permission?.id)" class="toggle toggle-success" />
                                    <span>@{{ permission?.name }}</span>
                                </label>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                {{-- permisos  --}}

            </div>
            
            <div class="hidden xl:col-span-1 xl:block 2xl:col-span-1">
                <div class="card bg-base-100 card-border">
                    <div class="card-body gap-0">
                        <div class="flex items-center justify-between">
                            <p class="font-medium">Roles</p>
                            <button class="btn btn-success btn-outline btn-sm border-transparent">Crear</button>
                        </div>
                        <div class="card card-border bg-primary/5 border-primary/10 mt-3">
                            <div class="card-body p-4">
                                <div class="flex items-center gap-2.5">
                                    <span class="iconify lucide--hard-drive text-primary size-4.5"></span>
                                    <span class="font-medium">Administrador</span>
                                    <span class="text-primary ms-auto text-sm font-medium">20 Usuario</span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card card-border bg-primary/5 border-primary/10 mt-3">
                            <div class="card-body p-4">
                                <div class="flex items-center gap-2.5"><span class="iconify lucide--hard-drive text-primary size-4.5"></span><span class="text-primary font-medium">Local Storage</span><span class="text-primary ms-auto text-sm font-medium">64%</span></div>
                                <div class="mt-4 flex items-center justify-between gap-2 text-sm"><span class="font-medium">162 GB</span><span class="text-base-content/80 text-xs">Used of 250 GB</span></div>
                                <progress max="250" value="160" class="progress progress-primary mt-1 h-1.5"></progress>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
