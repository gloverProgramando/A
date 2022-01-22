<?php
$server ="localhost";        //CAMBIEN EL PUERTO, AL QUE TENGA SU COMPUTADORA
$pass ="GloverSantos1@";                   //CAMBIAR CONTRASEÑA PARA LOS QUE UTILICEN
$user = "root";
$db ="picsa";
$conexion = new mysqli($server, $user,$pass, $db) or die("sin conexion");
$consulta ="SELECT * FROM `menu`";
$resultado = mysqli_query ($conexion, $consulta) or die ("Sin conexion 2");
?>