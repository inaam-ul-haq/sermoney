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
                <div class="content-wrapper">

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">

                        <div class="row pt-3 pb-4">
                            <div class="col-12 mb-md-4 mt-xl-0 mt-xl-3 mt-5">
                                <div class="top-container">
                                    <h1 class="fw-bold">Dashboard</h1>
                                    <h5>Resumen de cuenta y movimientos de carga.</h5>
                                </div>
                            </div>
                            <div class="col-md-4 mt-md-2">
                                <label for="html5-date-input" class="mb-3 date-label">Desde</label>
                                <input class="form-control date-inputs" type="date" value="2021-06-18"
                                    id="html5-date-input">
                            </div>
                            <div class="col-md-4 mt-md-2 mt-3">
                                <label for="html5-date-input" class="mb-3 date-label">Desde</label>

                                <input class="form-control date-inputs" type="date" value="2021-06-18"
                                    id="html5-date-input">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">

                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start ">
                                            <div class="avatar flex-shrink-0 mt-3">
                                                <img src="../assets/img/images/Group 16 (1).png" alt="chart success"
                                                    class="">
                                            </div>


                                            <div class="ps-3">
                                                <span class="fw-medium d-block mb-1">Saldo pendiente</span>
                                                <h3 class="card-title mb-2">$0.00</h3>
                                                <small class=" fw-medium">Hoy <span
                                                        class="text-success">+72.80%</span></small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start ">
                                            <div class="avatar flex-shrink-0 mt-3">
                                                <img src="../assets/img/images/Group 17.png" alt="chart success"
                                                    class="">
                                            </div>


                                            <div class="ps-3">
                                                <span class="fw-medium d-block mb-1">Saldo pendiente</span>
                                                <h3 class="card-title mb-2">$0.00</h3>
                                                <small class=" fw-medium">Hoy <span
                                                        class="text-success">+72.80%</span></small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start ">
                                            <div class="avatar flex-shrink-0 mt-3">
                                                <img src="../assets/img/images/Group 17.png" alt="chart success"
                                                    class="">
                                            </div>


                                            <div class="ps-3">
                                                <span class="fw-medium d-block mb-1">Saldo pendiente</span>
                                                <h3 class="card-title mb-2">$0.00</h3>
                                                <small class=" fw-medium">Hoy <span
                                                        class="text-success">+72.80%</span></small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- ========== Start footer ========== -->
                            {{-- <div class="col-12 my-5">
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
                            </div> --}}
                            <!-- ========== End footer ========== -->


                        </div>


                    </div>
                    <!-- / Content -->




                    <!-- Footer -->




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
