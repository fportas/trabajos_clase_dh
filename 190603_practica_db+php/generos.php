<?php
require_once 'concec.php';

try {
	$resultado = $base->query("SELECT * from genres"); //corre la consulta y me devuelve un resultado dentro de un objeto hijo pdo

	//equivalente a la línea de arriba pero usando statements
	// $resultado = $base->prepare("SELECT * from autores");
	// $resultado->execute();

} catch(PDOException $error) {
	$mensaje = $error->getMessage(); //string descriptiva del error
	$codigo = $error->getCode(); //codigo tipificado del error

	echo("Ocurrió un error con una consulta en la base de datos");
	die(); //lo mismo que exit()
}


$genres = $resultado->fetchAll(PDO::FETCH_ASSOC); //me convierte el "resultado pdo" en un array de arrays asociativos de php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema biblioteca - Autores</title>
	<meta charset="utf-8">
	<style type="text/css">
		body { font-family: sans-serif; font-size:15px; }
		article { margin:0 10px; margin-bottom:20px; display:inline-block; vertical-align:top; width:20%; padding:10px; background-color:#eee; }
		div { margin-bottom:5px; }
	</style>
</head>
<body>
	<h1>Generos</h1>
	<div>
		<a href="genres.php">Traer todos los generos de las películas</a>
	</div>
	<?php foreach($genres as $genre) { ?>
		<article>
			<div>
				<label>Genero:</label> <strong><?php echo $genre['name'] ?></strong>
			</div>
		</article>
	<?php } ?>
</body>
</html>
