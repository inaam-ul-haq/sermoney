@extends('layouts.app')
<style>
    .custom-hr {

        max-width: 1410px;
        border: 2px;
        opacity: 0px;
        border-top: 2px solid #14B1FE;
    }

    .banner {
        align-items: center;
    }

    .banner img {
        width: 100%;
        max-width: 1324px;
        height: auto;
        align-items: center;
        /* margin: 0px 232px; */
    }



    .banner h1 {
        font-family: "Montserrat";
        font-size: 48px;
        font-weight: 800;
        line-height: 50px;
        text-align: center;
        color: #14B1FE;
        margin-top: 20px;
        margin-bottom: 1.5rem;


    }

    .customacardsetting {
        border: none !important;
        background-color: transparent !important;
    }

    .card-bodycard {

        padding-inline: 0.25rem;
        color: #14B1FE;
        background-color: transparent !important;


    }

    .card-titletitle {
        font-family: "Montserrat";
        font-size: 28px;
        font-weight: 700;
        line-height: 25px;
        text-align: center;
        color: #14B1FE;
        align-items: center;
        margin-bottom: 36px !important;
        margin-top: 81px;

    }

    .card-titletitle1 {
        margin-top: 42px;
        font-family: "Montserrat";
        font-size: 28px;
        font-weight: 700;
        line-height: 25px;
        text-align: center;
        color: #14B1FE;
        align-items: center;
        margin-bottom: 36px !important;


    }


    .card-titletitle2 {
        margin-top: 54px;
        font-family: "Montserrat";
        font-size: 28px;
        font-weight: 700;
        line-height: 25px;
        text-align: center;
        color: #14B1FE;
        align-items: center;
        margin-bottom: 36px !important;


    }



    .container-2 {
        display: flex;
        flex-direction: row;


    }


    .card-mb-3 {
        display: flex;
        justify-content: space-between;
    }


    .start h1 {

        font-family: "Roboto";
        font-size: 48px;
        font-weight: 700;
        line-height: 50px;
        text-align: left;
        color: #14B1FE;
        margin-bottom: 0px;


    }


    .card-text1 {
        color: #656B6F;
        text-align: center;

    }

    .card-bodycard {
        text-align: center;
    }

    .pg {
        color: #14B1FE;
    }

    .custom-font {
        font-family: "Montserrat" !important;
    }


    .row {

        margin-right: 0px !important;
        margin-left: 0px !important;
    }

    .card-text2 {
        gap: 10px;
        color: #14B1FE;
        font-family: "Montserrat";
        font-size: 26px;
        font-weight: 400;
        line-height: 25px;
        text-align: left;



    }


    .pg .card-text {
        margin-bottom: 8px;
    }



    .line {
        margin-top: 50px;
        margin-bottom: 20px
    }

    .line hr {

        margin-top: 4rem;
        margin-bottom: 0.5rem;

    }


    .start h1 {
        margin-top: 48px;
        padding-left: 10px;
    }

    ;

    .bigger-img {
        width: 100px;
        max-width: 85px !important;
        height: 85px !important;
        height: auto;
    }




    .img-fluid {
        max-width: 59px !important;
        height: auto;
    }

    .wrapper {
        padding-inline: 292px;
        display: flex;
        /* flex-wrap: wrap; */
        justify-content: space-between;
    }

    .row2 {
        display: flex;
        justify-content: space-between;
    }

    .supperoffersetcontent p {
        font-size: 20px;
        color: #009C1A;
        font-weight: 400;
        margin-bottom: 0px;
    }

    .supperoffersetcontent h1 {
        font-size: 90px;
        color: #009C1A;
        margin-bottom: 0px;
    }

    .contentmahhhbanner h3 {
        font-size: 30px;
        font-weight: 800;
        color: #14b1fe;
        padding-top: 10px;
    }

    .contentmahhhbanner p {
        font-size: 18px;
        color: #009C1A;
        margin-bottom: 0px;
    }

    @media (max-width: 992px) {
        .wrapper {
            /* flex-wrap: wrap !important; */
            padding-inline: 65px !important;
        }
    }


    @media (max-width: 300px) {
        .wrapper {
            display: block;
            padding-inline: 15px !important;
        }

        .banner h1 {

            font-size: 30px !important;
        }
    }

    @media (max-width: 325px) {
        .start h1 {
            font-size: 35px !important;
        }


    }

    @media (max-width: 768px) {
        .wrapper {
            display: block;
            padding-inline: 45px !important;
        }

        .banner h1 {

            font-size: 40px;
        }
    }
</style>

@section('content')

    <body class="bg-white">


        <!-- Design Start  -->

        <section class="banner">

            <div class="row">
                <div class="col-md-1">

                </div>
                <div
                    class="col-md-5 supperofferset  d-flex justify-content-center justify-content-md-end align-items-center">
                    <div>
                        <div class="d-flex supperoffersetcontent">
                            <h4>
                                <p>MAS</p>
                                <p>DE</p>
                            </h4>
                            <h1>40</h1>
                        </div>
                        <div class="contentmahhhbanner">
                            <h3>PUNTOS</h3>
                            <P>a nival nacional</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="assets/images/bannermass.png" class="img-fluid1" alt="Responsive image">
                </div>
                <div class="col-md-1"></div>

            </div>

            <h1 class="heading">¡Contáctanos o visítanos!</h1>



        </section>

        <div class="row">
            <div class="col-md-1"></div>


            <div class="col-md-5 d-flex justify-content-center">
                <div class="card5  d-flex">
                    <img src="assets/images/social-apps (1).png" style="width: 60px; height: 60px;" alt="...">
                    <p class="card-text2 mt-3 ml-2 px-2">6982-1029</p>
                </div>

            </div>


            <div class="col-md-5 mt-3 mt-md-0 d-flex justify-content-center">
                <div class="card5  d-flex">
                    <img src="assets/images/social-apps (2).png" style="width: 60px; height: 60px;" alt="...">
                    <p class="card-text2 mt-3 ml-2 px-2">6982-1029</p>
                </div>

            </div>

            <div class="col-md-1"></div>


        </div>






        <div class="start mt-4 pl-2">
            <h1>

                CIUDAD DE PANAMÁ



            </h1>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 ">
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
    align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
        height: 16px;
    background: #14B1FE;
        align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
">
                        VER MAPA </button>

                </div>
            </div>



            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle mb-1 font-weight-bold custom-font">Albrook</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-5">Pan Canal Plaza – Frente a Super Carnes</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text "> 304-1428 / 304-1473</p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
    align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
        height: 16px;
    background: #14B1FE;
        align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
">
                        VER MAPA </button>




                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle mb-1 font-weight-bold custom-font">Via Israel</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-5"> Nikos Calle 50 Dentro del restaurante</p>
                        <div class="pg  text-#14B1FE">



                            <p class="card-text "> 304-1428 / 304-1473</p>

                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
    align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
        height: 16px;
    background: #14B1FE;
        align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
">
                        VER MAPA </button>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle mb-1 font-weight-bold custom-font">Centennial</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-5">Plaza Centennial Dentro de S/M Rey </p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>
                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
    align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
        height: 16px;
    background: #14B1FE;
        align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
">
                        VER MAPA </button>



                </div>
            </div>
        </div>






        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-0">
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font"> Costa del Este</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
    align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
        height: 16px;
    background: #14B1FE;
        align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
">
                        VER MAPA </button>

                </div>
            </div>






            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
    align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
        height: 16px;
    background: #14B1FE;
        align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
">
                        VER MAPA </button>





                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
    align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
        height: 16px;
    background: #14B1FE;
        align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
">
                        VER MAPA </button>


                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font"> El Cangrejo</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
    align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
        height: 16px;
    background: #14B1FE;
        align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
">
                        VER MAPA </button>



                </div>
            </div>
        </div>


        <div class="line">
            <hr class="custom-hr">
        </div>


        <div class="start mb-4 mt-0">
            <h1> PANAMÁ OESTE</h1>


        </div>


        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 ">
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle2 mb-1 font-weight-bold custom-font">Costa Verde</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>


                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
    align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
        height: 16px;
    background: #14B1FE;
        align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
">
                        VER MAPA </button>



                </div>
            </div>



            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle2 mb-1 font-weight-bold custom-font">La Chorrera</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>






                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle2 mb-1 font-weight-bold custom-font">Vista Alegre</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>


                </div>
            </div>

        </div>





        <div class="line">
            <hr class="custom-hr">
        </div>


        <div class="start mb-0 mt-5">
            <h1> INTERIOR dEL PAíS</h1>


        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 ">
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Penonome</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-5">Avda. Central, dentro de Casa Peter </p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>


                            <p class="card-text"> Lunes a Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5 mt-lg-auto"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
    align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
        height: 16px;
    background: #14B1FE;
        align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
">
                        VER MAPA </button>


                </div>
            </div>



            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font"> Santiago</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-5">Boulevard Santiago Dentro de S/M Rey </p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 </p>

                            <p class="card-text"> 304-1428 </p>
                            <p class="card-text">
                                <img src="assets/images/whatsapp.png" alt="" width="14" height="14"
                                    style="margin-right: 5px; margin-top: -4px;">
                                6949-6775
                            </p>

                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>


                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5 mt-lg-auto"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>


                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>
                    <button class="btn btn-primary container text-center mt-5 mt-lg-auto"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
        </div>


        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 ">

            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>


                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>
                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>


                </div>
            </div>
        </div>




        <div class="line">
            <hr class="custom-hr">
        </div>

        <div class="start mb-4 mt-5">
            <h1> CASILLEROS BOXIT</h1>


        </div>






        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 ">
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">


                            <p class="card-text"> Horario de 6 am a 10pm.</p>


                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>



            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro
                            Rey</p>
                        <div class="pg  text-#14B1FE">


                            <p class="card-text"> 24Hrs</p>

                        </div>

                    </div>
                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 24Hrs</p>

                        </div>

                    </div>
                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>


                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 24Hrs</p>



                        </div>

                    </div>
                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
        </div>




        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-5">
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>



            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>






                </div>
            </div>


            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
        </div>



        <div class="line">
            <hr class="custom-hr">
        </div>

        <div class="start mb-4 mt-5 ">
            <h1>
                CENTRO DE ATENCIóN SERVIENTREGA
            </h1>


        </div>



        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 ">
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>



            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>


                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
        </div>


        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 ">
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>



            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>


                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
        </div>



        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 ">
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>



            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>


                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>
                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
        </div>



        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 ">
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>



            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>



                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">
                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">Brisas del Golf</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4">Centro Comercial Brisas Norte Dentro del S/M
                            Rey</p>
                        <div class="pg  text-#14B1FE">

                            <p class="card-text"> 304-1428 / 304-1473</p>
                            <p class="card-text"> 6949-6775</p>
                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 customacardsetting">

                    <h1 class="card-titletitle1 mb-1 font-weight-bold custom-font">San Miguelito</h1>
                    <div class="card-bodycard">
                        <p class="card-text1 mb-4"> Los Andes Mall, Local No.114 Sótano 1, Puerta 8
                            del Estacionamiento
                        </p>
                        <div class="pg  text-#14B1FE">


                            <p class="card-text"> Lunes – Viernes:</p>
                            <p class="card-text"> 9:00 a.m. – 6:30 p.m.</p>
                            <p class="card-text"> Sábados:</p>
                            <p class="card-text"> 9:00 a.m. a 2:00 p.m.</p>

                        </div>

                    </div>

                    <button class="btn btn-primary container text-center mt-5 mt-lg-auto"
                        style="width: 145.59px;height: 48px; background: #14B1FE;
      align-items: center;text-align: center;  padding: 12px 20.68px 15px 21.22px;border-radius: 5px ;border: 1px ;
">
                        <img src="assets/images/Symbol (1).png"
                            style=" width: 12.34px; color: white; margin-top: -5px;
          height: 16px;
      background: #14B1FE;
          align-items: center;text-align: center;  padding: 1px 1.68px 0px 0px;border-radius: 5px ;border: 1px ;
  ">
                        VER MAPA </button>
                </div>
            </div>
        </div>

        <!-- Design End  -->

    </body>
@endsection
