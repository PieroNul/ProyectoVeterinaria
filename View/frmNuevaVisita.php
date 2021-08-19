<!DOCTYPE html>
<html>
<head>
	<title>Edicion de Visita</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="../CSS/style.css">
  	<link rel="stylesheet" href="../CSS/botones.css">
</head>
<body>
	<div class="container">
		<h2>AGREGAR VISITA</h2>
			<form action="../Controller/CrearVisita.php" method="post">
				<div class="form-group">
					<label for="txtNombre" style="color:white;">Nombre de la Mascota</label>
					<input type="hidden" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $ss=$_POST['txtId'];?>">
					<input disabled="" type="text" class="form-control" id="txtNombre1" name="txtNombre1" value="<?php echo $s=$_POST['txtNom'];?>">
				</div>
				<div class="form-group">
					<label for="txtDoctor" style="color:white;">Nombre del Doctor</label>
					<select name="txtDoctor"class="form-control">
					<option>-- SELECCIONAR OPCION  --</option>
				<?php include '../Model/cConexion.php';
				if (!$vlConexion) {
					die ("<h3> Error en la conexion con la base de datos </h3>");
				} else {
					$vlQuerySelect = "SELECT * FROM Doctor;";$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
					if (mysqli_num_rows($vlEjecucion)>0) {
						while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
				?>	
				<option value="<?php echo $vlRegistro['ID_Doctor']; ?>"><?php echo $vlRegistro['nombre']; ?></option><?php
						}
					}	
				}
				?>	
				<select/>					
				</div>
				<div class="form-group">
					<label for="txtTratamiento" style="color:white;">Tratamiento</label>
					<select id="txtTratamiento" name="txtTratamiento"class="form-control">
					<option value="0"> -- SELECCIONAR OPCION  --</option>
				<?php include '../Model/cConexion.php';
				if (!$vlConexion) {
					die ("<h3> Error en la conexion con la base de datos </h3>");
				} else {
					$vlQuerySelect = "SELECT * FROM tratamiento;";$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
					if (mysqli_num_rows($vlEjecucion)>0) {
						while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
				?>	
					<option value="<?php echo $vlRegistro['ID_Tratamiento']; ?>"><?php echo $vlRegistro['Tratamiento']; ?></option><?php
						}
					}	
				}
				?>
				<select/>	
				</div>
				<div class="form-group">
					<label for="txtTipo" style="color:white;">Tipo Visita</label>
					<select name="txtTipo"class="form-control">
						<option>-- SELECCIONAR OPCION  --</option>
						<option>ANUAL</option>
						<option>MENSUAL</option>
						<option>SEMANAL</option>
						<option>EMERGENCIA</option>					
					<select/>
				</div>
				<div class="form-group">
					<label for="txtTotal" style="color:white;">Total</label>
				<?php include '../Model/cConexion.php';
				if (!$vlConexion) {
					die ("<h3> Error en la conexion con la base de datos </h3>");
				} else {
					$vlQuerySelect = "SELECT ID_Tratamiento,SUM(Precio) total FROM (SELECT ID_Tratamiento, Precio FROM tratamiento UNION ALL SELECT ID_Medicacion, Precio FROM medicacion ) T where ID_Tratamiento =1 GROUP BY ID_Tratamiento;";$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
					if (mysqli_num_rows($vlEjecucion)>0) {
						while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
				?>
					<input type="text" class="form-control" name="txtTotal" value="<?php echo $vlRegistro['total']; ?>"><?php
						} } } ?>
				</div>
				<div class="form-group">
					<label for="txtPago" style="color:white;">Forma de Pago</label>
					<select name="txtPago"class="form-control">
					<option>-- SELECCIONAR OPCION  --</option>
					<option>EFECTIVO</option>
					<option>YAPE</option>
					<option>TARJETA</option>
					<select/>
				</div>
				<div>
					<button type="submit" class="Piero"><span class="Piero2"></span>REGISTRAR VISITA</button>
					<li class="Piero4"><a class="Piero3" href="frmMantenimientoMascota.php">VOLVER</a></li>
				</div>
			</form>
	</div>						
</body>
</html>