<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content" id="company">

        <div v-show="isLoading"><center><img :src="'/assets/img/gif/loading.gif'" alt=""></center></div>
        <div v-show="!isLoading">
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-5 col-xxl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body position-relative">
                                    <div class="text-center mt-3">
                                        <div class="chat-avtar d-inline-flex mx-auto">
                                            <img class="rounded-circle img-thumbnail" :src="'/assets/img/company/logoempresa_'+company?.id+'.jpg'" alt="logo empresa" width="180px">
                                        </div>
                                        <h5 class="mb-0">@{{company?.name}}</h5>
                                        <small>Nit: @{{company?.nit}}</small>
                                    </div>
                                </div>

                                <div class="nav nav-tabs flex-column nav-pills list-group list-group-flush account-pills mb-0 border-top-0" id="user-set-tab" role="tablist" aria-orientation="vertical">
                                    <a :class="'nav-link list-group-item list-group-item-action '+navItems[0]" @click="navActive(0)" data-bs-toggle="pill" href="javascript:void(0);"><span class="f-w-500"><i class="material-icons-two-tone">home</i> Informacion General</span> </a>
                                    <a :class="'nav-link list-group-item list-group-item-action '+navItems[1]" @click="navActive(1)" data-bs-toggle="pill" href="javascript:void(0);"><span class="f-w-500"><i class="material-icons-two-tone">home</i> Personal Information</span> </a>
                                    <a :class="'nav-link list-group-item list-group-item-action '+navItems[2]" @click="navActive(2)" data-bs-toggle="pill" href="javascript:void(0);"><span class="f-w-500"><i class="material-icons-two-tone text-white">home</i> Account Information</span> </a>
                                    <a class="nav-link list-group-item list-group-item-action" data-bs-toggle="pill" href="javascript:void(0);"><span class="f-w-500"><i class="material-icons-two-tone text-white">home</i> Change Password</span> </a>
                                    <a class="nav-link list-group-item list-group-item-action" data-bs-toggle="pill" href="javascript:void(0);"><span class="f-w-500"><i class="material-icons-two-tone text-white">home</i> Email settings</span></a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Personal information</h5></div>
                                <div class="card-body position-relative">
                                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                        <p class="mb-0 text-muted me-1">Email</p>
                                        <p class="mb-0">anshan@gmail.com</p>
                                    </div>
                                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                        <p class="mb-0 text-muted me-1">Phone</p>
                                        <p class="mb-0">(+1-876) 8654 239 581</p>
                                    </div>
                                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                                        <p class="mb-0 text-muted me-1">Location</p>
                                        <p class="mb-0">New York</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xxl-9">
                            <div class="tab-content" id="user-set-tabContent">
                                <div :class="'tab-pane fade '+tabItems[0]" role="tabpanel" >
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Eslogan</h5></div>
                                        <div class="card-body">
                                            <p class="mb-0">@{{company?.slogan}}</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Sedes</h5></div>
                                        <div class="card-body">
                                           <div class="row">
                                                <div class="col-md-12 col-lg-4" v-for="comp in company?.branches">
                                                    <div class="card online-form">
                                                        <div class="card-header">
                                                            <h5><i class="material-icons-two-tone">ballot</i> @{{comp.name}}</h5></div>
                                                            <div class="text-right">
                                                                <a href="">Editar</a>
                                                            </div>
                                                        <div class="card-body">
                                                            <p class="text-muted m-0"><i class="material-icons-two-tone">pin_drop</i> @{{comp.address}}</p>
                                                            <p class="text-muted m-0"><i class="material-icons-two-tone">smartphone</i> @{{comp.whatsapp_number}}</p>
                                                            <div class="border-top m-t-5 p-t-10">
                                                                <div class="row">
                                                                    <div class="col-sm-6 m-t-5"><span class="f-16 f-w-400 m-0">@{{comp.city?.name}}</span>
                                                                        <p class="text-muted m-b-0">Ciudad</p>
                                                                    </div>
                                                                    <div class="col-sm-6 m-t-5">
                                                                        <span v-show="comp.receives_orders == 1"><i class="material-icons-two-tone text-success">check_circle</i></span>
                                                                        <span v-show="comp.receives_orders == 2"><i class="material-icons-two-tone text-danger">cancel</i></span>
                                                                        <p class="text-muted m-b-0">Ordenes</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Education</h5></div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush acc-feeds-list">
                                                <li class="list-group-item p-0">
                                                    <div class="row">
                                                        <div class="col-md-4 feed-title">
                                                            <p class="mb-1 text-muted">Master Degree (Year)</p>
                                                            <p class="mb-0">2014-2017</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Institute</p>
                                                            <p class="mb-0">-</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item p-0">
                                                    <div class="row">
                                                        <div class="col-md-4 feed-title">
                                                            <p class="mb-1 text-muted">Bachelor (Year)</p>
                                                            <p class="mb-0">2011-2013</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Institute</p>
                                                            <p class="mb-0">Imperial College London</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item p-0">
                                                    <div class="row">
                                                        <div class="col-md-4 feed-title">
                                                            <p class="mb-1 text-muted">School (Year)</p>
                                                            <p class="mb-0">2009-2011</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Institute</p>
                                                            <p class="mb-0">School of London, England</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Employment</h5></div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush acc-feeds-list">
                                                <li class="list-group-item p-0">
                                                    <div class="row">
                                                        <div class="col-md-4 feed-title">
                                                            <p class="mb-1 text-muted">Senior</p>
                                                            <p class="mb-0">Senior UI/UX designer (Year)</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Job Responsibility</p>
                                                            <p class="mb-0">Perform task related to project manager with the 100+ team under my observation. Team management is key role in this company.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item p-0">
                                                    <div class="row">
                                                        <div class="col-md-4 feed-title">
                                                            <p class="mb-1 text-muted">Trainee cum Project Manager (Year)</p>
                                                            <p class="mb-0">2017-2019</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Job Responsibility</p>
                                                            <p class="mb-0">Team management is key role in this company.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item p-0">
                                                    <div class="row">
                                                        <div class="col-md-4 feed-title">
                                                            <p class="mb-1 text-muted">School (Year)</p>
                                                            <p class="mb-0">2009-2011</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Institute</p>
                                                            <p class="mb-0">School of London, England</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div :class="'tab-pane fade '+tabItems[1]" role="tabpanel" >
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Personal Information</h5></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">First Name</label>
                                                        <input type="text" class="form-control" value="Anshan">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" value="Handgun">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Country</label>
                                                        <input type="text" class="form-control" value="New York">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Zip code</label>
                                                        <input type="text" class="form-control" value="956754">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Bio</label>
                                                        <textarea class="form-control">Hello, I’m Anshan Handgun Creative Graphic Designer &amp; User Experience Designer based in Website, I create digital Products a more Beautiful and usable place. Morbid accusant ipsum. Nam nec tellus at.</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-0">
                                                        <label class="form-label">Experience</label>
                                                        <select class="form-control">
                                                            <option>Startup</option>
                                                            <option>2 year</option>
                                                            <option>3 year</option>
                                                            <option selected="selected">4 year</option>
                                                            <option>5 year</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Social Network</h5></div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-grow-1 me-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="avtar avtar-xs btn-light-twitter"><i class="fab fa-twitter f-16"></i></div>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0">Twitter</h6></div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button class="btn btn-link-primary">Connect</button>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-grow-1 me-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="avtar avtar-xs btn-light-facebook"><i class="fab fa-facebook-f f-16"></i></div>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0">Facebook <small class="text-muted f-w-400">/Anshan Handgun</small></h6></div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button class="btn btn-link-danger">Remove</button>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 me-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="avtar avtar-xs btn-light-linkedin"><i class="fab fa-linkedin-in f-16"></i></div>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0">Linkedin</h6></div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button class="btn btn-link-primary">Connect</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Contact Information</h5></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Contact Phone</label>
                                                        <input type="text" class="form-control" value="(+99) 9999 999 999">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" value="demo@sample.com">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Portfolio Url</label>
                                                        <input type="text" class="form-control" value="https://demo.com">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-0">
                                                        <label class="form-label">Address</label>
                                                        <textarea class="form-control">3379 Monroe Avenue, Fort Myers, Florida(33912)</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end btn-page">
                                        <div class="btn btn-outline-secondary">Cancel</div>
                                        <div class="btn btn-primary">Update Profile</div>
                                    </div>
                                </div>
                                <div :class="'tab-pane fade '+tabItems[2]" role="tabpanel" >
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>General Settings</h5></div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0">
                                                    <div class="row mb-0">
                                                        <label class="col-form-label col-md-4 col-sm-12 text-md-end">Username <span class="text-danger">*</span></label>
                                                        <div class="col-md-8 col-sm-12">
                                                            <input type="text" class="form-control" value="Ashoka_Tano_16">
                                                            <div class="form-text">Your Profile URL: <a href="#" class="link-primary">https://pc.com/Ashoka_Tano_16</a></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="row mb-0">
                                                        <label class="col-form-label col-md-4 col-sm-12 text-md-end">Account Email <span class="text-danger">*</span></label>
                                                        <div class="col-md-8 col-sm-12">
                                                            <input type="text" class="form-control" value="demo@sample.com">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="row mb-0">
                                                        <label class="col-form-label col-md-4 col-sm-12 text-md-end">Language</label>
                                                        <div class="col-md-8 col-sm-12">
                                                            <select class="form-control">
                                                                <option>Washington</option>
                                                                <option>India</option>
                                                                <option>Africa</option>
                                                                <option>New York</option>
                                                                <option>Malaysia</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0 pb-0">
                                                    <div class="row mb-0">
                                                        <label class="col-form-label col-md-4 col-sm-12 text-md-end">Sign in Using <span class="text-danger">*</span></label>
                                                        <div class="col-md-8 col-sm-12">
                                                            <select class="form-control">
                                                                <option>Password</option>
                                                                <option>Face Recognition</option>
                                                                <option>Thumb Impression</option>
                                                                <option>Key</option>
                                                                <option>Pin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Advance Settings</h5></div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-1">Secure Browsing</p>
                                                            <p class="text-muted text-sm mb-0">Browsing Securely ( https ) when it's necessary</p>
                                                        </div>
                                                        <div class="form-check form-switch p-0">
                                                            <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch" checked="">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-1">Login Notifications</p>
                                                            <p class="text-muted text-sm mb-0">Notify when login attempted from other place</p>
                                                        </div>
                                                        <div class="form-check form-switch p-0">
                                                            <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch" checked="">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0 pb-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-1">Login Approvals</p>
                                                            <p class="text-muted text-sm mb-0">Approvals is not required when login from unrecognized devices.</p>
                                                        </div>
                                                        <div class="form-check form-switch p-0">
                                                            <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch" checked="">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Recognized Devices</h5></div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="me-2">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avtar bg-light-primary"><i class="ph-duotone ph-desktop f-24"></i></div>
                                                                <div class="ms-2">
                                                                    <p class="mb-1">Celt Desktop</p>
                                                                    <p class="mb-0 text-muted">4351 Deans Lane</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="text-success d-inline-block me-2"><i class="fas fa-circle f-10 me-2"></i> Active</div><a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a></div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="me-2">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avtar bg-light-primary"><i class="ph-duotone ph-device-tablet-camera f-24"></i></div>
                                                                <div class="ms-2">
                                                                    <p class="mb-1">Imco Tablet</p>
                                                                    <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="text-muted d-inline-block me-2"><i class="fas fa-circle f-10 me-2"></i> 5 days</div><a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a></div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0 pb-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="me-2">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avtar bg-light-primary"><i class="ph-duotone ph-device-mobile-camera f-24"></i></div>
                                                                <div class="ms-2">
                                                                    <p class="mb-1">Albs Mobile</p>
                                                                    <p class="mb-0 text-muted">3462 Fairfax Drive</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="text-muted d-inline-block me-2"><i class="fas fa-circle f-10 me-2"></i> 1 month</div><a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Active Sessions</h5></div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="me-2">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avtar bg-light-primary"><i class="ph-duotone ph-desktop f-24"></i></div>
                                                                <div class="ms-2">
                                                                    <p class="mb-1">Celt Desktop</p>
                                                                    <p class="mb-0 text-muted">4351 Deans Lane</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-link-danger">Logout</button>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0 pb-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="me-2">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avtar bg-light-primary"><i class="ph-duotone ph-device-tablet-camera f-24"></i></div>
                                                                <div class="ms-2">
                                                                    <p class="mb-1">Moon Tablet</p>
                                                                    <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-link-danger">Logout</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body text-end">
                                            <button class="btn btn-outline-dark me-2">Clear</button>
                                            <button class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="user-set-passwort" role="tabpanel" aria-labelledby="user-set-passwort-tab">
                                    <div class="card alert alert-warning p-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 me-3">
                                                    <h4 class="alert-heading">Alert!</h4>
                                                    <p class="mb-2">Your Password will expire in every 3 months. So change it periodically.</p><a href="#" class="alert-link"><u>Do not share your password</u></a></div>
                                                <div class="flex-shrink-0"><img src="../assets/images/application/img-accout-password-alert.png" alt="img" class="img-fluid wid-80"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Change Password</h5></div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item pt-0 px-0">
                                                    <div class="row mb-0">
                                                        <label class="col-form-label col-md-4 col-sm-12 text-md-end">Current Password <span class="text-danger">*</span></label>
                                                        <div class="col-md-8 col-sm-12">
                                                            <input type="password" class="form-control">
                                                            <div class="form-text">Forgot password? <a href="#" class="link-primary">Click here</a></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="row mb-0">
                                                        <label class="col-form-label col-md-4 col-sm-12 text-md-end">New Password <span class="text-danger">*</span></label>
                                                        <div class="col-md-8 col-sm-12">
                                                            <input type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item pb-0 px-0">
                                                    <div class="row mb-0">
                                                        <label class="col-form-label col-md-4 col-sm-12 text-md-end">Confirm Password <span class="text-danger">*</span></label>
                                                        <div class="col-md-8 col-sm-12">
                                                            <input type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body text-end">
                                            <div class="btn btn-outline-secondary me-2">Cancel</div>
                                            <div class="btn btn-primary">Change Password</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="user-set-email" role="tabpanel" aria-labelledby="user-set-email-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Email Settings</h5></div>
                                        <div class="card-body">
                                            <h6 class="mb-3">Setup Email Notification</h6>
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div>
                                                    <p class="text-muted mb-0">Email Notification</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-0">
                                                <div>
                                                    <p class="text-muted mb-0">Send Copy To Personal Email</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Activity Related Emails</h5></div>
                                        <div class="card-body">
                                            <h6 class="mb-3">When to email?</h6>
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div>
                                                    <p class="text-muted mb-0">Have new notifications</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div>
                                                    <p class="text-muted mb-0">You're sent a direct message</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div>
                                                    <p class="text-muted mb-0">Someone adds you as a connection</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                            <hr class="my-2 border border-secondary-subtle">
                                            <h6 class="mb-3">When to escalate emails?</h6>
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div>
                                                    <p class="text-muted mb-0">Upon new order</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div>
                                                    <p class="text-muted mb-0">New membership approval</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-0">
                                                <div>
                                                    <p class="text-muted mb-0">Member registration</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Updates from System Notification</h5></div>
                                        <div class="card-body">
                                            <h6 class="mb-3">Email you with?</h6>
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div>
                                                    <p class="text-muted mb-0">News about PCT-themes products and feature updates</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div>
                                                    <p class="text-muted mb-0">Tips on getting more out of PCT-themes</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div>
                                                    <p class="text-muted mb-0">Things you missed since you last logged into PCT-themes</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div>
                                                    <p class="text-muted mb-0">News about products and other services</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-0">
                                                <div>
                                                    <p class="text-muted mb-0">Tips and Document business products</p>
                                                </div>
                                                <div class="form-check form-switch p-0">
                                                    <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body text-end btn-page">
                                            <button class="btn btn-outline-secondary">Cancel</button>
                                            <button class="btn btn-primary">Update Profile</button>
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
</div>
<!-- [ Main Content ] end -->