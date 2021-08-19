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
		<h2>AGREGAR ESPECIE</h2>
			<form action="../Controller/CrearEspecie.php" method="post">
				<div class="form-group">
					<label for="txtNombre" style="color:white;">Nombre de la Especie</label>
					<input type="text" class="form-control" id="txtNombre" name="txtNombre">
				</div>
				<div>
					<button type="submit" class="Piero"><span class="Piero2"></span>REGISTRAR ESPECIE</button>
					<li class="Piero4"><a class="Piero3" href="frmMantenimientoAnimal.php">VOLVER</a></li>
				</div>
			</form>
	</div>						
</body>
</html>