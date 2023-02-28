<?php

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
</head>
<body>
	<h1>El nombre es  <?php echo "$nombre"?> </h1>
	<h1>El apellido es <?php echo "$apellido"?> </h1>
	<form action="guardar.php" method="POST">
	<input type="text" name="nombre" size="40" value="<?php echo "$nombre"?>">
	<input type="text" name="apellido" size="40" value="<?php echo "$apellido"?>">
	<input type="submit" name="aceptar" value="Guardar">
	</form>
</body>
</html>
