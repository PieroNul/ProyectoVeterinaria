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
<body>
	<div class="container">
		<h2 style="color:white">VISITAS DE FECHA DEL MES</h2>
			<div class="form-group">
				<form method="POST" action="frmFechaPorFecha.php">
						<input type="hidden" class="form-control" id="txtNombre" name="txtNombre" value="01/01/2021">
				</form>
				<br/>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-2" style="background-color:lavender;">VISITA</div>
						<div class="col-sm-2" style="background-color:lavenderblush;">MASCOTA</div>
						<div class="col-sm-2" style="background-color:lavender;">DOCTOR</div>
						<div class="col-sm-2" style="background-color:lavenderblush;">TRATAMIENTO</div>
						<div class="col-sm-2" style="background-color:lavender;">TIPO VISITA</div>
						<div class="col-sm-2" style="background-color:lavenderblush;">FECHA</div>
		<?php
		$date='';
		include '../Model/cConexion.php';		
		if (!$vlConexion) {
			die ("<h3> Error en la conexion con la base de datos </h3>");
		} else { 	$now = new DateTime($date);
    					$hoy=$now->format('Y-m-d');
			$vlQuerySelect = "SELECT V.ID_Visita,M.NombreMascota,D.nombre as Doctor,T.Tratamiento,V.TipoDeVisita,V.FechaVisita FROM Visitas V
INNER JOIN Tratamiento T ON V.ID_Tratamiento=T.ID_Tratamiento 
INNER JOIN Doctor D ON V.ID_Doctor=D.ID_Doctor
INNER JOIN Mascota_Cliente M ON V.ID_MascotaCliente=M.ID_MascotaCliente
WHERE Estado = 1 and FechaVisita between '2021/07/01' and '".$hoy."';";
			$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
			if (mysqli_num_rows($vlEjecucion)>0) {
				while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
				//Aca ira el codigo de la matriz de resultados
				?>
						<div class="col-sm-2" style="background-color:lavender;"><?php echo $vlRegistro['ID_Visita']; ?></div>
						<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $vlRegistro['NombreMascota']; ?></div>
						<div class="col-sm-2" style="background-color:lavender;"><?php echo $vlRegistro['Doctor']; ?></div>
						<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $vlRegistro['Tratamiento']; ?></div>
						<div class="col-sm-2" style="background-color:lavender;"><?php echo $vlRegistro['TipoDeVisita']; ?></div>
						<div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $vlRegistro['FechaVisita']; ?></div>		
				<?php
				}
			}	
		}

		?>
					</div>
				</div>
			</div>
		</div>		
</body>
</html>