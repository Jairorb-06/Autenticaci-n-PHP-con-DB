<?php
session_start();

include 'conectar.php';
$conexion = conectar();
mysqli_set_charset($conexion, "utf8");
$user= addslashes($_POST['user']); //devuelve una cadena de caracteres
$pass=addslashes($_POST['pass']);
$hashed = hash('sha1', $pass);

//$consulta="SELECT * FROM users WHERE user='$user' and pass='$pass'";


$query =$conexion->prepare("SELECT * FROM users WHERE user=? and pass=?");
$query->bind_param("ss", $user, $hashed);
$query->execute();

$resultado=$query->get_result();

//$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){     
     $estraido=mysqli_fetch_array($resultado);// guardar la información en índices asociativos, utilizando los nombres de los campos
     $_SESSION['nombres']=$estraido['nombres'];
     $_SESSION['apellidos']=$estraido["apellidos"];
     header("Location:bienvenido.php"); 
}
else{
    session_destroy();
    echo '<script>
    alert("Error en la autentificación\nUsuario o Contraseña incorrectos");

    window.history.go(-1);
    </script>';
}

mysqli_free_result($resultado);
desconectar($conexion);
?>