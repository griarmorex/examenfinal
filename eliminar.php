<?php 
	include('inc/conexion.php');

	$sql="DELETE FROM personas WHERE persona_id={$_GET['id']} ";
	//."paterno='{$_POST['txt-paterno']}', "
	//."materno='{$_POST['txt-materno']}', "
	//."nombres='{$_POST['txt-nombres']}' "
	//."WHERE persona_id={$_POST['txt-id']}";
	echo $sql;
	$resultado=$conexion->query($sql);
	if($resultado){
	header("Location:listar.php");
	}else{
	//	header("Location:nuevo.php");
	}
 
 ?>