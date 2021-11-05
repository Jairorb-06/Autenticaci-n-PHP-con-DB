<?php
session_start();
unset($_SESSION['nombres']);
unset($_SESSION['apellidos']);
session_destroy();
header("Location: Autenticar.html");
?>