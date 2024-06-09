@extends('admindashboard.layout.app')

@section('content')
    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    wudi@mailinator.com
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

                <div class="wrapper p-3 mt-xl-0 mt-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="./assets/img/images/typcn_arrow-up.png" class="perfil-back-img">
                                    <span class="second-h">Regresar</span>
                                </div>
                                <h1 class="first-heading">Editar perfil</h1>
                            </div>
                            <div class="main-box">
                                <div class="col-12">
                                    <p class="Heading mt-3">Información general</p>
                                    <form method="POST" action="{{ route('update') }}">
                                        @csrf

                                        <div class="col d-flex flex-column">
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <label for="po-box" class="form-label font-cust">Código <span
                                                            class="star">*</span></label>
                                                    <input type="text" class="form-control bg-custom" id="po-box"
                                                        value="{{ old('pobox', $register->pobox) }}" readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="creation-date"
                                                        class="form-label font-cust mt-md-0 mt-3">Fecha de creación <span
                                                            class="star">*</span></label>
                                                    <input type="date" class="form-control bg-custom" id="creation-date"
                                                        name="creation_date" placeholder=""
                                                        value="{{ $register->created_at->toDateString() }}" readonly>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="reference" class="form-label font-cust">Referencia <span
                                                            class="star">*</span></label>
                                                    <select name="reference" class="form-select bg-custom cust-new-font"
                                                        id="reference" required>
                                                        <option value="" disabled selected>Select Reference</option>
                                                        <option value="Add">Add</option>
                                                        <option value="Staf">Staf</option>
                                                        <option value="RepostingAgents">Reposting Agents</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="referral" class="form-label font-cust mt-md-0 mt-3">¿Cómo te
                                                        enteraste de nosotros? <span class="star">*</span></label>
                                                    <select name="referral" class="form-select cust-new-font" id="referral"
                                                        required>
                                                        <option value="" disabled selected>Select Referral</option>
                                                        <option value="Google">Google</option>
                                                        <option value="FaceBook">Facebook</option>
                                                        <option value="Insta">Instagram</option>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="row mt-3">

                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="name" class="form-label font-cust">Nombre <span
                                                            class="star">*</span></label>
                                                    <input type="text" class="form-control" id="name"
                                                        name="name"placeholder="" value="{{ $register->user->name }}">
                                                </div>


                                                <div class="col-md-6 d-flex justify-content-between">
                                                    <div class="col-md me-2">
                                                        <label for="phone"
                                                            class="form-label font-cust mt-md-0 mt-3">Teléfono <span
                                                                class="star">*</span></label>
                                                        <input type="text" class="form-control" id="phone"
                                                            name="office_no" placeholder=""
                                                            value="{{ $register->office_no }}">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label font-cust">Correo electrónico
                                                        <span class="star">*</span></label>
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        placeholder="{{ $register->user->email }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="secondary-phone"
                                                        class="form-label font-cust mt-md-0 mt-3">Teléfono <span
                                                            class="star">*</span></label>
                                                    <input type="text" class="form-control" id="secondary-phone"
                                                        name="mob_no" placeholder=""value="{{ $register->mob_no }}">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="del_address" class="form-label font-cust">Dirección de
                                                        entrega
                                                        <span class="star">*</span></label>
                                                    <input type="text" class="form-control" id="del_address"
                                                        name="del_address" placeholder="{{ $register->del_address }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="secondary-phone"
                                                        class="form-label font-cust mt-md-0 mt-3">Pasaporte<span
                                                            class="star">*</span></label>
                                                    <input type="text" class="form-control" id="secondary-phone"
                                                        name="id_pass" placeholder=""value="{{ $register->id_pass }}">
                                                </div>
                                            </div>


                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="username" class="form-label font-cust">Nombre de usuario
                                                        <span class="star">*</span></label>
                                                    <input type="text" class="form-control" id="username"
                                                        name="username" placeholder="" value="{{ $register->username }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="address"
                                                        class="form-label font-cust mt-md-0 mt-3">Dirección <span
                                                            class="star">*</span></label>
                                                    <input type="text" class="form-control" id="address"
                                                        placeholder=""value="{{ $register->del_address }}"
                                                        name="del_address">

                                                </div>
                                                <div class="row mt-3 mb-3">
                                                    <div class="col-md-6">
                                                        <label for="new-password" class="form-label font-cust">Nueva
                                                            contraseña <span class="star">*</span></label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" id="new-password"
                                                                placeholder="Old Password" name="password">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <label for="confirm-password"
                                                            class="form-label font-cust">Confirmar
                                                            contraseña <span class="star">*</span></label>
                                                        <div class="input-group">
                                                            <input type="password_confirmation" class="form-control"
                                                                id="confirm-password" placeholder=""
                                                                name="password_confirmation">
                                                            <span class="password-toggle input-group-text"
                                                                onclick="togglePasswordVisibility('confirm-password')">
                                                                <i class="fas fa-search"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex justify-content-end mt-3">

                                                    <button type="submit" class="btn btn-custom">Guardar
                                                        cambios</button>

                                                </div>



                                            </div>
                                        </div>
                                    </form>
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
<script>
    function togglePasswordVisibility(id) {
        var passwordField = document.getElementById(id);
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>
