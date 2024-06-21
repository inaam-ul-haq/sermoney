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
                <div class="wrapper mt-xl-0 mt-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="first-heading mt-5">Mis direcciones</h1>
                                <h5 class="second-h">Resumen de las direcciones de tus casilleros.</h5>
                            </div>

                        </div>

                        <div class="row my-2">
                            <div class="col-lg-9  table-contentt p-3 mt-4 rounded">
                                <div class="row">
                                    <div class="col-md-12 col-sm-6 p-3 " style="position: relative">

                                        @if ($warehouses->isEmpty())
                                            <p>No warehouses found.</p>
                                        @else
                                            @foreach ($warehouses as $warehouse)
                                                <div class="row">
                                                    <div class="col-md-6 col-6 table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead class="table-head">
                                                                <tr>
                                                                    <th colspan="2">{{ $warehouse->name }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if ($warehouse->addresses->isEmpty())
                                                                    <tr>
                                                                        <td colspan="2">No addresses found for this
                                                                            warehouse.</td>
                                                                    </tr>
                                                                @else
                                                                    <tr>
                                                                        <td class="fw-bold">Type</td>
                                                                        <td>{{ $warehouse->type }}</td>
                                                                    </tr>
                                                                    @foreach ($warehouse->addresses as $address)
                                                                        <tr>
                                                                            <td class="fw-bold">Country</td>
                                                                            <td>{{ $address->country }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fw-bold">State</td>
                                                                            <td>{{ $address->state }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fw-bold">City</td>
                                                                            <td>{{ $address->city }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fw-bold">Street No</td>
                                                                            <td>{{ $address->street }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fw-bold">Postal Code</td>
                                                                            <td>{{ $address->postal_code }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
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
