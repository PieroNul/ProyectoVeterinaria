<?php  
//Coneccion procedimental a MYSQL desde PHP
$viServidor = "localhost";
$viUsuario = "root";
$viPassword = "12345678";
$viBaseDatos = "FINAL_VETERINARIA";

$vlConexion = new mysqli($viServidor,$viUsuario,$viPassword,$viBaseDatos);
?>
