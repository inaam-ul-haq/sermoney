@extends('layouts.app')

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    /* <!-- ===================Hero section======================= --> */
    .hero-heading {
        padding-top: 40vh;
        margin-right: 10rem;
        font-size: 7rem;
        font-weight: 700;
        color: rgba(20, 177, 254, 1);
    }

    .hero-img {
        padding-top: 7rem;
    }

    /* <!-- ===================Cards section======================= --> */
    .cards {
        background-color: rgba(249, 249, 249, 1);
    }

    .blog-img img {
        box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.07) inset;
    }

    .meta-top i {
        font-size: 1.1rem;
        color: rgba(168, 168, 168, 1);
    }

    .meta-top a {
        font-size: 1rem;
        text-decoration: none;
        color: rgba(168, 168, 168, 1);
    }

    .meta-top span:hover {
        border-bottom: 1px solid rgba(168, 168, 168, 1);
    }

    .title p {
        font-family: Montserrat;
        font-size: 25px;
        font-weight: 400;
        line-height: 34px;
        color: rgba(22, 25, 34, 1);
    }

    .content p {
        color: rgba(101, 107, 111, 1);
        font-family: Montserrat;
        font-size: 18px;
        font-weight: 400;
        line-height: 22px;
    }

    .more-info {
        justify-content: space-between;
    }

    .more-info i {
        color: rgba(168, 168, 168, 1);
        font-style: normal;
        font-size: 1rem;
    }

    .more-info i:hover {
        color: black;
    }

    .read-more {
        border-left: 2px solid rgba(0, 0, 0, 0.08);
        padding-left: 1rem;
    }

    .read-more a {
        font-family: Montserrat;
        font-size: 16px;
        font-weight: 400;
        line-height: 30px;
        text-decoration: none;
        color: rgba(20, 177, 254, 1);
    }

    /* <!-- ===================Cards section start======================= --> */
    .blog-pagination {
        background-color: rgba(249, 249, 249, 1);
        margin-block: 3rem;
    }

    .blog-pagination a {
        color: rgba(168, 168, 168, 1);
        font-size: 1.5rem;
        text-decoration: none;
        padding: 0.5rem 1.5rem;
        border-radius: 1rem;
    }

    .blog-pagination a:hover {
        color: white;
        background-color: rgba(20, 177, 254, 1);
    }

    .next-page {
        color: rgba(20, 177, 254, 1);
        font-family: Montserrat;
        font-size: 16px;
        font-weight: 400;
        line-height: 43px;
        margin-left: 3rem;
    }


    .active>.page-link,
    .page-link.active {
        background-color: #14b1fe !important;
        color: White !important;
    }

    .page-link {
        border: none;
        background-color: transparent !important;
        color: #A8A8A8 !important;
    }

    .sr-only {
        color: #14b1fe;
    }

    .hero-headingblog {


        font-size: 5rem;
        font-weight: 800;
        line-height: 3rem;
        color: rgba(20, 177, 254, 1);


    }

    @media(max-width:768px) {
        .title p {
            font-family: Montserrat;
            font-size: 22px;
            font-weight: 400;
            line-height: 25px;
            color: rgba(22, 25, 34, 1);
            margin-bottom: 0px;
        }

        .content p {
            color: rgba(101, 107, 111, 1);
            font-family: Montserrat;
            font-size: 18px;
            font-weight: 400;
            line-height: 22px;
        }
    }
</style>

@section('content')
    <!-- ===================Hero section start======================= -->
    <section class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class=" col-md-4 col-sm-12 col-12  d-flex flex-column justify-content-center">
                    <h1 class="hero-headingblog">BLOG</h1>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                    <div class="hero-img">
                        <img src="./assets/images/Group 35587.png" class="img-fluid w-75 pb-5" alt="" />
                    </div>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- ===================Hero section End======================= -->
    <!-- ===================Cards section start======================= -->
    <section class="cards py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog1.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> marzo 7, 2024</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Compra de manera inteligente: 5 Estrategias comprobadas para
                                    compras exitosas en línea
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Si alguna vez te has encontrado buscando artículos por horas
                                    en tiendas online, solo para terminar con cosas que no
                                    necesitabas, no estás solo. En la […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">1</span></i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog2.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> febrero 5, 2024</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    9 cosas que necesitas para lograr todas tus metas este año.
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    ¿Cuántas veces has comenzado el año con una lista de metas
                                    que quisieras cumplir?… ¿Y cuántas veces se ha terminado el
                                    año y tu lista sigue […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"> <span class="text-secondary ps-2">2</span></i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog3.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> enero 2, 2024</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Todo lo que los papás deben tener para sobrevivir este
                                    verano: Tus hijos te lo agradecerán
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    El calor está en su punto, nuestros hijos con las energías
                                    recargadas y nosotros buscando cómo vamos a entretenerlos
                                    tanto tiempo😅… Son varias semanas de verano  […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">1</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog4.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> diciembre 5, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Descubre las mejores tiendas online para encontrar regalos
                                    navideños que tus seres queridos nunca olvidarán
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    ¡Por fin llega Diciembre! Y a medida que se acercan las
                                    fiestas, también se acerca la emoción de dar regalitos
                                    especiales… Y porque queremos asegurarnos de […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">2</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog5.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> noviembre 3, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Descuentos TODO el mes: Comprar ANTES del Black Friday es
                                    mejor y aquí te contamos por qué
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    ¡Estamos oficialmente en noviembre! Mejor conocido como el
                                    mes de las ofertas o como en AIRBOX le llamamos: El Black
                                    Month. Te vamos a decir algo […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">2</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog6.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> octubre 11, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">El secreto mejor guardado de Amazon: Woot!</p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Si eres como nosotros, siempre estás en la búsqueda de
                                    nuevas y emocionantes experiencias de compras online. Y es
                                    que no hay nada mejor que entrar […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">1</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog7.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> septiembre 12, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Grandes compras a precios mínimos: descubre el ‘Almacén de
                                    Amazon’ y ahorra en cada compra
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Ya seas un experimentado comprador en línea o estés apenas
                                    comenzando en el mundo de las compras por internet, te
                                    tenemos una excelente guía que te […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">2</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog8.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> agosto 11, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Compra en línea con tranquilidad: Cómo proteger tus datos
                                    personales y financieros durante el proceso de compra.
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    ¡Hola, amantes de las compras en línea! Hoy, en AIRBOX,
                                    queremos abordar un tema crucial para todos aquellos que
                                    disfrutan de la conveniencia de las compras […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">2</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog9.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> julio 14, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Todo lo que debes saber acerca de los productos con baterías
                                    (¿material peligroso?)
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Lo mejor de hacer tus compras por internet desde USA hasta
                                    la puerta de tu casa es el ahorro de tiempo, dinero y el
                                    poder comprar […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">1</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog10.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> junio 12, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Nunca traigas una compra de más de $100 sin antes leer esto
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Desafortunadamente algunos clientes se sorprenden al ver sus
                                    facturas cuando hacen pedidos de más de $100 por todo el
                                    tema de los impuestos…  ¿Qué debes saber […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">4</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog11.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> mayo 17, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Si te gusta ahorrar dinero, necesitas estas versiones
                                    alternativas de productos populares
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Todos hemos caído en la trampa de ver un video en Instagram
                                    o Tiktok con una increíble demostración de un nuevo producto
                                    que descubrimos en ese […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">2</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog12.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> abril 13, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    3 maneras en las que tus compras online van a salvar el
                                    mundo:
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Únete al movimiento que se volvió nuestra misión ¿Te has
                                    preguntado alguna vez de qué maneras aportas tu granito de
                                    arena para que el mundo sea […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">8</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog13.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> marzo 21, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    3 señales de que estás pagando DE MÁS en tus compras por
                                    internet… Y cómo evitarlo.
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Las compras por internet son un hermoso arte que se domina
                                    con el tiempo. Hay tantas posibilidades que muchas veces no
                                    sabemos por dónde empezar ni […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">6</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog14.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#">febrero 13, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    El secreto que todo padre necesita escuchar para comenzar el
                                    año escolar como un profesional
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    El año escolar casi comienza y como padre de familia también
                                    debes prepararte con los esenciales para hacer que este
                                    nuevo año de volver a madrugar, […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">5</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog15.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> enero 23, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    5 OTROS beneficios de AIRBOX que no sabías que tenías
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Trayendo tus paquetes con AIRBOX recibes muchos beneficios…
                                    ¡Y seguro ya conoces varios! Pero queremos que saques el
                                    mayor provecho de tu suscripción para que tu […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">4</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog16.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> enero 19, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Artículos necesarios para vivir una vida más organizada este
                                    2023
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Otro año comienza y con él nuestra nueva lista de
                                    resoluciones que cumplir para vivir la mejor versión de
                                    nosotros mismos: ir al gimnasio todos los […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">6</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog17.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> enero 13, 2023</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    El error #1 que estás cometiendo en tus compras por internet
                                    que potencialmente te está costando cientos de dólares.
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    ¿Sabes cuando haces un pedido por tu tienda online favorita
                                    y en el desglose del precio te aparece el “estimated tax to
                                    be collected” o el […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">5</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog18.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> diciembre 12, 2022</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    6 secretos para ahorrar dinero en todas tus compras por
                                    Amazon
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Promociones, envíos rápidos y una enorme cantidad de
                                    productos para elegir son solo algunas de las razones por
                                    las que Amazon ha triunfado en el mundo […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">2</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog19.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> diciembre 7, 2022</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">
                                    Las 5 mejores ideas de regalos personalizados para tus seres
                                    queridos en esta Navidad
                                </p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Sabemos que encontrar el regalo perfecto no es tarea fácil.
                                    No importa para quién sea, cada vez es más complicado
                                    encontrar ideas especiales y únicas… Y […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">6</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/images/cards/blog20.png" class="img-fluid" alt="" />
                        </div>
                        <div class="blog-content mx-3">
                            <div class="meta-top pt-5">
                                <i class="bi bi-person-fill"></i>
                                <a href="#"> <span>Airbox</span> En</a>
                                <i class="bi bi-clock"></i>
                                <a href="#"> diciembre 1, 2022</a>
                            </div>
                            <h2 class="title">
                                <p class="py-2">Adiós remordimiento por comprar en Amazon</p>
                            </h2>
                            <div class="content">
                                <p class="pb-4">
                                    Adiós remordimiento por comprar en Amazon: después de hacer
                                    esto te vas a sentir mejor con cada compra que hagas por
                                    internet.   Si eres tan […]
                                </p>
                            </div>
                            <div class="more-info d-flex">
                                <i class="bi bi-heart text-info"><span class="text-secondary ps-2">1</span> </i>
                                <div class="read-more mt-auto align-self-end">
                                    <img src="assets/images/cards/Vector (4).png" class="img-fluid" alt="" />
                                    <a href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example ">
                <ul class="pagination">

                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item">
                        <a class="page-link nextpgae" href="#" aria-label="Next">
                            <!-- <span aria-hidden="true">&raquo;</span> -->
                            <span class="sr-only">Next Page <i class="bi bi-chevron-right"></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- ===================Cards section End======================= -->
    <!-- ===================Blog pagination start======================= -->
@endsection
