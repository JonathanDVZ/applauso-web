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

		case "inicio":
			$ruta = "inicio.php";
			break;

		case "perfil":
			$ruta = "perfil.php";
			break;

		case "deta_restaurant":
			$ruta = "deta_restaurant.php";
			break;

		case "detalles":
			$ruta = "detalles.php";
			break;

		case "menu":
			$ruta = "menu.php";
			break;

		case "lugar":
			$ruta = "lugar.php";
			break;

		case "promocion":
			$ruta = "promocion.php";
			break;

		case "publicidad":
			$ruta = "publicidad.php";
			break;

		case "forma_pago":
			$ruta = "forma_pago.php";
			break;

		case "menu_publicado":
			$ruta = "menu_publicado.php";
			break;

		case "servicio_cliente":
			$ruta = "servicio_cliente.php";
			break;

		case "reportes":
			$ruta = "reportes.php";
			break;

		case "configuracion":
			$ruta = "configuracion.php";
			break;

		default:
			$ruta = "inicio.php";
	}
?>
