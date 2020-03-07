<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Advogado Virtual</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body {
            font-family: "Source Sans Pro", sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(#57bfc7, #45a6b3);
        }

        .container {
            display: flex;
            height: 50vh;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .titulo{
            font-size: 30px;
            font-weight: bold;
            color: white;
        }
        .imagem{
            padding-left: 30px;
        }
    </style>
</head>
<body>
<span class="titulo"> Advogado Virtual</span>
<p class=imagem>
    <img src="../img/logo.png" alt="JusticaDigital" height="90" width="90">
</p>

<div class="container">
    
    <div class="content" id="app"> 
        <span class="titulo"> Diálogo Virtual</span>  
        <botman-tinker api-endpoint="/botman"></botman-tinker>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>