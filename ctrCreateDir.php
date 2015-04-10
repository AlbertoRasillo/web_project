<?php 
	//include_once "lib/libDir.php";
	include_once "directorio.class.php";
	define("PATH", "app/");
	$nombreDir = $_POST['nombreDir'];
	$descripcionDir = $_POST['descripcionDir'];
	//Validar datos
	$error = 0;
	if ($nombreDir == "") {
		$error = 1;
	}
	if($descripcionDir == ""){
		$error = 1;
	}
	if($error ==1){
		header("Location:ficha_carpeta.html");
		echo"Complete los campos correctamente";
	}
	$dir = new directorio($nombreDir,$descripcionDir);
	/*Logica de negocio*/
	$dir->crearDirectorio($nombreDir);
	if($error == 0){
		header('Location:index.php');
	}
 ?>