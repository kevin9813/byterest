<main class="flex-1 p-6 overflow-auto h-screen">

    <div class="mr-6">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 md:col-span-9 xl:col-span-7 2xl:col-span-9">
                <div class="card bg-base-100 shadow-xl p-4">
                    <div class="card-body">

                        <h2 class="card-title text-lg font-semibold">Filtros</h2>
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                            <div class="md:col-span-2">
                                <label for="">Documento</label>
                                <input v-model="" type="text" class="input input-bordered w-full" placeholder="Documento">
                            </div>
                            <div class="md:col-span-3">
                                <label for="">Nombre</label>
                                <input v-model="" type="text" class="input input-bordered w-full" placeholder="Nombre">
                            </div>
                            <div class="md:col-span-3">
                                <label for="">Email</label>
                                <input v-model="" type="text" class="input input-bordered w-full" placeholder="Email">
                            </div>
                            <div class="md:col-span-2">
                                <label for="">Pagos</label>
                                <select class="select select-bordered w-full text-capitalize">
                                    <option value="0">Todas</option>
                                    <option value="1">Pagados</option>
                                    <option value="2">Pendientes</option>
                                </select>
                            </div>

                            <div class="md:col-span-1">
                                <label for="">&nbsp;</label>
                                <button class="btn btn-soft btn-primary md:col-span-1"><i class="material-icons text-3xl">search</i> Buscar</button>
                            </div>
                        </div> <br>
                        

                        <button class="btn btn-primary col-span-3">
                            <i class="material-icons text-3xl">format_list_bulleted_add</i> Nuevo empleado
                        </button>
                        <div class="mt-4 overflow-auto">
                            <table class="table w-full">
                                <thead>
                                    <tr class="bg-base-200">
                                        <th>Empleado</th>
                                        <th>Documento</th>
                                        <th>Cargo</th>
                                        <th>Salario</th>
                                        <th>Pago</th>
                                        <th>Frecuencia de pago</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-base-200">
                                        <td class="font-medium">
                                            <div class="grow">
                                                <div class="flex gap-1">
                                                    <p class="grow">Mia Johnson</p>
                                                    <span class="status status-success"></span>
                                                </div>
                                                <p class="text-base-content/80 line-clamp-1 text-sm text-ellipsis">Email@email.com</p>
                                            </div>
                                        </td>
                                        <td class="font-medium">113488923</td>
                                        <td>Vendedor</td>
                                        <td class="text-sm font-medium">$ 2.200.000,00</td>
                                        <td><div aria-label="Badge" class="badge badge-soft badge-success">Pagado</div></td>
                                        <td class="text-sm">Quincenal</td>
                                        <td>
                                            <button aria-label="Show product" class="btn btn-square btn-ghost btn-xs">
                                                <i class="material-icons">visibility</i>
                                            </button>
                                            <button aria-label="Show product" class="btn btn-square btn-ghost btn-xs">
                                                <i class="material-icons text-error">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-base-200">
                                        <td class="font-medium">
                                            <div class="grow">
                                                <div class="flex gap-1">
                                                    <p class="grow">Mia Johnson</p>
                                                    <span class="status status-error"></span>
                                                </div>
                                                <p class="text-base-content/80 line-clamp-1 text-sm text-ellipsis">Email@email.com</p>
                                            </div>
                                        </td>
                                        <td class="font-medium">113488923</td>
                                        <td>Vendedor</td>
                                        <td class="text-sm font-medium">$ 2.200.000,00</td>
                                        <td><div aria-label="Badge" class="badge badge-soft badge-error">Pendiente</div></td>
                                        <td class="text-sm">Quincenal</td>
                                        <td>
                                            <button aria-label="Show product" class="btn btn-square btn-ghost btn-xs">
                                                <i class="material-icons text-2xl">visibility</i>
                                            </button>
                                            <button aria-label="Show product" class="btn btn-square btn-ghost btn-xs">
                                                <i class="material-icons text-error">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-span-12 md:col-span-3 xl:col-span-5 2xl:col-span-3">
                <div class="card bg-base-100 shadow-xl p-4">
                    
                    <div class="mt-4 space-y-3.5">
                        <div class="flex items-center gap-3">
                            <i class="material-icons bg-base-200 mask mask-squircle size-11 p-2">person_apron</i>
                            <div class="grow">
                                <p class="leading-none font-medium">Salesforce prueba</p>
                                <p class="text-base-content/80 line-clamp-1 text-sm">$ 120.000,00</p>
                            </div>
                            <button class="btn btn-xs btn-soft btn-error">Egreso</button>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons bg-base-200 mask mask-squircle size-11 p-2">person_apron</i>
                            <div class="grow">
                                <p class="leading-none font-medium">Asana user</p>
                                <p class="text-base-content/80 line-clamp-1 text-sm">$ 10.000,00</p>
                            </div>
                            <button class="btn btn-xs btn-soft btn-success">Ingreso</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

