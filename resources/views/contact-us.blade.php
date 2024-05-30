<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .text {

        font-family: "Lato";
        font-size: 70px;
        font-weight: 900;
        line-height: 70px;
        text-align: left;

        color: #14B1FE;
        padding: 192px 0px;

    }

    .image {
        width: 100%;

        height: auto;


    }

    .container2 {
        background: #F9F9F9;
        ;
    }

    .text2 {
        font-family: "Roboto";
        font-size: 30px;
        font-weight: 600;
        line-height: 34px;
        text-align: center;
        color: #14B1FE;


    }

    .green {
        color: #4D9D2A;

    }


    .circular-border {


        width: 126px;
        height: 126px;
        padding: 40.5px 38px 35.5px 38px;
        border-radius: 50%;
        box-shadow: 0px 0px 0px 9px #0000000D inset;
        box-shadow: 0px 0px 7px 8px #00000014 inset;
        opacity: 0px;
        position: relative;
        overflow: hidden;
        border: 1px solid #F8F8F8
    }

    .circular-border img {
        width: 40px;
        height: 42px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }





    /* .btn-container {

        width: 135.25px;
         align-items: right;
         text-align: right;
         height: 38px;
         
         
                        gap: 0px;
                        border-radius: 2px ;
                        border: 1px ;
                        opacity: 0px;





      
    }  */


    @media (max-width: 992px) {



        .text {

            font-size: 50px;
            padding: 71px 0px;

        }
    }

    @media (max-width: 768px) {




        .text {

            font-size: 35px;


        }
    }


    .custom-text-color {
        color: #656B6F;
        width: 126px;
    }

    .custom-text-color1 {
        color: #161922;

    }

    .custom-font-size {
        font-size: 21px;

    }

    .custom-button-color {
        background: #14B1FE;

    }
</style>

@section('content')
    <div class="container px-5 py-5">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-8">
                    <div class="content">

                        <h1 class="text ">CONTACTO</h1>
                    </div>

                </div>

                <div class="col-md-4">
                    <img class="image" src="./assets/images/amico.png">

                </div>
            </div>
        </div>
    </div>

    <div class="container2 py-5">

        <h2 class="text2 pt-4 pb-5">
            Asesoría totalmente <span class="green">Gratuita.</span>
        </h2>


        <div class="container5 mb-5">
            <div class="row p-0 m-0">
                <div class="col-lg-1 px-0"></div>
                <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center ">
                    <div>
                        <div class="circular-border">
                            <img src="./assets/images/Icon (11).png" alt="Image 1">
                        </div>

                        <div class="text-center mt-3 custom-text-color">
                            <h1 class="h4 font-weight-normal custom-font-size"> Ubicación</h1>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center">
                    <div>

                        <div class="circular-border">
                            <img src="./assets/images/Vector (24).png" alt="Image 2">
                        </div>

                        <div class="text-center mt-3 custom-text-color">
                            <h1 class="h4 font-weight-normal custom-font-size "> Teléfono</h1>
                            <p class="p custom-text-color">+507 269-9774</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center">
                    <div>

                        <div class="circular-border">
                            <img src="./assets/images/Vector (30).png" alt="Image 3">
                        </div>

                        <div class="text-center mt-3 custom-text-color">
                            <h1 class="h4  font-weight-normal custom-font-size"> Ticket </h1>
                        </div>

                    </div>

                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center">
                    <div>

                        <div class="circular-border">
                            <img src="./assets/images/Vector (28).png" alt="Image 4">
                        </div>

                        <div class="text-center mt-3 custom-text-color">
                            <h1 class="h4  font-weight-normal custom-font-size"> Asistencia Remota </h1>
                        </div>

                    </div>




                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center">
                    <div>
                        <div class="circular-border">
                            <img src="./assets/images/Vector (29).png" alt="Image 5">
                        </div>
                        <div class="text-center mt-3 custom-text-color">
                            <h1 class="h4 font-weight-normal custom-font-size"> Whatsapp</h1>
                            <p> +507 6982-1029</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 px-0"></div>
            </div>
        </div>



        <div class="container3 px-5">
            <div class="row">
                <div class="col-lg-2 px-0"></div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group mb-3 ">
                                <label for=" #PTY / Cuenta">#PTY / Cuenta</label>
                                <input type="password" class="form-control " id="exampleInputPassword1" placeholder=" ">
                            </div>

                            <div class="form-group mb-3 ">
                                <label for="exampleInputPassword1"> Nombre Completo <span
                                        class="star text-danger">*</span></label>
                                <input type="password" class="form-control " id="exampleInputPassword1" placeholder="">
                            </div>

                            <div class="form-group  mb-3">
                                <label for="exampleInputEmail1"> Email <span class="star text-danger">*</span></label>
                                <input type="email" class="form-control " id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="">

                            </div>


                            <div class="form-group mb-4 ">
                                <label for="consultType">Tipo de Consulta <span class="star text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="consultType" id="radio1"
                                        value=" Estatus de paquetes">
                                    <label class="form-check-label text-secondary" for="radio1">
                                        Estatus de paquetes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="consultType" id="radio2"
                                        value="  Información sobre el Servicio">
                                    <label class="form-check-label text-secondary" for="radio2">
                                        Información sobre el Servicio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="consultType" id="radio3"
                                        value="Gestión de Quejas">
                                    <label class="form-check-label text-secondary" for="radio3">
                                        Gestión de Quejas
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="consultType" id="radio3"
                                        value=" Manejo de datos personales">
                                    <label class="form-check-label text-secondary" for="radio3">
                                        Manejo de datos personales
                                    </label>
                                </div>
                            </div>

                            <div class="form-group mb-3 ">
                                <label for="exampleInputPassword1"> Asunto <span class="star text-danger">*</span></label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                            </div>

                            <div class="form-group ">
                                <label for="exampleInputPassword1"> Mensaje <span
                                        class="star text-danger">*</span></label>
                                <input type="password" class="form-control form-control-lg" style="height: 100px;"
                                    placeholder="   " id="exampleInputPassword1">
                            </div>


                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">

                                <button class="btn btn-primary custom-button-color" type="button">Enviar
                                    Consulta</button>
                            </div>



                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
                <div col class="col-md-2"> </div>
            </div>

        </div>
    </div>
@endsection
