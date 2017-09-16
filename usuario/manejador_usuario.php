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

		default:
			$ruta = "admin.php";
	}
?>
