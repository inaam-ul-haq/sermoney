<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activación PO Box SirMoney Express </title>
    <style>
        .para {
            text-align: center;
            padding-bottom: 10px;
        }

        span {
            color: orange;
        }

        a {
            text-decoration: none;
            color: orange;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Activación Nuevo PO Box SirMoney Express</h1>
    <div style="display: flex; justify-content: center;">
      <!-- <img src="data:image/png;base64,{{ $base64Image }}" alt="logo" />  -->
    <img src="{{ asset('assets/images/Capture.jpeg') }}" alt="">
    </div>
    <p class="para">Hola{{ $name }},</p>
    <p>Tomó la mejor decisión al utilizar SirMoney Express como su proveedor de servicio de PO BOX para sus compras y pedidos en línea..</p>
    <hr>
    <p class="para">Para la ACTIVACIÓN, deberás ingresar el número de <br> PO BOX → <span>{{ $poBoxNumber }}</span> <br>
    y completar la información en el <br>
        <a href="https://dev.sirmoney.net/po-reg">formulario de activacion</a>.
      
    </p>
    <hr>
    <p class="para">¡Gracias por Elegirnos!</p>

</body>

</html>
