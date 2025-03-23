<div id="modalProduct" class="modal fade" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true" data-backdrop="static" data-keyboard="false">>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="material-icons-two-tone  text-primary">add_shopping_cart</i> @{{is_update ? 'Actualizar' : 'Agregar'}}  Producto
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div v-show="isLoadingModal" class="modal-body"><center><img :src="'/assets/img/gif/loading.gif'" alt=""></center></div>
            <div class="modal-body">
                <div  class="row">
                    <div class="col-12" v-show="msg != ''">
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="material-icons-two-tone  text-danger">warning</i>
                            <div> @{{msg}} </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Nombre *</label> 
                        <input v-model="name" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Categoria *</label> 
                        <select v-model="category" class="form-select text-capitalize">
                            <option v-for="option in categories" :value="option.id">
                                @{{ option?.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción</label> 
                    <input v-model="description" type="text" class="form-control" placeholder="Descripción corta">
                </div>
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Precio</label> 
                        <input v-model="price" type="text" class="form-control">
                    </div>
                    <div class="mb-3 col-md-5">
                        <label class="form-label">Cargar Foto</label> 
                        <input type="file" @change="handleFileUpload" class="form-control" accept="image/jpeg, image/png, image/heic">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label class="form-label">Activo (Mostrar en web)</label> 
                        <div class="form-check form-switch custom-switch-v1 mb-2">
                            <input v-model="active" type="checkbox" class="form-check-input input-light-success" id="customCheckdefh4" checked="checked"> 
                        </div>
                    </div>
                    <br><div class="col-12">
                        <!-- Mostrar vista previa de la imagen -->
                        <center>
                            <img v-if="!is_update && imagePreview" :src="imagePreview" alt="Vista previa" width="200">
                            <img v-if="is_update && imagePreview" :src="'assets/images_company/company_'+{{session('company_id')}}+'/'+imagePreview+''"  alt="Vista previa" width="200">
                        </center>
                    </div>
                </div>
            
                <center>
                    <br><button v-show="!isLoadingModal" type="submit" class="btn btn-primary" @click="addUpdateProduct()">Guardar</button>
                </center>
            </div>
        </div>
    </div>
</div> 