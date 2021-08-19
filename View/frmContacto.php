<!DOCTYPE html>
<html>
<head>
	<title>Edicion de Cliente</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="../CSS/style.css">
  	<link rel="stylesheet" href="../CSS/estilos.css">
    <link rel="stylesheet" href="../CSS/fonts.css">
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
	<div class="container">
		<h2 style="color:white">Contacto</h2>
			<form action="frmIndex.php" method="post">
				<div class="form-group">
					<label for="txtNombre" style="color:white">Nombre y apellido del cliente</label>
					<select name="txtNombre"class="form-control">
					<option>-- SELECCIONAR OPCION  --</option>
				<?php  
				include '../Model/cConexion.php';
				if (!$vlConexion) {
					die ("<h3> Error en la conexion con la base de datos </h3>");
				} else {
					$vlQuerySelect = "SELECT ID_Cliente,concat(Nombres,' ',Apellidos) as Nombre from cliente;";
					$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
					if (mysqli_num_rows($vlEjecucion)>0) {
						while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
						//Aca ira el codigo de la matriz de resultados
				?>	
				<option value="<?php echo $vlRegistro['ID_Cliente']; ?>"><?php echo $vlRegistro['Nombre']; ?></option><?php
						}
					}	
				}
				?>		
				<select/>	
				</div>
				<div class="form-group">
					<label for="txtDireccion" style="color:white">Direccion</label>
					<input type="text" class="form-control" id="txtDireccion" name="txtDireccion">
				</div>

				<div class="form-group">
					<label for="txtCorreo" style="color:white">Correo</label>
					<input type="email" class="form-control" id="txtCorreo" name="txtCorreo">
				</div>
				<div class="form-group">
					<label for="txtTelefono" style="color:white">Telefono</label>
					<input type="text" class="form-control" id="txtTelefono" name="txtTelefono">
				</div>
				<div class="form-group">
    <label for="exampleFormControlTextarea1" style="color:white">Mensaje</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	  </div>
			<form action="frmIndex.php">
					<div>
						<button class="Piero" type="submit"><span class="Piero2"></span>Enviar</button>
					</div>
			</form>
		</div>
	<br>									
</body>
    <footer>
          <div class="text-center p-4" style="background-color: rgb(127, 255, 212);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">GRUPO 10</a>
          </div>
    </footer>
</html>