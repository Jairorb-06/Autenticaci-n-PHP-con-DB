<?php

include 'conectar.php';
$conexion = conectar();
mysqli_set_charset($conexion, "utf8");
$user= addslashes($_POST['user']); 
$pass=addslashes($_POST['pass']);
$hashed = hash('sha1', $pass);

$consulta="SELECT * FROM users WHERE user='$user' and pass='$hashed'";
 
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){ 
     
     $estraido=mysqli_fetch_array($resultado);
     $datos=$estraido['nombres']." ".$estraido["apellidos"];
     header("Location:bienvenido.php?datosusuario=$datos"); 
}
else{
    echo '<script>
    alert("Error en la autentificación\nUsuario o Contraseña incorrectos");

    window.history.go(-1);
    </script>';
}

mysqli_free_result($resultado);
desconectar($conexion);
?>