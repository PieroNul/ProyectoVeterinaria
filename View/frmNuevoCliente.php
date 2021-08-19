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
		<h2 style="color:white;">AGREGAR CLIENTE</h2>
			<form action="../Controller/CrearCliente.php" method="post">
				<div class="form-group">
					<label for="txtNombre" style="color:white;">Nombre del Cliente</label>
					<input type="text" class="form-control" id="txtNombre" name="txtNombre">
				</div>
				<div class="form-group">
					<label for="txtApellidos" style="color:white;">Apellidos del Cliente</label>
					<input type="text" class="form-control" id="txtApellidos" name="txtApellidos">
				</div>
				<div class="form-group">
					<label for="txtDireccion" style="color:white;">Direccion</label>
					<input type="text" class="form-control" id="txtDireccion" name="txtDireccion">
				</div>
				<div class="form-group">
					<label for="txtCiudad" style="color:white;">Ciudad</label>
					<input type="text" class="form-control" id="txtCiudad" name="txtCiudad">
				</div>
				<div class="form-group">
					<label for="txtCodigoPostal" style="color:white;">Codigo Postal</label>
					<input type="text" class="form-control" id="txtCodigoPostal" name="txtCodigoPostal">
				</div>
				<div class="form-group">
					<label for="txtTelefono" style="color:white;">Telefono</label>
					<input type="text" class="form-control" id="txtTelefono" name="txtTelefono">
				</div>
				<div class="content">
					<button type="submit" class="Piero"><span class="Piero2"></span>REGISTRAR MASCOTA</button>
					<li class="Piero4"><a class="Piero3" href="frmMantenimientoCliente.php">VOLVER</a></li>
				</div>
	</div>						
</body>
</html>