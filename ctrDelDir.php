<?php 
	//include_once "lib/libDir.php";
	include_once "directorio.class.php";
	define("PATH", "app/");
	$nombreDir = $_GET['nombreDir'];
	$descripcionDir = $_GET['descripcionDir'];
	//Validar datos
	$error = 0;
	if($error ==1){
		header("Location:index.php");
		echo"Complete los campos correctamente";
	}
	$dir = new directorio($nombreDir,$descripcionDir);
	/*Logica de negocio*/
	$dir->eliminarDirectorio();
	if($error == 0){
		header('Location:index.php');
	}
 ?>