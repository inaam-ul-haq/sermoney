@extends('admindashboard.layout.app')

@section('content')
    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-md"></i>
                </a>
            </div>

            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">

                <!-- Content wrapper -->
                <div class="wrapper p-3 mt-xl-0 mt-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="./assets/img/images/typcn_arrow-up.png" class="perfil-back-img"><span
                                        class="second-h">Regresar</span>
                                </div>
                                <h1 class="first-heading">Editar perfil</h1>
                            </div>
                            <div class="main-box">
                                <div class="col-12">
                                    <p class="Heading mt-3">
                                        Información general
                                    </p>
                                    <div class="col d-flex flex-column">
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label for="text" class="form-label font-cust"> Código <span
                                                        class="star">*</span></label>
                                                <input type="text" class="form-control bg-custom" id="po-box"
                                                    placeholder="01071">

                                            </div>
                                            <div class="col-md-6">
                                                <label for="input" class="form-label font-cust mt-md-0 mt-3"> Fecha de
                                                    creación <span class="star">*</span></label>
                                                <input type="text" class="form-control bg-custom" id="text"
                                                    placeholder="Abr. 30, 2024">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="name" class="form-label font-cust"> Referencia <span
                                                        class="star">*</span></label>

                                                <select class="form-select bg-custom cust-new-font"
                                                    aria-label="Default select example">
                                                    <option selected>Personal</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>

                                            </div>
                                            <div class="col-md-6">
                                                <label for="last-name" class="form-label font-cust mt-md-0 mt-3"> ¿Cómo
                                                    te enteraste de nosotros? <span class="star">*</span></label>
                                                <select class="form-select cust-new-font"
                                                    aria-label="Default select example">
                                                    <option selected>Otros</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="mobile-phone" class="form-label font-cust"> Tipo de cuenta
                                                    <span class="star">*</span></label>
                                                <input type="text" class="form-control" id="mobile-phone"
                                                    placeholder="cristofer guardia">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="branch" class="form-label font-cust mt-md-0 mt-3"> Tipo de
                                                    contribuyente <span class="star">*</span></label>
                                                <select class="form-select cust-new-font"
                                                    aria-label="Default select example">
                                                    <option selected>88611997</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>

                                            </div>
                                        </div>


                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="province" class="form-label font-cust"> Nombre <span
                                                        class="star">*</span></label>
                                                <input type="text" class="form-control" id="province"
                                                    placeholder="ventas5@sirmoney.net">
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-between">
                                                <div class="col-md me-2">
                                                    <label for="city" class="form-label font-cust mt-md-0 mt-3">
                                                        Teléfono <span class="star">*</span></label>
                                                    <input type="text" class="form-control" id="city"
                                                        placeholder="66796273">
                                                </div>
                                                <div class="col-md-3 ms-2">
                                                    <label for="dv" class="form-label font-cust mt-md-0 mt-3"> DV
                                                    </label>
                                                    <input type="number" class="form-control" id="dv"
                                                        placeholder="00" min="0">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="mobile-phone" class="form-label font-cust"> Correo
                                                    electrónico <span class="star">*</span></label>
                                                <input type="text" class="form-control" id="mobile-phone"
                                                    placeholder="pacifc22">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="mobile-phone" class="form-label font-cust mt-md-0 mt-3">
                                                    Teléfono <span class="star">*</span></label>
                                                <input type="text" class="form-control" id="mobile-phone"
                                                    placeholder="cristofer guardia BULL01071">
                                            </div>
                                        </div>



                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="input" class="form-label font-cust"> Nombre de usuario
                                                    <span class="star">*</span></label>
                                                <input type="text" class="form-control" id="text"
                                                    placeholder="pacifc22">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="input" class="form-label font-cust mt-md-0 mt-3"> Dirección
                                                    <span class="star">*</span></label>
                                                <input type="text" class="form-control" id="text"
                                                    placeholder="punta pacifica">
                                                <div class="d-flex justify-content-end mt-3">
                                                    <button type="button" class="btn btn-custom">Guardar
                                                        cambios</button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mt-3 mb-3">
                                            <div class="col-md-6">
                                                <label for="password" class="form-label font-cust"> Nueva contraseña
                                                    <span class="star">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="text-password"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="confirm-password" class="form-label font-cust"> Confirmar
                                                    contraseña <span class="star">*</span></label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="confirm-password"
                                                        placeholder="">
                                                    <span class="password-toggle input-group-text"
                                                        onclick="togglePasswordVisibility('confirm-password')">
                                                        <i class="fas fa-search"></i>
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-end mt-3">
                                                    <button type="button" class="btn btn-custom">Actualizar
                                                        contraseña</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->




                <!-- ========== Start footer ========== -->
                <div class="col-12 my-5">
                    <div class="d-flex justify-content-center align-items-center flex-column footer-logo">
                        <div class=" d-flex justify-content-center align-items-start flex-column">
                            <span>Powered By</span>
                            <div class="d-flex justify-content-center align-items-center">
                                <span class="footer-img-span"><img src="../assets/img/images/Group 1.png"
                                        alt=""></span>
                                <div class="ms-2">
                                    <h4 class="mb-0">aben</h4>
                                    <span class="pb-0">Technology Developments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== End footer ========== -->




            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    </div>
    <!-- / Layout wrapper -->
@endsection
