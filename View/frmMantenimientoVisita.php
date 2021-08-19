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
		<div class="row">
			</br>
			<div class="col-sm-1" style="background-color:lavender;">ID VISITA</div>
			<div class="col-sm-2" style="background-color:lavenderblush;">NOMBRE MASCOTA</div>
			<div class="col-sm-1" style="background-color:lavender;">DOCTOR</div>
			<div class="col-sm-2" style="background-color:lavenderblush;">TRATAMIENTO</div>
			<div class="col-sm-1" style="background-color:lavender;">TIPO</div>
			<div class="col-sm-1" style="background-color:lavenderblush;">FECHA</div>
			<div class="col-sm-2" style="background-color:lavender;">FORMA DE PAGO</div>
			<div class="col-sm-1" style="background-color:lavenderblush;">TOTAL</div>
			<div class="text-center" style="background-color:lavender;">ELIMINAR</div>
		</div>	
	</div>
</body>
</html>
<?php  
include '../Model/cConexion.php';
if (!$vlConexion) {
	die ("<h3> Error en la conexion con la base de datos </h3>");
} else {
	$vlQuerySelect = "SELECT V.ID_Visita,M.NombreMascota,D.nombre AS DOCTOR,T.Tratamiento,TipoDeVisita,FechaVisita,FormaDePago,Total from Visitas V
INNER JOIN Mascota_Cliente M on V.ID_MascotaCliente = M.ID_MascotaCliente
INNER JOIN Doctor D on V.ID_Doctor=D.ID_Doctor
INNER JOIN Tratamiento T on V.ID_Tratamiento = T. ID_Tratamiento where estado=1 order by ID_Visita asc";
	$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
	if (mysqli_num_rows($vlEjecucion)>0) {
		while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
		//Aca ira el codigo de la matriz de resultados
		?>
		<div class="container-fluid">
			<div class="row">
                <form method="POST" action="../Controller/EliminarVisita.php">
				<div class="col-sm-1" style="background-color:lavender;"><?php echo $vlRegistro['ID_Visita']; ?></div>
				<input type="hidden" name="txtId" value=<?php echo $vlRegistro['ID_Visita']; ?>>
				<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $vlRegistro['NombreMascota']; ?></div>
				<div class="col-sm-1" style="background-color:lavender;"><?php echo $vlRegistro['DOCTOR']; ?></div>
                <div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $vlRegistro['Tratamiento']; ?></div>
                <div class="col-sm-1" style="background-color:lavender;"><?php echo $vlRegistro['TipoDeVisita']; ?></div>
                <div class="col-sm-1" style="background-color:lavenderblush;"><?php echo $vlRegistro['FechaVisita']; ?></div>
                <div class="col-sm-2" style="background-color:lavender;"><?php echo $vlRegistro['FormaDePago']; ?></div>
                <div class="col-sm-1" style="background-color:lavenderblush;"><?php echo $vlRegistro['Total']; ?></div>
                <div class="text-center" style="background-color:lavender;"><button type="submit" class="btn btn-primary">ELIMINAR</button></form></div><div class="col" style="background-color:lavenderblush;">.</div>
			</div>
		</div>		
		<?php
		}
	}	
}

?>