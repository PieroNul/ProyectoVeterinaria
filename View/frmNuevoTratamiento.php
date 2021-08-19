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
  	<link rel="stylesheet" href="../CSS/botones.css">
</head>
<body>
	<div class="container">
		<h2>AGREGAR TRATAMIENTO</h2>
			<form action="../Controller/CrearTratamiento.php" method="post">
				<div class="form-group">
					<label for="txtNombre" style="color:white;">Medicacion</label>
				<?php include '../Model/cConexion.php'; if (!$vlConexion) {die ("<h3> Error en la conexion con la base de datos </h3>");} else {$vlQuerySelect = "SELECT  ID_Medicacion,Medicacion FROM Medicacion order by ID_Medicacion desc LIMIT 1;";$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect); if (mysqli_num_rows($vlEjecucion)>0) { while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){?><input type="hidden" name="txtId" value=<?php echo $vlRegistro['ID_Medicacion']; ?>><input disabled="" type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $vlRegistro['Medicacion']; ?>"><?php }}} ?>	
				</div>
				<div class="form-group">
					<label for="txtTratamiento" style="color:white;">Tratamiento</label>
					<input type="text" class="form-control" id="txtTratamiento" name="txtTratamiento">
				</div>
				<div class="form-group">
					<label for="txtPrecio" style="color:white;">Precio</label>
					<input type="text" class="form-control" id="txtPrecio" name="txtPrecio">
				</div>
				<div>
					<button type="submit" class="Piero"><span class="Piero2"></span>REGISTRAR TRATAMIENTO</button>
				</div>
			</form>
	</div>						
</body>
</html>