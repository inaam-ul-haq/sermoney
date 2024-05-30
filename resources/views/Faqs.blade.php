@extends('layouts.app')

@section('content')
    <!-- =============FAQs section Start================= -->

    <section class="bg-white">
        <div class="container ">
            <div class="row">
                <div class="col-md-7 d-flex flex-column justify-content-center">

                    <h1 class="faqshead">PREGUNTAS FRECUENTES</h1>

                </div>
                <div class="col-md-5">
                    <img src="./assets/images/faqs.png" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="faqstart py-5">
        <div class="text-center pt-4 headfaqs">
            <h3>MI CUENTA</h3>
        </div>

        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="headingOne">

                        <div class="plusocns">
                            <i class="fas fa-plus text-center ps-3"></i>
                        </div>
                        <button class="accordion-button ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ¿Quiénes somos?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show ps-5" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1 ">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="headingTwo">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Cómo me registro u obtengo una cuenta?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header  ps-5" id="headingThree">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Cuáles son sus tarifas o qué planes ofrecen?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse ps-5" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="collaps7">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collaps7" aria-expanded="false" aria-controls="collaps7">
                            ¿Cuáles son mis direcciones en Miami?
                        </button>
                    </h2>
                    <div id="collaps7" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>



                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="collaps8">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collaps8" aria-expanded="false" aria-controls="collaps8">
                            Dirección para Paquetes y Couriers (Aérea)
                        </button>
                    </h2>
                    <div id="collaps8" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="collaps9">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collaps9" aria-expanded="false" aria-controls="collaps9">
                            Dirección para Mercancía Pesada y con Volumen (Marítima)
                        </button>
                    </h2>
                    <div id="collaps9" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="collaps10">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collaps10" aria-expanded="false" aria-controls="collaps10">
                            Dirección para Correos y Revistas (Mail)
                        </button>
                    </h2>
                    <div id="collaps10" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="collaps11">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collaps11" aria-expanded="false" aria-controls="collaps11">
                            ¿Qué es “mi cuenta” y qué beneficios obtengo al tener acceso a ella?
                        </button>
                    </h2>
                    <div id="collaps11" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="collaps12">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collaps12" aria-expanded="false" aria-controls="collaps12">
                            ¿Ofrecen el servicio de entregas a domicilio?
                        </button>
                    </h2>
                    <div id="collaps12" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body my-sm-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="collaps13">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collaps13" aria-expanded="false" aria-controls="collaps13">
                            ¿Qué métodos de pagos tienen disponibles?
                        </button>
                    </h2>
                    <div id="collaps13" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="faqstart py-5">
        <div class="text-center pt-4 headfaqs">
            <h3>SEGUIMIENTO DE PAQUETES</h3>
        </div>

        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading14">

                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
                            ¿Qué tiempo o cuánto tiempo toma en llegar un paquete desde Estados Unidos a Panamá?
                        </button>
                    </h2>
                    <div id="collapse14" class="accordion-collapse collapse ps-5" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading15">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                            ¿Cómo puedo dar seguimiento o saber dónde está mi paquete?
                        </button>
                    </h2>
                    <div id="collapse15" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading16">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                            ¿Dónde está mi paquete si USPS (United States Postal Service) indica que ya fue entregado en
                            Miami y aún no lo he recibido?
                        </button>
                    </h2>
                    <div id="collapse16" class="accordion-collapse collapse ps-5" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="collaps17">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collaps17" aria-expanded="false" aria-controls="collaps17">
                            ¿Qué es la Alerta de paquetes y cómo puedo hacerla?
                        </button>
                    </h2>
                    <div id="collaps17" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faqstart py-5">
        <div class="text-center pt-4 headfaqs">
            <h3>FLETE Y CARGOS ADUANALES</h3>
        </div>

        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading18">

                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse18" aria-expanded="true" aria-controls="collapse18">
                            ¿Qué es el cargo de flete y cómo se determina?
                        </button>
                    </h2>
                    <div id="collapse18" class="accordion-collapse collapse ps-5" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading19">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                            ¿Qué son Impuestos de Aduana?
                        </button>
                    </h2>
                    <div id="collapse19" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading20">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                            ¿Dónde puedo cotizar mis compras por internet?
                        </button>
                    </h2>
                    <div id="collapse20" class="accordion-collapse collapse ps-5" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="collaps21">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collaps21" aria-expanded="false" aria-controls="collaps21">
                            ¿Qué son los trámites especiales y a qué mercancías aplican?
                        </button>
                    </h2>
                    <div id="collaps21" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="faqstart py-5">
        <div class="text-center pt-4 headfaqs">
            <h3>COMPRAS POR INTERNET</h3>
        </div>

        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading22">

                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse22" aria-expanded="true" aria-controls="collapse22">
                            ¿Qué beneficios obtengo al comprar por Internet?
                        </button>
                    </h2>
                    <div id="collapse22" class="accordion-collapse collapse ps-5" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading23">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                            ¿Cómo puedo comprar por internet si no tengo tarjeta de crédito o paypal?
                        </button>
                    </h2>
                    <div id="collapse23" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading24">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                            ¿Cuál es el cargo por realizar una compra con su tarjeta de crédito corporativa?
                        </button>
                    </h2>
                    <div id="collapse24" class="accordion-collapse collapse ps-5" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="collaps25">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collaps25" aria-expanded="false" aria-controls="collaps25">
                            ¿Qué proveedores son los más recomendados para comprar por internet?
                        </button>
                    </h2>
                    <div id="collaps25" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header ps-5" id="heading26">
                    <div class="plusocns">
                        <i class="fas fa-plus ps-3"></i>
                    </div>
                    <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                        <span class="pt-3 ps-3">¿Cómo evitar ser víctima del fraude en compras por Internet?
                    </button>
                </h2>
                <div id="collapse26" class="accordion-collapse collapse ps-5" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body ms-1">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                        overflow.
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


    <section class="faqstart py-5">
        <div class="text-center pt-4 headfaqs">
            <h3>SEGURO DE MERCANCÍAS</h3>
        </div>

        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading27">

                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse27" aria-expanded="true" aria-controls="collapse27">
                            ¿Qué es el seguro mercancías y por qué debo asegurar mis compras?
                        </button>
                    </h2>
                    <div id="collapse27" class="accordion-collapse collapse ps-5" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading28">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                            ¿Qué ocurre si compro un artículo y llega dañado o defectuoso a Panamá?
                        </button>
                    </h2>
                    <div id="collapse28" class="accordion-collapse collapse ps-5" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header ps-5" id="heading29">
                        <div class="plusocns">
                            <i class="fas fa-plus ps-3"></i>
                        </div>
                        <button class="accordion-button collapsed ms-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                            ¿Qué ocurre si ordeno un artículo y el proveedor envía uno equivocado?
                        </button>
                    </h2>
                    <div id="collapse29" class="accordion-collapse collapse ps-5" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body ms-1">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faqstart py-5">
        <div class="text-center pt-4 headfaqs">
            <h3>TIPS / SUGERENCIAS:</h3>
        </div>

        <div class="container pb-3">
            <p>Los paquetes con valor hasta $100 (valor CIF: costo + seguro + flete) están libres de Impuesto Aduanal. En
                base a la Ley N° 53 de 13 de Diciembre
                de 2007 que aprueba el Tratado de Promoción Comercial entre la República de Panamá y los Estados Unidos de
                América

            </p>
            <p>
                Airbox Express no cobra volumen para paquetes en el que todos sus lados sean inferiores a 50” (pulgadas).
            </p>
            <p>
                Recuerda colocar tu número de cuenta PTY en todas sus compras. Evita cargos adicionales por reconocimiento
                de paquetes o almacenaje.
            </p>
            <p>
                Pre-Alerta tus compras y agiliza el proceso de envío desde Estados Unidos a Panamá y trámites Aduanales en
                destino.
            </p>
            <p>
                Tus paquetes son recibidos en Miami de lunes a viernes de 8:00 am a 5:00 pm hora de Miami.
            </p>
            <p>
                Evite el riesgo de despachos separados al realizar sus compras en Amazon y E-bay, revise que las mercancías
                sean vendidas por el mismo
                vendedor o seller.
            </p>
        </div>
    </section>




    <!-- =============FAQs section End================= -->
@endsection
