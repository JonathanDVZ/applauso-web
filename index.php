<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
	include_once('manejador.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta name="description" content="Applauso">
	<meta name="keywords" content="An exceptional delivery service for exceptional restaurants.">
	<link rel="icon" type="image/x-icon" href="logo.ico"/>
	<title>APPLAUSO</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
	<?php
		include_once($ruta);
	?>

	<footer>
		<div class="row row_right">
			<div class="container">
				<div class="col-sm-4 col-xs-12 textos">
					<h5>Ayuda</h5>
					<h5>Sobre nosotros</h5>
					<h5>Blog</h5>
					<h5>Prensa</h5>
					<h5>Trabajo</h5>
					<h5>Contactos</h5>
					<h5>Términos</h5>
				</div>
				<div class="col-sm-4 col-xs-12 descargas">
					<h5>Puedes descargarlo</h5>
					<a href=""><img src="img/app.png" width="70%"  style="margin-bottom: 1em;"></a>
					<a href=""><img src="img/play.png" width="70%"></a>
				</div>
				<div class="col-sm-4 col-xs-12 article">
					<img src="img/select1.png">
					<img src="img/select3.png">
					<!--
					<select class="form-control" name="">
						<option>Eventos</option>
					</select>
					<select class="form-control" name="">
						<option>Restaurantes</option>
					</select>
					<select class="form-control" name="">
						<option>Aliados</option>
					</select>
					-->
				</div>
				<div class="col-sm-12 col-xs-12">
					<a href=""><img src="img/facebook.png" style="width: 50px;padding-right: 1em;"></a>
					<a href=""><img src="img/twitter.png" style="width: 50px;padding-right: 1em;"></a>
					<a href=""><img src="img/instagram.png" style="width: 50px;padding-right: 1em;"></a>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>