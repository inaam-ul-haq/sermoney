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

                        <div class="row pt-3 pb-4 mt-xl-3 mt-5">
                            <div class="col-12 d-flex mb-5">
                                <a href="./carga.html" class="page d-flex align-items-center"><img class="me-2"
                                        src="assets/img/images/Group 17 (1).png" alt="">En bodega</a>
                                <a href="./carga2.html" class="page d-flex align-items-center page-active ms-4"><img
                                        class="me-2" src="./assets/img/images/streamline_web-solid.png" alt="">En
                                    tránsito</a>
                            </div>
                            <div class="col-12 mb-md-3 mt-xl-0 mt-4">
                                <div class="top-container">
                                    <h1 class="fw-bold">Estado de tus paquetes</h1>
                                    <h5>Consulta el estado de tus paquetes en tránsito.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-sm-6">
                                <div>
                                    <form class="d-flex">
                                        <button class="btn btn-outline-dark me-2 px-3" type="submit"><svg width="20"
                                                height="20" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5 11H11.71L11.43 10.73C12.4439 9.55402 13.0011 8.0527 13 6.5C13 5.21442 12.6188 3.95772 11.9046 2.8888C11.1903 1.81988 10.1752 0.986756 8.98744 0.494786C7.79973 0.00281635 6.49279 -0.125905 5.23192 0.124899C3.97104 0.375703 2.81285 0.994767 1.90381 1.90381C0.994767 2.81285 0.375703 3.97104 0.124899 5.23192C-0.125905 6.49279 0.00281635 7.79973 0.494786 8.98744C0.986756 10.1752 1.81988 11.1903 2.8888 11.9046C3.95772 12.6188 5.21442 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z"
                                                    fill="black" fill-opacity="0.6" />
                                            </svg>
                                        </button>
                                        <input class="form-control me-2" type="search" placeholder="Buscar"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive Table -->
                        <div class="col-12">
                            <div class="card table-card mt-4">
                                <h5 class="mb-0 px-3 py-4"></h5>
                                <div class="cart-inner-table table-responsive text-nowrap">
                                    <table class="table">
                                        <thead class="table-head">
                                            <tr class="text-nowrap">
                                                <th>ITEM</th>
                                                <th>NÚMERO</th>
                                                <th>ESTADO</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/ Responsive Table -->

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
