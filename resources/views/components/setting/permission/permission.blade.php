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
                                                    <div class="flex items-center gap-2.5"><span class="iconify lucide--hard-drive text-primary size-4.5"></span><span class="text-primary font-medium">Local Storage</span><span class="text-primary ms-auto text-sm font-medium">64%</span></div>
                                                    <div class="mt-4 flex items-center justify-between gap-2 text-sm"><span class="font-medium">162 GB</span><span class="text-base-content/80 text-xs">Used of 250 GB</span></div>
                                                    <progress max="250" value="160" class="progress progress-primary mt-1 h-1.5"></progress>
                                                </div>
                                            </div>
                                            <p class="mt-6 text-sm font-medium">In Process</p>
                                            <div class="mt-3">
                                                <div class="card card-border border-base-300">
                                                    <div class="card-body px-4 pt-3 pb-2">
                                                        <div>
                                                            <div class="flex items-center justify-between"><span class="font-medium max-sm:text-sm">Feedback video (.mp4)</span>
                                                                <div class="inline-flex gap-2"><span class="iconify lucide--pause size-4"></span><span class="iconify lucide--x-circle text-error size-4"></span></div>
                                                            </div>
                                                            <div class="mt-1 flex items-center justify-between text-xs"><span>70%</span><span>1.2 GiB</span></div>
                                                            <progress class="progress progress-success h-1 align-super" max="100" value="70"></progress>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-center justify-between"><span class="font-medium max-sm:text-sm">Company revenue (.xlsx)</span>
                                                                <div class="inline-flex gap-2"><span class="iconify lucide--play size-4"></span><span class="iconify lucide--x-circle text-error size-4"></span></div>
                                                            </div>
                                                            <div class="mt-1 flex items-center justify-between text-xs"><span>20%</span><span>12 MiB</span></div>
                                                            <progress class="progress progress-error h-1 align-super" max="100" value="20"></progress>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-6 text-sm font-medium">File Activity</p>
                                            <div class="mt-3 overflow-hidden">
                                                <ul class="timeline timeline-vertical timeline-snap-icon timeline-hr-sm -ms-[100%] ps-10">
                                                    <li>
                                                        <div class="timeline-middle">
                                                            <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--pencil size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end my-2.5 w-full px-4">
                                                            <div class="flex items-center justify-between"><span class="text-sm font-medium">Olivia Duncan</span><span class="text-base-content/60 text-xs">Just Now</span></div>
                                                            <p class="text-base-content/70 mt-0.5 text-xs">Edited package.json in e-commerce</p>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                        <div class="timeline-middle">
                                                            <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--arrow-up-from-line size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end my-2.5 w-full px-4">
                                                            <div class="flex items-center justify-between"><span class="text-sm font-medium">Tillie Frank</span><span class="text-base-content/60 text-xs">22 hours</span></div>
                                                            <p class="text-base-content/70 mt-0.5 text-xs">Uploaded app.tsx file in react directory</p>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                        <div class="timeline-middle">
                                                            <div class="bg-error/10 text-error flex items-center rounded-full p-2"><span class="iconify lucide--trash size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end my-2.5 w-full px-4">
                                                            <div class="flex items-center justify-between"><span class="text-sm font-medium">Zaid Pope</span><span class="text-base-content/60 text-xs">3 days</span></div>
                                                            <p class="text-base-content/70 mt-0.5 text-xs">Removed style.css &amp; images folder from root</p>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                        <div class="timeline-middle">
                                                            <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--folder-input size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end my-2.5 w-full px-4">
                                                            <div class="flex items-center justify-between"><span class="text-sm font-medium">Grover Russo</span><span class="text-base-content/60 text-xs">Week ago</span></div>
                                                            <p class="text-base-content/70 mt-0.5 text-xs">Moved folders to inner directory</p>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                        <div class="timeline-middle">
                                                            <div class="bg-success/10 text-success flex items-center rounded-full p-2"><span class="iconify lucide--folder-plus size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end my-2.5 w-full px-4">
                                                            <div class="flex items-center justify-between"><span class="text-sm font-medium">Qasim Cotton</span><span class="text-base-content/60 text-xs">This month</span></div>
                                                            <p class="text-base-content/70 mt-0.5 text-xs">Created the root project</p>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                        <div class="timeline-middle">
                                                            <div class="bg-base-200 flex items-center rounded-full p-2"><span class="iconify lucide--more-horizontal size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end mx-5 my-2">
                                                            <button class="btn btn-sm btn-soft btn-primary">View Full Activity</button>
                                                        </div>
                                                    </li>
                                                </ul>
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
                        <input role="tab" class="tab" :aria-label="role.name" type="radio" :checked="index === 0" name="tabs-radio"/>
                        <!-- TAB CONTENT -->
                        <div class="tab-content border-base-200 bg-base-100 p-6">
                            <h2 class="text-lg font-bold">@{{ role.name }}</h2>
                            <!-- Agrupación por type_name -->
                            <div v-for="type_name in [...new Set(rolesByPermissions?.permissions.map(p => p.type_name))]" :key="type">
                                <h3 class="mt-4 text-md font-semibold">@{{ type_name }}</h3>
                                <div v-for="permission in rolesByPermissions?.permissions.filter(p => p.type_name === type_name)" :key="permission.id">
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" @click="gestionarPermissions(role.id, permission.id)" :checked="role?.permissions.some(rp => rp?.id === permission?.id)">
                                        <span>@{{ permission?.name }}</span>
                                    </input>
                                </label>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                {{-- permisos  --}}


                <h3 class="mt-6 font-medium">Folders</h3>
                <div class="mt-3">
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-3 2xl:grid-cols-5">
                        <div class="card card-border bg-base-100">
                            <div class="card-body p-3">
                                <div class="flex items-center gap-2">
                                    <div class="rounded-box flex items-center p-1.5 bg-primary/5 text-primary"><span class="iconify lucide--image size-5"></span></div><span class="text-sm font-medium">My Images</span>
                                    <div class="ms-auto">
                                        <div class="dropdown dropdown-bottom dropdown-center">
                                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm" aria-label="Menu"><span class="iconify lucide--more-vertical size-4"></span></div>
                                            <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div><span class="iconify lucide--arrow-down-to-line size-4"></span>Download</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--pen-line size-4"></span>Rename</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--user-round-plus size-4"></span>Share</div>
                                                    </li>
                                                </ul>
                                                <hr class="border-base-300">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div class="text-error hover:bg-error/10"><span class="iconify lucide--trash size-4"></span>Move to bin</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-base-content/70 mt-2 flex items-center text-xs">450 Files</div>
                            </div>
                        </div>
                        <div class="card card-border bg-base-100">
                            <div class="card-body p-3">
                                <div class="flex items-center gap-2">
                                    <div class="rounded-box flex items-center p-1.5 bg-secondary/5 text-secondary"><span class="iconify lucide--folder-archive size-5"></span></div><span class="text-sm font-medium">Archive</span>
                                    <div class="ms-auto">
                                        <div class="dropdown dropdown-bottom dropdown-center">
                                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm" aria-label="Menu"><span class="iconify lucide--more-vertical size-4"></span></div>
                                            <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div><span class="iconify lucide--arrow-down-to-line size-4"></span>Download</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--pen-line size-4"></span>Rename</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--user-round-plus size-4"></span>Share</div>
                                                    </li>
                                                </ul>
                                                <hr class="border-base-300">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div class="text-error hover:bg-error/10"><span class="iconify lucide--trash size-4"></span>Move to bin</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-base-content/70 mt-2 flex items-center text-xs">54 Files</div>
                            </div>
                        </div>
                        <div class="card card-border bg-base-100">
                            <div class="card-body p-3">
                                <div class="flex items-center gap-2">
                                    <div class="rounded-box flex items-center p-1.5 bg-warning/5 text-warning"><span class="iconify lucide--music size-5"></span></div><span class="text-sm font-medium">Music</span>
                                    <div class="ms-auto">
                                        <div class="dropdown dropdown-bottom dropdown-center">
                                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm" aria-label="Menu"><span class="iconify lucide--more-vertical size-4"></span></div>
                                            <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div><span class="iconify lucide--arrow-down-to-line size-4"></span>Download</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--pen-line size-4"></span>Rename</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--user-round-plus size-4"></span>Share</div>
                                                    </li>
                                                </ul>
                                                <hr class="border-base-300">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div class="text-error hover:bg-error/10"><span class="iconify lucide--trash size-4"></span>Move to bin</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-base-content/70 mt-2 flex items-center text-xs">874 Files</div>
                            </div>
                        </div>
                        <div class="card card-border bg-base-100">
                            <div class="card-body p-3">
                                <div class="flex items-center gap-2">
                                    <div class="rounded-box flex items-center p-1.5 bg-info/5 text-info"><span class="iconify lucide--video size-5"></span></div><span class="text-sm font-medium">Videos</span>
                                    <div class="ms-auto">
                                        <div class="dropdown dropdown-bottom dropdown-center">
                                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm" aria-label="Menu"><span class="iconify lucide--more-vertical size-4"></span></div>
                                            <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div><span class="iconify lucide--arrow-down-to-line size-4"></span>Download</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--pen-line size-4"></span>Rename</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--user-round-plus size-4"></span>Share</div>
                                                    </li>
                                                </ul>
                                                <hr class="border-base-300">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div class="text-error hover:bg-error/10"><span class="iconify lucide--trash size-4"></span>Move to bin</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-base-content/70 mt-2 flex items-center text-xs">125 Files</div>
                            </div>
                        </div>
                        <div class="card card-border bg-base-100">
                            <div class="card-body p-3">
                                <div class="flex items-center gap-2">
                                    <div class="rounded-box flex items-center p-1.5 bg-error/5 text-error"><span class="iconify lucide--shield-check size-5"></span></div><span class="text-sm font-medium">Private</span>
                                    <div class="ms-auto">
                                        <div class="dropdown dropdown-bottom dropdown-center">
                                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm" aria-label="Menu"><span class="iconify lucide--more-vertical size-4"></span></div>
                                            <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div><span class="iconify lucide--arrow-down-to-line size-4"></span>Download</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--pen-line size-4"></span>Rename</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--user-round-plus size-4"></span>Share</div>
                                                    </li>
                                                </ul>
                                                <hr class="border-base-300">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div class="text-error hover:bg-error/10"><span class="iconify lucide--trash size-4"></span>Move to bin</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-base-content/70 mt-2 flex items-center text-xs">8 Files</div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <div class="flex items-center gap-2.5"><span class="iconify lucide--hard-drive text-primary size-4.5"></span><span class="text-primary font-medium">Local Storage</span><span class="text-primary ms-auto text-sm font-medium">64%</span></div>
                                <div class="mt-4 flex items-center justify-between gap-2 text-sm"><span class="font-medium">162 GB</span><span class="text-base-content/80 text-xs">Used of 250 GB</span></div>
                                <progress max="250" value="160" class="progress progress-primary mt-1 h-1.5"></progress>
                            </div>
                        </div>
                        <p class="mt-6 text-sm font-medium">In Process</p>
                        <div class="mt-3">
                            <div class="card card-border border-base-300">
                                <div class="card-body px-4 pt-3 pb-2">
                                    <div>
                                        <div class="flex items-center justify-between"><span class="font-medium max-sm:text-sm">Feedback video (.mp4)</span>
                                            <div class="inline-flex gap-2"><span class="iconify lucide--pause size-4"></span><span class="iconify lucide--x-circle text-error size-4"></span></div>
                                        </div>
                                        <div class="mt-1 flex items-center justify-between text-xs"><span>70%</span><span>1.2 GiB</span></div>
                                        <progress class="progress progress-success h-1 align-super" max="100" value="70"></progress>
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between"><span class="font-medium max-sm:text-sm">Company revenue (.xlsx)</span>
                                            <div class="inline-flex gap-2"><span class="iconify lucide--play size-4"></span><span class="iconify lucide--x-circle text-error size-4"></span></div>
                                        </div>
                                        <div class="mt-1 flex items-center justify-between text-xs"><span>20%</span><span>12 MiB</span></div>
                                        <progress class="progress progress-error h-1 align-super" max="100" value="20"></progress>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-6 text-sm font-medium">File Activity</p>
                        <div class="mt-3 overflow-hidden">
                            <ul class="timeline timeline-vertical timeline-snap-icon timeline-hr-sm -ms-[100%] ps-10">
                                <li>
                                    <div class="timeline-middle">
                                        <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--pencil size-4"></span></div>
                                    </div>
                                    <div class="timeline-end my-2.5 w-full px-4">
                                        <div class="flex items-center justify-between"><span class="text-sm font-medium">Olivia Duncan</span><span class="text-base-content/60 text-xs">Just Now</span></div>
                                        <p class="text-base-content/70 mt-0.5 text-xs">Edited package.json in e-commerce</p>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                    <div class="timeline-middle">
                                        <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--arrow-up-from-line size-4"></span></div>
                                    </div>
                                    <div class="timeline-end my-2.5 w-full px-4">
                                        <div class="flex items-center justify-between"><span class="text-sm font-medium">Tillie Frank</span><span class="text-base-content/60 text-xs">22 hours</span></div>
                                        <p class="text-base-content/70 mt-0.5 text-xs">Uploaded app.tsx file in react directory</p>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                    <div class="timeline-middle">
                                        <div class="bg-error/10 text-error flex items-center rounded-full p-2"><span class="iconify lucide--trash size-4"></span></div>
                                    </div>
                                    <div class="timeline-end my-2.5 w-full px-4">
                                        <div class="flex items-center justify-between"><span class="text-sm font-medium">Zaid Pope</span><span class="text-base-content/60 text-xs">3 days</span></div>
                                        <p class="text-base-content/70 mt-0.5 text-xs">Removed style.css &amp; images folder from root</p>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                    <div class="timeline-middle">
                                        <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--folder-input size-4"></span></div>
                                    </div>
                                    <div class="timeline-end my-2.5 w-full px-4">
                                        <div class="flex items-center justify-between"><span class="text-sm font-medium">Grover Russo</span><span class="text-base-content/60 text-xs">Week ago</span></div>
                                        <p class="text-base-content/70 mt-0.5 text-xs">Moved folders to inner directory</p>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                    <div class="timeline-middle">
                                        <div class="bg-success/10 text-success flex items-center rounded-full p-2"><span class="iconify lucide--folder-plus size-4"></span></div>
                                    </div>
                                    <div class="timeline-end my-2.5 w-full px-4">
                                        <div class="flex items-center justify-between"><span class="text-sm font-medium">Qasim Cotton</span><span class="text-base-content/60 text-xs">This month</span></div>
                                        <p class="text-base-content/70 mt-0.5 text-xs">Created the root project</p>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                    <div class="timeline-middle">
                                        <div class="bg-base-200 flex items-center rounded-full p-2"><span class="iconify lucide--more-horizontal size-4"></span></div>
                                    </div>
                                    <div class="timeline-end mx-5 my-2">
                                        <button class="btn btn-sm btn-soft btn-primary">View Full Activity</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
