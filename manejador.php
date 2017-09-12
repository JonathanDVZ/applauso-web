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

        case "login":
            $ruta = "login.php";
            break;

        case "form":
            $ruta = "form.php";
            break;

        case "join":
            $ruta = "join.php";
            break;

        case "reg_restaurant":
            $ruta = "form_restaurant.php";
            break;

        case "deta_restaurant":
            $ruta = "deta_restaurant.php";
            break;

        case "opciones":
            $ruta = "opciones.php";
            break;

        case "eventos":
            $ruta = "eventos.php";
            break;

        case "soluciones":
            $ruta = "soluciones.php";
            break;

        default:
           echo "<script> location.href='?op=inicio'; </script>";
	}

?>
