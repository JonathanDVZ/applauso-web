<?php
/*
	include_once('cms/vista/modelo/Orm.php');
	 session_start();
	if(isset($_SESSION['id_usuario'])){
	  
		$rlog=$orm->consultaPersonalizada("SELECT * FROM usuarios WHERE id_usuario='".$_SESSION['id_usuario']."'; ");
		$flog=$rlog->fetch_array();
	
**/
	$op = $_GET['op'];
	switch($op){

		case "home":
			$ruta = "home.php";
			break;

		case "perfil":
			$ruta = "perfil.php";
			break;

		case "informacion":
			$ruta = "informacion.php";
			break;

		case "ticket":
			$ruta = "ticket.php";
			break;

		case "lugar":
			$ruta = "lugar.php";
			break;

		case "detalles":
			$ruta = "detalles.php";
			break;

		case "publicidad":
			$ruta = "publicidad.php";
			break;

		case "mapa":
			$ruta = "mapa.php";
			break;

		case "terminos":
			$ruta = "terminos.php";
			break;

		case "eventos_publicados":
			$ruta = "eventos_publicados.php";
			break;

		case "eventos_nopublicados":
			$ruta = "eventos_nopublicados.php";
			break;

		case "servicio_cliente":
			$ruta = "servicio_cliente.php";
			break;

		case "reportes":
			$ruta = "reportes.php";
			break;

		default:
			$ruta = "admin.php";
	}
?>
