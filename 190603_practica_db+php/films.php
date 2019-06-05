<?php
require_once 'concec.php';

try {
	$resultado_generos = $base->query("SELECT * from genres"); //corre la consulta y me devuelve un resultado dentro de un objeto hijo pdo
	$resultado_movies = $base->query("SELECT * from movies"); //corre la consulta y me devuelve un resultado dentro de un objeto hijo pdo

	//equivalente a la línea de arriba pero usando statements
	// $resultado = $base->prepare("SELECT * from autores");
	// $resultado->execute();

} catch(PDOException $error) {

	$mensaje = $error->getMessage(); //string descriptiva del error
	$codigo = $error->getCode(); //codigo tipificado del error

	echo("Ocurrió un error con una consulta en la base de datos");
	die(); //lo mismo que exit()
}

$posPeli = $base->query("SELECT genres_id FROM movies WHERE id = 5");


$genres = $resultado_generos->fetchAll(PDO::FETCH_ASSOC); //me convierte el "resultado pdo" en un array de arrays asociativos de php
$movies = $resultado_movies->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Pelis con Genénero</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			font-family: monospace;
			font-size:15px;
			background-color: black;
		}

		h1 {
			text-shadow: 2px 2px 2px grey;
			color: #00DE25
		}

		article {
			margin:0 10px;
			margin-bottom:20px;
			display: inline-block;
			vertical-align:top;
			width:28%;
			padding:10px;
			background-color:#050505;
			border-radius: 3px;
			color: #00DE25;
		}

		div {
			margin-bottom:5px;
		}

	</style>
</head>
<body>
	<h1>Generos</h1>
	<!-- <div>
		<a href="genres.php">Traer todos los generos de las películas</a>
	</div> -->
	<?php foreach($movies as $movie) { ?>
		<article>
			<div>
				<label>Película:</label> <strong><?php echo $movie['title'] ?></strong>
			</div>
			<div>
				<label>Genero:</label> <strong><?php echo $genres[($movie['genre_id'])] ?></strong>
			</div>
		</article>
	<?php } ?>

	<article>
		<div>
			<label>Película:</label> <strong><?php echo $movie[5] ?></strong>
		</div>
		<div>
			<label>Genero:</label> <strong><?php echo $posPeli ?></strong>
		</div>
	</article>

</body>
</html>
