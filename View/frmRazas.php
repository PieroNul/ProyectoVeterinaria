<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RAZAS</title>
	<link rel="stylesheet" href="../CSS/estilos2.css">
	<link rel="stylesheet" href="../CSS/estilos.css">
    <link rel="stylesheet" href="../CSS/fonts.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/botones.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<div class="banner">
		<div class="container">
			<div class="card">
			<form action="frmListadoRazas.php" method="post">
				<img src="../img/perros.png">
				<h4 style="color: white;">PERROS</h4>
				<input type="hidden" class="form-control" id="txtNombre" name="txtNombre" value="1">
				<button class="Piero"><span class="Piero2"></span>VER RAZAS</button>
			</form>
			</div>
			<div class="card">
			<form action="frmListadoRazas.php" method="post">
				<img src="../img/gatos.jpg">
				<h4 style="color: white;">GATOS</h4>
				<input type="hidden" class="form-control" id="txtNombre" name="txtNombre" value="2">
				<button class="Piero"><span class="Piero2"></span>VER RAZAS</button>
			</form>
			</div>
			<div class="card">
			<form action="frmListadoRazas.php" method="post">
				<img src="../img/conejos.jpg">
				<h4 style="color: white;">CONEJOS</h4>
				<input type="hidden" class="form-control" id="txtNombre" name="txtNombre" value="3">
				<button class="Piero"><span class="Piero2"></span>VER RAZAS</button>
			</form>
			</div>
			<div class="card">
			<form action="frmListadoRazas.php" method="post">
				<img src="../img/aves.jpg">
				<h4 style="color: white;">AVES</h4>
				<input type="hidden" class="form-control" id="txtNombre" name="txtNombre" value="4">
				<button class="Piero"><span class="Piero2"></span>VER RAZAS</button>
			</form>
			</div>
			<div class="card">
			<form action="frmListadoRazas.php" method="post">
				<img src="../img/tortuga.jpg">
				<h4 style="color: white;">TORTUGAS</h4>
				<input type="hidden" class="form-control" id="txtNombre" name="txtNombre" value="5">
				<button class="Piero"><span class="Piero2"></span>VER RAZAS</button>
			</form>
			</div>
		</div>
	</div>
	</form>
</body>
</html>