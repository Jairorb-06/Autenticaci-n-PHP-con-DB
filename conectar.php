<?php
function conectar(){
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $bd ="registro";

    $conexion = mysqli_connect($server,$user,$pass,$bd);
    if (!$conexion){
        echo 'Error al conectar a la 
        base de datos';
    }
    else{
       // echo 'conexión exitosa';
    };

    return $conexion;
}
 
function desconectar($conexion){
    $close = mysqli_close($conexion) 
        or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

    return $close;
    
}

?>