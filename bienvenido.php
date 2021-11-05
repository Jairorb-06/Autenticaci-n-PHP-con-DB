<?php
    session_start();
    if(!isset($_SESSION['nombres'])){
        //session_destroy();
        header('Location: Autenticar.html');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="estilos1.css" rel="stylesheet" >
    <title>Bienvenido</title>

    
</head>
 
<?php
           $nombres=$_SESSION['nombres'];
           $apellidos=$_SESSION['apellidos'];
?>

<br>
<body class="cont">
<div class="container">   
<nav class="navbar navbar-expand-lg navbar-light  " style="background-color: #e3f2fd;">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Usuario: <?php
           echo "$nombres";?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reportes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">contabilidad</a></li>
            <li><a class="dropdown-item" href="#">Inventario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Impresion</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex">       
          <a class="nav-link" href="salir.php"> <i class="bi bi-x-circle"></i> Cerrar Sesión</a>    
      </form>
    </div>
  </div>
  </nav>

  <br>

  <img src="imagenes/usuario.png" class="rounded mx-auto d-block">
  <br>
   <div>
        <?php
           echo"<h1 class='display-6 text-secundary text-center'> BIENVENIDO:$nombres $apellidos</h1>";      
        ?>
   </div>
        
    

</div>
</body>

</html>