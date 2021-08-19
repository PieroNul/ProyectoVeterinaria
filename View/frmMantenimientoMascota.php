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
			<div class="col-sm-1" style="background-color:lavender;">IDMASCOTA</div>
			<div class="col-sm-2" style="background-color:lavenderblush;">DUEÑO</div>
			<div class="col-sm-2" style="background-color:lavender;">NOMBRE</div>
			<div class="col-sm-1" style="background-color:lavenderblush;">TIPO</div>
			<div class="col-sm-1" style="background-color:lavender;">RAZA</div>
			<div class="col-sm-1" style="background-color:lavenderblush;">SEXO</div>
			<div class="col-sm-1" style="background-color:lavender;">COLOR</div>
			<div class="col-sm-1" style="background-color:lavenderblush;">PESO</div>
			<div class="col-sm-1" style="background-color:lavender;">EDITAR</div>
			<div class="text-center" style="background-color:lavenderblush;">VISITA</div>
		</div>	
	</div>
</body>
</html>
<?php  
include '../Model/cConexion.php';
if (!$vlConexion) {
	die ("<h3> Error en la conexion con la base de datos </h3>");
} else {
	$vlQuerySelect = "SELECT M.ID_MascotaCliente,C.Nombres AS Dueño,M.NombreMascota,T.Tipo,R.raza,M.Sexo,M.Color,M.peso FROM Mascota_Cliente M INNER JOIN Cliente C ON M.ID_Cliente=C.ID_Cliente INNER JOIN TipoMascota T ON M.ID_TipoMacota=T.ID_TipoMacota INNER JOIN Raza R on M.ID_Raza = R.ID_Raza;";
	$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
	if (mysqli_num_rows($vlEjecucion)>0) {
		while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
		//Aca ira el codigo de la matriz de resultados
		?>
		<div class="container-fluid">
			<div class="row">
				<form method="POST" action="frmEditarMascota.php">
				<div class="col-sm-1" style="background-color:lavender;"><?php echo $vlRegistro['ID_MascotaCliente']; ?></div>
				<input type="hidden" name="txtId" value=<?php echo $vlRegistro['ID_MascotaCliente']; ?>>
				<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $vlRegistro['Dueño']; ?></div>
				<div class="col-sm-2" style="background-color:lavender;"><?php echo $vlRegistro['NombreMascota']; ?></div>
                <div class="col-sm-1" style="background-color:lavenderblush;"><?php echo $vlRegistro['Tipo']; ?></div>
                <div class="col-sm-1" style="background-color:lavender;"><?php echo $vlRegistro['raza']; ?></div>
                <div class="col-sm-1" style="background-color:lavenderblush;"><?php echo $vlRegistro['Sexo']; ?></div>
                <div class="col-sm-1" style="background-color:lavender;"><?php echo $vlRegistro['Color']; ?></div>
                <div class="col-sm-1" style="background-color:lavenderblush;"><?php echo $vlRegistro['peso']; ?></div>
                <div class="col-sm-1" style="background-color:lavender;"><button type="submit" class="btn btn-primary">EDITAR</button></div>
                </form>
		        <form method="POST" action="frmNuevaVisita.php">
		        	<input type="hidden" name="txtId" value=<?php echo $vlRegistro['ID_MascotaCliente']; ?>>
		        	<input type="hidden" name="txtNom" value="<?php echo $vlRegistro['NombreMascota']; ?>">
					<div class="text-center" style="background-color:lavenderblush;"><button type="submit" class="btn btn-primary">CREAR</button></div><div class="col" style="background-color:lavenderblush;">.</div>
				</form>	
			</div>
		</div>		
		<?php
		}
	}	
}

?>