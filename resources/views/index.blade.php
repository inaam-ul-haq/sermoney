@extends('layouts.app')


@section('content')
{!! NoCaptcha::renderJs() !!}
    <!-- =============header================= -->

    <!-- =============hero section================= -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="left-section col-lg-6 col-md-6 col-sm-12 col-12 pt-5">
                    <h1 class="hero-heading">
                        “DEL MUNDO A <br> TUS MANOS”
                    </h1>
                    <h1 class="hero-heading-span"> SIRMONEY EXPRESS</h1>
                    <p class="hero-para py-4">
                        <!-- Envíos Marítimos y Aéreos -->
                        ENVÍOS MARÍTIMOS Y AÉREOS
                    </p>
                    <button type="button" class="btn hero-button text-white px-5 py-2 " onclick="scrollToForm()">
                        <!-- Registrate Gratis -->
                        REGÍSTRATE GRATIS
                    </button>

                </div>
                <div class="right-section col-lg-6 col-md-6 col-sm-12 col-12 mt-5 d-flex align-items-center">
                    <img src="assets/images/hero-section/heroleft-image.png" class="img-fluid hero-right w-100">
                </div>
            </div>
        </div>
    </section>
    <!-- =============page 2================= -->
    <section class="section-two py-5 ">
        <div class="container py-lg-5 py-sm-0 mb-lg-5 mb-sm-0 ">
            <div class="row ">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 section2-bg">

                    <h1 class="section2-heading text-center">
                        <!-- Solicitar P.O. BOX  -->
                        SOLICITAR P.O. BOX
                    </h1>

                    <form action="{{ route('po-box.store') }}" method="post" class="form row pt-4"  id="poBoxForm">
                        @csrf
                        <div class="col-lg-6">

                            <div class="mb-3">
                                <label for="input1" class="form-label sec2-label fw-bold">Nombre Completo</label>
                                <input type="text" class="form-control py-2 sec2-input" id="input1"
                                    placeholder="Nombre Completo" name="name">
                            </div>
                            <div class="mb-3">
            {!! NoCaptcha::display() !!}
        </div>
                            <button type="submit" class="btn section2-btn mt-lg-3 mb-3">SOLICITAR</button>

                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="input2" class="form-label  sec2-label fw-bold">Correo Electronico</label>
                                <input type="email" class="form-control py-2 sec2-input" id="input2"
                                    placeholder="Correo Electronico" name="email">
                            </div>
                 
                        </div> 
</div>
                    </form>


                </div>
            </div>
            <section class="design-process-section" id="process-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 pt-3">

                            <div class="paso-heading d-flex pt-5">
                                <h1>PASO 1 <i class="bi bi-arrow-right"></i> </h1>
                                <p class="fw-bold">Solicitar P.O. BOX </p>
                            </div>
                            <ul class="nav nav-tabs   process-model more-icon-preocess " role="tablist">
                                <li class="presentation masterstepactive" class="active">
                                    <a href="#discover" id="section1" aria-controls="discover" role="tab"
                                        data-toggle="tab" class="text-decoration-none">
                                        <i class="fa-solid fa-circle-dot text-dark" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="presentation">
                                    <a href="#strategy" id="section1" aria-controls="strategy" role="tab"
                                        data-toggle="tab" class="content-two text-decoration-none">
                                        <i class="fa-solid fa-circle-dot text-dark" aria-hidden="true"></i>

                                    </a>
                                </li>
                                <li class="presentation">
                                    <a href="#optimization" id="section1" aria-controls="optimization" role="tab"
                                        data-toggle="tab" class="content-three text-decoration-none">
                                        <i class="fa-solid fa-circle-dot text-dark" aria-hidden="true"></i>
                                    </a>
                                </li>

                            </ul>
                            <!-- end design process steps-->

                        </div>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </section>
    <!-- =============page 3================= -->
    <section class="section-three py-5">
        <div class="container">
            <div class="row">
                <div class="page-three-heading col-lg-12">
                    <h2 class="text-white fw-lighter text-center ">
                        Gracias a nuestra experiencia podrás comprar en las<br> mayores tiendas de los Estados Unidos y
                        China
                    </h2>
                </div>
            </div>
            <div class="section-3-buttons text-center">
                <button type="button"
                    class="btn btn-outline-info rounded-pill text-white fs-4 fw-light mx-3 my-3 px-4 py-0">
                    SHEIN
                </button>
                <button type="button" class="btn btn-outline-info rounded-pill mx-3 my-3">
                    <img src="assets/images/section-3-imgs/Vector.png" class="img-fluid" alt="" />
                </button>
                <button type="button" class="btn btn-outline-info rounded-pill mx-3 my-3">
                    <img src="assets/images/section-3-imgs/Vector (1).png" class="img-fluid" alt="" />
                </button>
                <button type="button" class="btn btn-outline-info rounded-pill mx-3 my-3">
                    <img src="assets/images/section-3-imgs/Vector (3).png" class="img-fluid" alt="" />
                </button>
            </div>
        </div>
    </section>
    <!-- =============page 4================= -->
    <section class="section-four py-4">
        <div class="container">
            <div class="section-four-container">
                <div class="row container mt-4">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="d-flex justify-content-center  align-item-end">
                            <img src="assets/images/section-4-imgs/section-4-main.png"
                                class="img-fluid mt-5  section-4-left" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="right-heading text-white fw-bolder mb-0 text-uppercase ">
                            COmprar por INTERNET ESTA A 1 CLICK
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="card-1">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="ahorra col-md-6 position-relative">
                                <h1 class="text-uppercase offer-text mt-lg-5">ahorra
                                    <span class="custom-seven">7 <span class="custom-afterseven">%</span></span>
                                </h1>
                                <p class="cust-pink">entus compras con <br>
                                    0% Sales Tax en usa </p>
                                <div class="mt-4 mb-5">
                                    <button type="button" class="btn btn-outline-info rounded-pill mx-3 my-3">
                                        <img src="assets/images/section-3-imgs/Vector.png" class="img-fluid"
                                            alt="" />
                                    </button>
                                    <button type="button" class="btn btn-outline-info rounded-pill mx-3 my-3">
                                        <img src="assets/images/section-3-imgs/Vector (1).png" class="img-fluid"
                                            alt="" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3 col-md-6">
                    <div class="card-3offer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="textcon">
                                        <h1>CALCULA TU FLETE</h1>

                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3 col-md-6">
                    <div class="card-4offer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center ">
                                    <h2 class="text-white fw-lighter">REGISTRATE</h2>
                                </div>
                                <div class="col-md-8">
                                    <div class="textcon">
                                        <h1> CURSO DE COMPRAS ONLINE</h1>

                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- =============page 5================= -->
    <section class="section-five py-5">
        <div class="container text-center section-five-headings">
            <h1>NUESTRAS DIRECCIONES EN MIAMI</h1>
            <h3>y como colocar tu número PTY</h3>
            <div class="section-five-cards  d-flex justify-content-evenly py-5 md-w-100">
                <div class="row">
                    <div class="col-md-2"></div>

                    <div class="col-md-4">
                        <div class="card border-0 bg-transparent">
                            <img class="card-img-top"
                                src="assets/images/section-5-imgs/Mesa-de-trabajo-9-ptiezq6u8hp83autaoi5umdgxyedzhqe496etgxjto.png.png"
                                alt="Card image cap w-50">
                            <div class="card-body cardlastsectioher">
                                <h4 class="card-title"><b>AÉREO</b></h4>
                                <div>
                                    <a href="">Premium: 7 días</a>
                                </div>
                                <div>
                                    <a href="">Economy: 15 días</a>

                                </div>
                                <p class="card-text pt-3 px-md-3 cardtsttext">Tu Number
                                    <br>
                                    8530 NW 72 ST
                                    <br>
                                    PTY (Su # Cuenta)*
                                    Miami, FL
                                    <br>
                                    33166-6217
                                    <br>
                                    Tel. (305) 735 8551
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 bg-transparent">
                            <img class="card-img-top"
                                src="assets/images/section-5-imgs/Mesa-de-trabajo-8-ptiezkjt3hhi5n307m2efnspdn66pb403h9hxt5wwe.png.png"
                                alt="Card image cap">
                            <div class="card-body cardlastsectioher">
                                <h4 class="card-title"><b>MARÍTIMO</b></h4>
                                <div>
                                    <a href="">Super Económica</a>
                                </div>
                                <div>
                                    <a href="">12 a 17 días</a>

                                </div>
                                <p class="card-text pt-3 px-md-3 cardtsttext">

                                    Tu Nombre
                                    <br>
                                    8432 NW 66TH ST]
                                    <br>
                                    SIRM MAR (Su # Cuenta)*
                                    Miami, FL 33166-2629
                                    Tel. (786) 391-4201
                                </p>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-2"></div>
                </div>


            </div>
        </div>
    </section>
    <!-- =============footer================= -->
@endsection
<script>
function scrollToForm() {
        var form = document.getElementById("poBoxForm");
        form.scrollIntoView({ behavior: 'smooth' });
    }
</script>
