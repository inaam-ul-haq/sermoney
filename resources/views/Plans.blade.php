@extends('layouts.app')
<style>
    .text-cust-grey {
        color: #7A7A7A !important;

    }
</style>
@section('content')
    <section class="planbanner mt-3">
        <div class="container plansinner">
            <h1>PLANES</h1>
            <img src="./assets/images/plan1.png" class="w-100 img-fluid" alt="">
        </div>
    </section>
    <div class="planbglinecoor">
    </div>

    <section class="Planprices my-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-2 "></div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex justify-content-center">
                        <button class="btn recomend-btn  p-3 mb-3">RECOMENDADO</button>
                    </div>

                    <div class="card text-center px-3 mt-1 pricingcardmain">
                        <div class="card-body ">
                            <h3 class="card-title">Premium</h3>
                            <h1 class="card-title"><sup>$</sup> <span>4.</span><sup>95</sup></h1>
                            <span>Primera Libra</span>

                            <div class="text-start">
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0">Tiempo de entrega de 2 a 3
                                        días hábiles</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0">TEntregas gratis a domicilio en
                                        autos eléctricos. (en la ciudad yPanamá Oeste)*</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0">Devoluciones a USA GRATIS</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0">Compramos por ti con nuestra
                                        tarjeta de crédito. 50% de descuento*</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0"> Servicio de correo postal USPS gratis 3lb al mes*</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0">Atención personalizada</p>
                                </div>

                                <div class="text-center my-3  plansbutton">
                                    <button class="border-0 px-3 py-2 rounded">Más beneficios</button>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-3 mt-lg-4 col-md-6">
                    <div class="mb-5"></div>
                    <div class="card text-center px-3  pricingcardmain">
                        <div class="card-body ">
                            <h3 class="card-title">Economy</h3>
                            <h1 class="card-title"><sup>$</sup> <span>2.</span><sup>75</sup></h1>
                            <span>Primera Libra</span>

                            <div class="text-start">
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0">Tiempo de entrega de 4 a 6
                                        días hábiles</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0">N/A</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0"> Devoluciones a USA tarifa regular*</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0">Compramos por ti con nuestra
                                        tarjeta de crédito. Tarifa regular*</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0"> N/A</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0">N/A</p>
                                </div>
                                <div class="d-flex plantext mb-2">
                                    <img src="./assets/images/plantick.svg" alt="">
                                    <p class="ps-2 pt-1 mb-0">Atención personalizada
                                    </p>
                                </div>

                                <div class="text-center my-3  plansbutton">
                                    <button class="border-0 px-3 py-2 rounded">Más beneficios</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2"></div>
            </div>

            <div class="my-5 text-center appplyplan">
                <p>*Aplican términos y condiciones (haz clic aquí)</p>

                <div class="text-center my-3  plansbutton">
                    <button class="border-0 px-3 py-2 rounded">COTIZA</button>
                </div>

            </div>
        </div>

    </section>

    <section class="Planregisterbanner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="planreginner py-4 py-md-0 text-center">
                                <h1>SELECCIONA
                                    TU PLAN HOY
                                </h1>
                                <button class="btn planregister-btn py-3 px-4 mt-2">REGÍSTRATE</button>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>


                </div>
                <div class="col-md-5">
                    <img src="./assets/images/planregiter.png" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="lanlastsec my-5 text-center">
        <div class="container managesect">
            <h1>Tramite de<br> nacionalización</h1>
            <p class="text-cust-grey">Todos los paquetes que entran al territorio nacional deben pasar por inspección
                aduanal y están sujetos
                al pago de impuestos. La tarifa de Manejo de Nacionalización se cobra de acuerdo al valor CIF del
                paquete. Para calcular los impuestos de un paquete, usa nuestra <a href="">calculadora en línea</a>
                o
                contacta a Servicio al Cliente.</p>
            <h3>Para mayor información contáctanos a nuestras líneas</h3>
            <div class="py-3">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.0613 5.87695C33.3426 9.1582 35.3738 13.4551 35.3738 18.1426C35.3738 27.6738 27.4051 35.4863 17.7957 35.4863C14.9051 35.4863 12.0926 34.7051 9.51445 33.377L0.373829 35.7207L2.7957 26.7363C1.31133 24.1582 0.451954 21.1895 0.451954 18.0645C0.451954 8.5332 8.26445 0.720703 17.7957 0.720703C22.4832 0.720703 26.8582 2.5957 30.0613 5.87695ZM17.7957 32.5176C25.7645 32.5176 32.4051 26.0332 32.4051 18.1426C32.4051 14.2363 30.7645 10.6426 28.0301 7.9082C25.2957 5.17383 21.702 3.68945 17.8738 3.68945C9.90508 3.68945 3.4207 10.1738 3.4207 18.0645C3.4207 20.7988 4.20195 23.4551 5.6082 25.7988L5.99883 26.3457L4.51445 31.6582L9.9832 30.1738L10.452 30.4863C12.7176 31.8145 15.2176 32.5176 17.7957 32.5176ZM25.7645 21.7363C26.1551 21.9707 26.4676 22.0488 26.5457 22.2832C26.702 22.4395 26.702 23.2988 26.3113 24.3145C25.9207 25.3301 24.202 26.2676 23.4207 26.3457C22.0145 26.5801 20.9207 26.502 18.1863 25.252C13.8113 23.377 10.9988 19.002 10.7645 18.7676C10.5301 18.4551 9.0457 16.4238 9.0457 14.2363C9.0457 12.127 10.1395 11.1113 10.5301 10.6426C10.9207 10.1738 11.3895 10.0957 11.702 10.0957C11.9363 10.0957 12.2488 10.0957 12.4832 10.0957C12.7957 10.0957 13.1082 10.0176 13.4988 10.877C13.8113 11.7363 14.7488 13.8457 14.827 14.0801C14.9051 14.3145 14.9832 14.5488 14.827 14.8613C14.0457 16.502 13.1082 16.4238 13.577 17.2051C15.2957 20.0957 16.9363 21.1113 19.5145 22.3613C19.9051 22.5957 20.1395 22.5176 20.452 22.2832C20.6863 21.9707 21.5457 20.9551 21.7801 20.5645C22.0926 20.0957 22.4051 20.1738 22.7957 20.3301C23.1863 20.4863 25.2957 21.502 25.7645 21.7363Z"
                                            fill="#14B1FE" />
                                    </svg>
                                    <span class="px-1 pt-2"><b>Whatsapp:</b></span>
                                    <p class="px-1 pt-2">+507 6982-1079</p>

                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="d-flex">
                                    <i class="fa-regular fa-envelope fs-1 icon-envelop"></i>

                                    <span class="px-1 pt-2"><b>Email en:</b></span>
                                    <p class="px-1 pt-2"> ventas@sirmoney.net</p>

                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="d-flex">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.2703 16.4707V25.2207C15.2703 26.627 14.0984 27.7207 12.7703 27.7207H11.5203C8.70781 27.7207 6.52031 25.5332 6.52031 22.7207V18.9707C6.52031 16.2363 8.70781 13.9707 11.5203 13.9707H12.7703C14.0984 13.9707 15.2703 15.1426 15.2703 16.4707ZM29.0203 27.7207H27.7703C26.3641 27.7207 25.2703 26.627 25.2703 25.2207V16.4707C25.2703 15.1426 26.3641 13.9707 27.7703 13.9707H29.0203C31.7547 13.9707 34.0203 16.2363 34.0203 18.9707V22.7207C34.0203 25.5332 31.7547 27.7207 29.0203 27.7207ZM20.2703 0.220703C31.3641 0.220703 39.8797 9.51758 40.2703 20.2207V33.1895C40.2703 37.0957 37.0672 40.2207 33.1609 40.2207H19.0203C16.9109 40.2207 15.2703 38.5801 15.2703 36.4707C15.2703 34.4395 16.9109 32.7207 19.0203 32.7207H21.5203C23.5516 32.7207 25.2703 34.4395 25.2703 36.4707H33.1609C35.0359 36.4707 36.5203 35.0645 36.5203 33.1895C36.5203 33.1895 36.4422 20.4551 36.4422 20.2207H36.5203C36.5203 11.3145 29.1766 3.9707 20.2703 3.9707C11.2859 3.9707 4.02031 11.3145 4.02031 20.2207V21.4707C4.02031 22.1738 3.39531 22.7207 2.77031 22.7207H1.52031C0.817188 22.7207 0.270313 22.1738 0.270313 21.4707V20.2207C0.582813 9.51758 9.09844 0.220703 20.2703 0.220703Z"
                                            fill="#14B1FE" />
                                    </svg>


                                    <span class="px-1 pt-2"><b>Call center:</b></span>
                                    <p class="px-1 pt-2">+507 269-9774</p>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <p class="text-cust-grey">Los paquetes con valor hasta $100 (valor CIF: costo + seguro + flete) están libres de
                Impuesto Aduanal. En base a la Ley N° 53 de 13 de
                diciembre de 2007 que aprueba el Tratado de Promoción Comercial entre la República de Panamá y los Estados
                Unidos de América, así
                como el Decreto 12 de 29 de marzo de 2016.</p>
            <h3><span><i class="fa-regular fa-envelope fs-3 pe-4"></i></span> Notas especiales</h3>
            <ul class="text-start text-cust-grey py-3">
                <li class="mb-2 text-cust-grey">Toda mercancía con un valor CIF superior a los USD $2.000 paga una tarifa
                    de USD $100 al estado, además de los impuestos de importación.</li>
                <li class="mb-2 text-cust-grey">Estimados Clientes → Periódicamente estaremos realizando inspecciones de
                    rutina en conjunto con la Fiscalía De Drogas y la Unidad Canina en nuestras bodegas. Agradecemos su
                    comprensión. Esto es para su mayor seguridad.</li>
                <li class="text-cust-grey">Los paquetes con valor CIF menor a USD $100.00, consignados a una persona
                    natural, son exonerados de impuestos de importación.</li>
            </ul>
            <h3>NOTA → No nos hacemos responsables por:</h3>
            <ul class="text-start text-cust-grey py-3">
                <li class="mb-2 text-cust-grey">Paquetes extraviados por mala entrega de USPS, U.S. Postal Service, Amazon
                    Logistics</li>
                <li class="mb-2 text-cust-grey">Mercancía faltante que es entregada por USPS, U.S. Postal Service.</li>
                <li class="text-cust-grey"> No importamos sobres de carta, correspondencia ni revistas, solo paquetería con
                    tracking number.</li>

            </ul>
        </div>
    </section>
@endsection
