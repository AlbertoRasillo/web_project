<?php 
/**
* 
*/
class directorio
{
	public $nombreDir;
	public $descripcionDir;	
	public function __construct($nombreDir, $descripcionDir)
	{
		$this->nombreDir = $nombreDir;
		$this->descripcionDir = $descripcionDir; 
	}
	public function setNombreDir($nombreDir){
		$this->nombreDir = $nombreDir;
	}
	public function setDescripcionDir($descripcionDir){
		$this->descripcionDir = $descripcionDir;
	}
	public function getNombreDir(){
		return $this->nombreDir;
	}
	public function crearDirectorio($nombreDir){
		//mkdir(PATH.$nombreDir,0777);
		$gestorDir = fopen(PATH."user.txt", w);
		fwrite($gestorDir, $nombreDir);
	}
	public function modificarDirectorio($newNombre){
		$oldNombre = $this->getNombreDir();
		rename (PATH.$oldNombre,PATH.$newNombre);
	}
	public function eliminarDirectorio(){
		$nombreDir = $this->getNombreDir();
		rmdir(PATH.$nombreDir);
	}

}
 ?>