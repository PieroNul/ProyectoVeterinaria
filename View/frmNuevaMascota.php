<!DOCTYPE html>
<html>
<head>
	<title>Edicion de Mascota</title>
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
		<h2>AGREGAR MASCOTA</h2>
			<form action="../Controller/CrearMascota.php" method="post">
				<div class="form-group">
					<label for="txtNombre" style="color:white;">Nombre del Dueño</label>
				<?php include '../Model/cConexion.php'; if (!$vlConexion) {die ("<h3> Error en la conexion con la base de datos </h3>");} else {$vlQuerySelect = "SELECT  ID_Cliente,Nombres FROM Cliente order by ID_Cliente desc LIMIT 1;";$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect); if (mysqli_num_rows($vlEjecucion)>0) { while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){?><input type="hidden" name="txtId" value=<?php echo $vlRegistro['ID_Cliente']; ?>><input disabled="" type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $vlRegistro['Nombres']; ?>"><?php }}} ?>						
				</div>
				<div class="form-group">
					<label for="txtNombreM" style="color:white;">Nombre de la Mascota</label>
					<input type="text" class="form-control" id="txtNombreM" name="txtNombreM">
				</div>			
				<div class="form-group">
					<label for="txtTipo" style="color:white;">Tipo Mascota</label>	
					<select name="txtTipo"class="form-control">
					<option>-- SELECCIONAR OPCION  --</option>
				<?php  
				include '../Model/cConexion.php';
				if (!$vlConexion) {
					die ("<h3> Error en la conexion con la base de datos </h3>");
				} else {
					$vlQuerySelect = "SELECT * FROM TipoMascota;";
					$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
					if (mysqli_num_rows($vlEjecucion)>0) {
						while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
						//Aca ira el codigo de la matriz de resultados
				?>	
				<option value="<?php echo $vlRegistro['ID_TipoMacota']; ?>"><?php echo $vlRegistro['Tipo']; ?></option><?php
						}
					}	
				}
				?>		
				<select/>
				</div>		
				<div class="form-group">
					<label for="txtRaza" style="color:white;">Raza</label>
					<input type="text" class="form-control" id="txtRaza" name="txtRaza">
				</div>
				<div class="form-group">
					<label for="txtfechaNac" style="color:white;">Fecha de nacimiento</label>
					<input type="date" class="form-control" id="txtfechaNac" name="txtfechaNac">
				</div>
				<div class="form-group">
					<label for="txtSexo" style="color:white;">Sexo</label>
					<select name="txtSexo"class="form-control">
						<option>-- SELECCIONAR OPCION  --</option>
						<option>MACHO</option>
						<option>HEMBRA</option>					
					<select/>
				</div>
				<div class="form-group">
					<label for="txtColor" style="color:white;">Color</label>
					<input type="text" class="form-control" id="txtColor" name="txtColor">
				</div>
				<div class="form-group">
					<label for="txtEsterilizado" style="color:white;">Esterilizado</label>
					<select name="txtEsterilizado"class="form-control">
						<option>-- SELECCIONAR OPCION  --</option>
						<option>Si</option>
						<option>No</option>					
					<select/>
				</div>
				<div class="form-group">
					<label for="txtLongitud" style="color:white;">Longitud</label>
					<input type="text" class="form-control" id="txtLongitud" name="txtLongitud" value="00 cm">
				</div>
				<div class="form-group">
					<label for="txtPeso" style="color:white;">Peso</label>
					<input type="text" class="form-control" id="txtPeso" name="txtPeso" value="00 kg">
				</div>
				<div class="form-group">
					<label for="txtVacunas" style="color:white;">Vacunas</label>
					<select name="txtVacunas"class="form-control">
						<option>-- SELECCIONAR OPCION  --</option>
						<option>Si</option>
						<option>No</option>					
					<select/>
				</div>
				<div>
					<button type="submit" class="Piero"><span class="Piero2"></span>CREAR REGISTRO</button>
				</div>
			</form>
		</div>		
</body>
</html>