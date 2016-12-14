<?php 
	 $conexion=new mysqli("mysql.hostinger.es","u859834616_exa","rootroot",'u859834616_exa');
	 if ($conexion->connect_errno){
	 	echo "Error al conectar ala BB DD:".
	 		$conexion->connect_errno.",".
	 		$conexion->connect_error;
	 	exit();
	 }else{
	 	$conexion->set_charset("utf8");
	 }
	 ?>
