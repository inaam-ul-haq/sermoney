@extends('admindashboard.layout.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abrir Popup con JavaScript</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 50px;
    }
    .button {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 4px;
    }
  </style>
</head>
<body>

<button class="button" onclick="openPopup()"> Bodega Miami</button>

<script>
  function openPopup() {
    // URL del sitio web que se abrirá en el popup
    var url = 'https://fastcargotracking.com/tracking';

    // Abrir una nueva ventana o pestaña con la URL especificada
    window.open(url, '_blank', 'width=800,height=600');
  }
</script>

</body>
</html>
@endsection
