<?php 

// Variable
$nombre = 'Carlos Arturo1';

// Mostramos en pantalla mediante echo
echo 'Hola Mundo, mi nombre es:132 ' . $nombre ;

// phpinfo();

?>

<!-- Parte II -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina web de Carlos</title>
</head>
<body>
	<h1>Pagina web de Carlos</h1>
	<h3><?php echo 'Hola ' . $nombre ?></h3>
	<a href="/login">login</a>
</body>
</html>