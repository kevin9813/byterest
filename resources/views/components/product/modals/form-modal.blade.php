<dialog id="my_modal_products" class="modal" v-show="isModalOpen">
    <div class="modal-box relative w-11/12 max-w-5xl">
        <!-- Cerrar Modal -->
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" @click="closeModal">✕</button>
        </form>

        <!-- Título -->
        <h3 class="text-xl font-bold text-center mb-6 text-primary">
            <i class="material-icons text-3xl">browser_updated</i> 
            @{{ is_update ? 'Actualizar' : 'Agregar' }} Producto
        </h3>

        <!-- Cargando Modal -->
        <div v-show="isLoadingModal" class="modal-body flex justify-center items-center">
            <img :src="'/assets/img/gif/loading.gif'" alt="Loading...">
        </div>

        <!-- Formulario -->
        <div class="space-y-6 py-6">
            <!-- Mensaje de error -->
            <div v-show="msg !== ''" role="alert" class="alert alert-error alert-soft">
                <i class="material-icons text-3xl">warning</i>
                <span>@{{ msg }}</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Nombre -->
                <div class="form-control">
                    <label class="label" for="name">
                        <span class="label-text">Nombre *</span>
                    </label>
                    <input v-model="name" type="text" class="input input-bordered w-full" placeholder="Nombre" id="name">
                </div>
    
                <!-- Categoría -->
                <div class="form-control">
                    <label class="label" for="category">
                        <span class="label-text">Categoría *</span>
                    </label>
                    <select v-model="category" class="select select-bordered w-full" id="category">
                        <option v-for="option in categories" :value="option.id">
                            @{{ option?.name }}
                        </option>
                    </select>
                </div>
            </div>

            <!-- Descripción -->
            <div class="form-control">
                <label class="label" for="description">
                    <span class="label-text">Descripción</span>
                </label>
                <input v-model="description" type="text" class="input input-bordered w-full" placeholder="Descripción corta" id="description">
            </div>

            <!-- Fila de Precio y Activo -->
            <div class="flex space-x-4">
                <!-- Precio -->
                <div class="form-control w-full md:w-1/2">
                    <label class="label" for="price">
                        <span class="label-text">Precio</span>
                    </label>
                    <input v-model="price" type="text" class="input input-bordered w-full" id="price">
                </div>

                <!-- Activo (Mostrar en web) -->
                <div class="form-control w-full md:w-1/2">
                    <label class="label">
                        <span class="label-text">Activo (Mostrar en web)</span>
                    </label>
                    <div class="flex items-center">
                        <label class="swap">
                            <input v-model="active" type="checkbox" class="toggle toggle-success" id="customCheckdefh4" checked="checked">
                            <div class="swap-on">Sí</div>
                            <div class="swap-off">No</div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Cargar Foto -->
            <div class="form-control w-full">
                <label class="label" for="file">
                    <span class="label-text">Cargar Foto</span>
                </label>
                <input type="file" @change="handleFileUpload" id="file" class="file-input file-input-bordered file-input-primary w-full" accept="image/jpeg, image/png, image/heic">
            </div>

            <!-- Vista previa de la imagen -->
            <div class="col-12 text-center mt-4">
                <img v-if="!is_update && imagePreview" :src="imagePreview" alt="Vista previa" class="w-48 mt-2 rounded-lg shadow-lg">
                <img v-if="is_update && imagePreview" :src="'assets/images_company/company_'+{{session('company_id')}}+'/'+imagePreview" alt="Vista previa" class="w-48 mt-2 rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Botón para guardar -->
        <div class="flex justify-center mt-6">
            <button v-show="!isLoadingModal" type="submit" class="btn btn-primary w-full md:w-1/2" @click="addUpdateProduct()">Guardar</button>
        </div>
    </div>
</dialog>
