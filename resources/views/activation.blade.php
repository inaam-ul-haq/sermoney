<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activation Email</title>
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
    <h1>Po Box Email</h1>
    <div style="display: flex; justify-content: center;">
        <img src="{{ asset('assets/images/Capture.PNG') }}" alt="">
    </div>
    <p class="para">Hello {{ $name }},</p>
    <p>You made the best decision in using Priority Express as your PO BOX Service provider for your purchases and
        orders online.</p>
    <hr>
    <p class="para">For ACTIVATION, you must enter the number of <br> PO BOX → <span>{{ $poBoxNumber }}</span> <br>
        and complete
        the
        information in the <br>
        <a href=""> ACTIVATION FORM</a>.
    </p>
    <hr>
    <p class="para">Thanks for choosing us!</p>

</body>

</html>
