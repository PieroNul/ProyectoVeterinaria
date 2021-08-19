<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Veterinaria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/estilos.css">
        <link rel="stylesheet" href="../CSS/fonts.css">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../CSS/style.css">
        <link rel="stylesheet" href="../CSS/botones.css">
    </head>
    <body>

        <header>
            <nav>
                <ul>
                    <li><a href="frmIndex.php"><span class="primero"><i class="icon icon-home"></i></span>INICIO</a></li>
                    <li><a href="#"><span class="segundo"><i class="icon icon-add-to-list"></i></span>REGISTRAR</a>
                        <ul>
                            <li><a href="frmMantenimientoCliente.php">CLIENTE</a></li>
                            <li><a href="frmMantenimientoMascota.php">MASCOTA</a></li>
                            <li><a href="frmMantenimientoVisita.php">VISITA</a></li>
                            <li><a href="frmMantenimientoAnimal.php">ESPECIE</a></li>
                            <li><a href="frmMantenimientoTratamiento.php">TRATAMIENTO</a></li>
                            <li><a href="frmMantenimientoMedicacion.php">MEDICACION</a></li>
                            <li><a href="frmMantenimientoDoctor.php">DOCTOR</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="tercero"><i class="icon icon-magnifying-glass"></i></span>BUSQUEDA</a>
                        <ul>
                          <li><a href="frmFechaPorFecha.php">FECHA VISITA</a></li>
                          <li><a href="frmMascotaPorCliente.php">MASCOTA</a></li>
                          <li><a href="frmHistorial.php">HISTORIAL VISITAS</a></li>
                          <li><a href="frmHistorialEliminadas.php">HISTORIAL ANTIGUO</a></li>
                          <li><a href="frmRazas.php">RAZAS</a></li>
                        </ul>
                    </li>
                    <li><a href="frmAcercaDe.php"><span class="cuarto"><i class="icon icon-text-document"></i></span>ACERCA DE</a></li>
                    <li><a href="frmContacto.php"><span class="quinto"><i class="icon icon-mail"></i></span>CONTACTO</a></li>
                </ul>
            </nav>
	 </header>
	<div class="container-fluid">
		<form method="POST" action="frmNuevaEspecie.php">
			<button type="submit" class="Piero"><span class="Piero2"></span>AGREGAR ESPECIE</button>
		</form>
		<div class="row">
			</br>
			<div class="col-sm-4" style="background-color:lavender;">ID ESPECIE</div>
			<div class="col-sm-4" style="background-color:lavenderblush;">ESPECIE</div>
			<div class="text-center" style="background-color:lavender;">EDITAR</div>
<?php  
include '../Model/cConexion.php';
if (!$vlConexion) {
	die ("<h3> Error en la conexion con la base de datos </h3>");
} else {
	$vlQuerySelect = "SELECT * FROM TipoMascota";
	$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
	if (mysqli_num_rows($vlEjecucion)>0) {
		while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
		//Aca ira el codigo de la matriz de resultados
		?>
				<form method="POST" action="frmEditarAnimal.php">
					<div class="col-sm-4" style="background-color:lavender;"><?php echo $vlRegistro['ID_TipoMacota']; ?></div>
					<input type="hidden" name="txtId" value=<?php echo $vlRegistro['ID_TipoMacota']; ?>>
					<div class="col-sm-4" style="background-color:lavenderblush;"><?php echo $vlRegistro['Tipo']; ?></div>
					<div class="text-center" style="background-color:lavender;"><button type="submit" class="btn btn-primary">EDITAR</button></div><div class="col" style="background-color:lavenderblush;">.</div>
				</form>
			</div>
		</div>		
		<?php
		}
	}	
}

?>
</body>
</html>