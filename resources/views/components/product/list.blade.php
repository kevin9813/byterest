<!-- Contenido Principal -->
<main class="flex-1 p-6 overflow-auto h-screen">
    <div class="pcoded-content" id="list-product">

        <div v-show="isLoading"><center><img :src="'/assets/img/gif/loading.gif'" alt=""></center></div>
        <div v-show="!isLoading">

            <div class="card bg-base-100 shadow-xl p-4">
                <!-- Header con filtros -->
                <div class="card-body">
                    <h2 class="card-title text-lg font-semibold">Filtros</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <select v-model="state" class="select select-bordered w-full text-capitalize">
                            <option v-for="option in status" :value="option.id">
                                @{{ option?.name }}
                            </option>
                        </select>
            
                        <select v-model="category" class="select select-bordered w-full text-capitalize">
                            <option value="0">Todas</option>
                            <option v-for="option in categories" :value="option.id">
                                @{{ option?.name }}
                            </option>
                        </select>
            
                        <input type="text" class="input input-bordered w-full" placeholder="Nombre">
                    </div>
                </div>
               
                <!-- Botón para abrir el modal -->
                <button class="btn btn-soft btn-primary" @click="openModal(false, '')"><i class="material-icons text-3xl">add</i> Agregar producto</button>
                <!-- Body con la tabla -->
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- Encabezado -->
                        <thead>
                            <tr class="bg-base-200">
                                <th >Producto</th>
                                <th class="text-center">Categoria</th>
                                <th class="text-center">Precio</th>
                                <th class="text-center">Activo</th>
                                <th class="text-center">Accion</th>
                            </tr>
                        </thead>
                        <!-- Cuerpo de la tabla -->
                        <tbody>
                            <tr v-for="product in products" :key="product.id" class="hover:bg-base-200">
                                <!-- Producto -->
                                <td>
                                    <div class="flex items-center gap-4">
                                        <!-- Imagen del producto -->
                                        <div class="avatar">
                                            <div class="w-16 h-16 rounded">
                                                <img :src="product.img ? 'assets/images_company/company_'+{{session('company_id')}}+'/'+product.img : 'assets/img/company/no-image.jpg'" alt="Producto">
                                            </div>
                                        </div>
                                        <!-- Información del producto -->
                                        <div class="flex flex-col">
                                            <span class="font-medium text-base text-heading">@{{ product.name }}</span>
                                            <small class="text-gray-500 text-sm">@{{ product.description }}</small>
                                        </div>
                                    </div>
                                </td>
                            
                                <!-- Categoría -->
                                <td class="text-center">@{{ product.category?.name }}</td>
                            
                                <!-- Precio -->
                                <td class="text-center font-semibold">$ @{{ formatNumber(product.price) }}</td>
                            
                                <!-- Estado -->
                                <td class="text-center">
                                    <span v-if="product.is_active" class="badge badge-success">Activo</span>
                                    <span v-else class="badge badge-error">Inactivo</span>
                                </td>
                            
                                <!-- Acciones -->
                                <td class="text-center">
                                    <button @click="openModal(true, product)" class="btn btn-outline btn-primary btn-sm btn-circle">
                                        <i class="material-icons text-3xl">edit_square</i>
                                    </button>
                                    <button class="btn btn-outline btn-error btn-sm btn-circle">
                                        <i class="material-icons text-danger text-3xl">delete</i>
                                    </button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>

        

             <!-- Modal ModalProducts -->
             @include('components.product.modals.form-modal')
        </div>
        

    </div>
</main>

<!-- [ Main Content ] end -->