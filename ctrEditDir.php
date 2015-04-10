<?php 
	//include_once "lib/libDir.php";
	include_once "directorio.class.php";
	define("PATH", "app/");
	$nombreDir = $_GET['nombreDir'];
	$oldNombre = $_GET['oldNombre'];
	$descripcionDir = $_GET['descripcionDir'];
	//Validar datos
	$error = 0;
	if ($nombreDir == "") {
		$error = 1;
	}
	if($descripcionDir == ""){
		$error = 1;
	}
	if($error ==1){
		header("Location:ficha_carpeta.php");
		echo"Complete los campos correctamente";
	}
	$dir = new directorio($oldNombre,$descripcionDir);
	/*Logica de negocio*/
	$dir->modificarDirectorio($nombreDir);
	if($error == 0){
		header('Location:index.php');
	}
 ?>