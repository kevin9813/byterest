<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content" id="list-product">

        <div v-show="isLoading"><center><img :src="'/assets/img/gif/loading.gif'" alt=""></center></div>
        <div v-show="!isLoading">
            <div class="row">
                <div class="card">
                
                    <div class="card-header">
                        <h5 class="mb-0">Filtrar</h5>
                        <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0">
                            <div class="col-md-4 product_status">
                                <select v-model="state" class="form-select text-capitalize">
                                    <option v-for="option in status" :value="option.id">
                                        @{{ option?.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4 product_category">
                                <select v-model="category" class="form-select text-capitalize">
                                    <option value="0">Todas</option>
                                    <option v-for="option in categories" :value="option.id">
                                        @{{ option?.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4 product_stock">
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="text-right">
                            <button class="btn btn-md btn-primary" data-toggle="modal" data-target="#modalProduct" @click="ModalProducts(false, '')">
                                <i class="material-icons-two-tone text-white">add</i> Agregar Producto
                            </button> 
                        </div> <br>
                

                        <table class="table table-hover">
                            <head>
                                <th>Producto</th>
                                <th>Categoria</th>
                                <th>Precio</th>
                                <th>Activo</th>
                                <th>Accion</th>
                            </head>
                            <body>
                                <tr v-for="product in products">
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center product-name">
                                            <div class="avatar-wrapper me-4">
                                                <div class="avatar rounded-2 bg-label-secondary">
                                                    <img :src="product.img ? 'assets/images_company/company_'+{{session('company_id')}}+'/'+product.img : 'assets/img/company/no-image.jpg'" alt="Product-9" class="rounded-2 img-product">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="text-nowrap text-heading fw-medium"> @{{product.name}}</span><small class="text-truncate d-none d-sm-block">@{{product.description}}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>@{{product.category?.name}}</td>
                                    <td>$ @{{ formatNumber(product.price) }}</td>
                                    <td> 
                                        <i v-show="product.is_active" class="material-icons-two-tone text-success">check</i>
                                        <i v-show="!product.is_active" class="material-icons-two-tone text-danger">close</i>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#modalProduct" @click="ModalProducts(true, product)"><i class="icon feather icon-edit f-16  text-success"></i></a>
                                        <a href="javascript:void(0);"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a>
                                    </td> 
                                </tr>
                            </body>
                        </table>
                    </div>
                    
                </div>
            </div>

             <!-- Modal ModalProducts -->
             @include('components.product.modals.form-modal')
        </div>
        

    </div>
</div>
<!-- [ Main Content ] end -->