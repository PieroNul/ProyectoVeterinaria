<?php 
$vlUsuario = $_POST['txtUsuario'];  

$vlContrasenia = $_POST['txtContrasenia'];  

session_start();

$_SESSION['txtUsuario']=$vlUsuario;


//Conexion a la base de datos
$vlServidor="localhost";
$vlUser="root";
$vlPassword="12345678";
$vlBaseDatos="FINAL_VETERINARIA";

$vlConexion = new mysqli($vlServidor,$vlUser,$vlPassword,$vlBaseDatos);

$consulta="SELECT * FROM Login WHERE usuario ='$vlUsuario' AND contrasena='$vlContrasenia'";
$resultado=mysqli_query($vlConexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
 	header("location:../View/frmIndex.php");

 }else {
    ?> 
    <?php
    include("../View/frmLogin.php");
    ?>
    <h1 class="bad">ERROR DE AUTENTICACION</h1>
    <?php
 } 
mysqli_free_result($resultado);
mysqli_close($vlConexion);
?>