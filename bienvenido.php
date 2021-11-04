<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>

    <link rel="stylesheet" href="estilos1.css"> 
</head>

<body class="cont">
    <div>
        <?php
           echo"<h1> BIENVENIDO:"." ".($_GET["datosusuario"])."</h1>";      
        ?>
    </div>
        
    <a href="Autenticar.html">Salir</a>

</body>

</html>