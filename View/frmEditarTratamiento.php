<!DOCTYPE html>
<html>
<head>
	<title>Edicion de Productos</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="../CSS/style.css">
  	<link rel="stylesheet" href="../CSS/botones.css">
</head>
<body>
	<form method="POST" action="../Controller/ActualizarTratamiento.php">
	<div class="container">
		<h2>ACTUALIZACION DE TRATAMIENTO</h2>
<?php 
$ids= $_POST['txtId'];
include '../Model/cConexion.php';
if (!$vlConexion) {
	die ("<h3> Error en la conexion con la base de datos </h3>");
} else {
	$vlQuerySelect = "select * from Tratamiento where ID_Tratamiento=".$ids."";
	$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
	if (mysqli_num_rows($vlEjecucion)>0) {
		while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
			?>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtCod" name="txtCod" placeholder="<?php echo $vlRegistro['ID_Tratamiento']; ?>" value="<?php echo $vlRegistro['ID_Tratamiento'];?>">
				</div>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtMedicacion" name="txtMedicacion" placeholder="<?php echo $vlRegistro['ID_Medicacion']; ?>">
				</div>
				<div class="form-group">
					<label for="txtTratamiento" style="color:white;">Tratamiento</label>
					<input type="text" class="form-control" id="txtTratamiento" name="txtTratamiento" value="<?php echo $vlRegistro['Tratamiento']; ?>">
				</div>
				<div class="form-group">
					<label for="txtPrecio" style="color:white;">Precio</label>
					<input type="text" class="form-control" id="txtPrecio" name="txtPrecio" value="<?php echo $vlRegistro['Precio']; ?>">
				</div>
				<div>
					<button type="submit" class="Piero"><span class="Piero2"></span>ACTUALIZAR REGISTRO</button>
				</div>
			</div>				
			<?php
		}
	}
}
?>
</form>
</body>
</html>