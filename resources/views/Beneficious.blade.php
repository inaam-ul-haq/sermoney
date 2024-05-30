@extends('layouts.app')



<style>
    .custom-pb {
        padding-bottom: 90px !important;
    }

    .custom-mt {
        margin-top: -55px;
    }

    .custom-endmb {
        margin-bottom: -55px;
    }

    @media (max-width: 992px) {

        .cus-pd {
            padding-bottom: 74px;
        }

    }

    @media (max-width: 767px) {

        .cus-pd2 {
            padding-bottom: 74px;
        }

    }
</style>
@section('content')
    <section class="planbanner mt-3 pb-lg-5 custom-pb">
        <div class="container plansinner">
            <h1 class="pt-lg-4 ps-lg-5">BENEFICIOS</h1>
            <img src="./assets/images/benificios.png" class="w-100" alt="">
        </div>
    </section>

    <!-- ========== Start cards section ========== -->
    <section class="card-section my-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-12 row2">
                    <div class="row gy-4 mt-0 justify-content-center">
                        <div class="col-lg-4 col-md-6 custom-mt cus-pd">
                            <div class="card info-card d-flex align-items-center px-0">
                                <img src="./assets/images/benfitcard-1.png" class="card-img info-card-img  mt-2"
                                    alt="...">
                                <div class="card-body info-card-body d-flex flex-column">
                                    <h2 class="card-title  info-card-title text-center fw-bold mt-0">Asesoría gratis
                                    </h2>
                                    <p class="card-text info-card-text text-center mt-3">Accede a una guía de compras
                                        paso a paso o inscríbete en nuestro curso de compras online.</p>
                                    <a href="#"
                                        class="text-decoration-none text-white info-card-link mx-auto py-2 px-3 mt-4">Conoce
                                        más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 custom-mt cus-pd2">
                            <div class="card info-card d-flex align-items-center px-0">
                                <img src="./assets/images/benfitcard-2.png" class="card-img info-card-img mt-2"
                                    alt="...">
                                <div class="card-body info-card-body d-flex flex-column">
                                    <h2 class="card-title  info-card-title text-center fw-bold mt-0">Compra sin tarjeta
                                        de crédito
                                    </h2>
                                    <p class="card-text info-card-text text-center mt-3">Ideal ¿No cuentas con tarjeta
                                        de crédito para realizar tus compras? Utiliza la nuestra para tus transacciones.
                                    </p>
                                    <a href="#"
                                        class="text-decoration-none text-white info-card-link mx-auto py-2 px-3 mt-4">Conoce
                                        más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 custom-mt">
                            <div class="card info-card d-flex align-items-center px-0">
                                <img src="./assets/images/benifitcard-3.png" class="card-img info-card-img mt-2"
                                    alt="...">
                                <div class="card-body info-card-body d-flex flex-column">
                                    <h2 class="card-title  info-card-title text-center fw-bold mt-0">Entregas a
                                        domicilio</h2>
                                    <p class="card-text info-card-text text-center mt-3">Recibe tus compras en la
                                        comodidad de tu casa u oficina.</p>
                                    <a href="#"
                                        class="text-decoration-none text-white info-card-link mx-auto py-2 px-3 mt-4">Conoce
                                        más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card info-card d-flex align-items-center px-0">
                                <img src="./assets/images/benfitcard-4.png" class=" img-fluid  mt-4" width="80"
                                    alt="...">
                                <div class="card-body info-card-body d-flex flex-column ">
                                    <h2 class="card-title  info-card-title text-center fw-bold mt-2">Compra libre de
                                        impuestos</h2>
                                    <p class="card-text info-card-text text-center mt-3">Hasta $100.00 valor CIF</p>
                                    <a href="#"
                                        class="text-decoration-none text-white info-card-link mx-auto py-2 px-3 mt-4">Conoce
                                        más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card info-card d-flex align-items-center px-0">
                                <img src="./assets/images/benfitcard-5.png" class="card-img info-card-img mt-2"
                                    alt="...">
                                <div class="card-body info-card-body d-flex flex-column">
                                    <h2 class="card-title  info-card-title text-center fw-bold mt-0">Ahorra 7% de tu
                                        compra</h2>
                                    <p class="card-text info-card-text text-center mt-3">Al colocar nuestra dirección
                                        recibe GRATIS 0% Sales Tax en USA</p>
                                    <a href="#"
                                        class="text-decoration-none text-white info-card-link mx-auto py-2 px-3 mt-4">Conoce
                                        más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card info-card d-flex align-items-center px-0">
                                <img src="./assets/images/benfitcard-6.png" class="card-img info-card-img mt-2"
                                    alt="...">
                                <div class="card-body info-card-body d-flex flex-column">
                                    <h2 class="card-title  info-card-title text-center fw-bold mt-0">Refiere a un amigo
                                    </h2>
                                    <p class="card-text info-card-text text-center mt-3">Recomienda nuestros servicios
                                        y recibe hasta $15, para seguir comprando.</p>
                                    <a href="#"
                                        class="text-decoration-none text-white info-card-link mx-auto py-2 px-3 mt-4">Conoce
                                        más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card info-card d-flex align-items-center px-0">
                                <img src="./assets/images/benfitcard-7.png" class="card-img info-card-img  mt-2"
                                    alt="...">
                                <div class="card-body info-card-body d-flex flex-column">
                                    <h2 class="card-title  info-card-title text-center fw-bold mt-0">Devoluciones
                                        garantizadas</h2>
                                    <p class="card-text info-card-text text-center mt-3">¿El artículo que recibiste no
                                        lleno tus expectativas? Te ayudamos con la devolución a USA.</p>
                                    <a href="#"
                                        class="text-decoration-none text-white info-card-link mx-auto py-2 px-3 mt-4">Conoce
                                        más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card info-card d-flex align-items-center px-0">
                                <img src="./assets/images/benfitcard-8.png" class="card-img info-card-img mt-2"
                                    alt="...">
                                <div class="card-body info-card-body d-flex flex-column">
                                    <h2 class="card-title  info-card-title text-center fw-bold mt-0">Compra a crédito
                                        60/40</h2>
                                    <p class="card-text info-card-text text-center mt-3">Le ofrecemos el beneficio de
                                        realizar sus compras a crédito.</p>
                                    <a href="#"
                                        class="text-decoration-none text-white info-card-link mx-auto py-2 px-3 mt-4">Conoce
                                        más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card info-card d-flex align-items-center px-0">
                                <img src="./assets/images/benfitcard-9.png" class="card-img info-card-img mt-2"
                                    alt="...">
                                <div class="card-body info-card-body d-flex flex-column">
                                    <h2 class="card-title  info-card-title text-center fw-bold mt-0">Casillero 24/7
                                        BoxIT</h2>
                                    <p class="card-text info-card-text text-center mt-3">Retira tus compras sin filas y
                                        en los horarios de conveniencia.</p>
                                    <a href="#"
                                        class="text-decoration-none text-white info-card-link mx-auto py-2 px-3 mt-4">Conoce
                                        más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 custom-endmb">
                            <div class="card info-card d-flex align-items-center px-0">
                                <img src="./assets/images/benfitcard-10.png" class="card-img info-card-img mt-2"
                                    alt="...">
                                <div class="card-body info-card-body d-flex flex-column">
                                    <h2 class="card-title  info-card-title text-center fw-bold mt-0">Más de 40 puntos a
                                        nivel nacional</h2>
                                    <p class="card-text info-card-text text-center mt-3">Para su mayor comodidad, Junto
                                        a SERVIENTREGA ahora somos más de 40 Sucursales, siempre cercanos a usted</p>
                                    <a href="#"
                                        class="text-decoration-none text-white info-card-link mx-auto py-2 px-3 mt-4">Conoce
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ========== End cards section ========== -->
@endsection
