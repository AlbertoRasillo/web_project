<?php 
	$default_dir = "../app/";
	$dir = dir($default_dir);
	while($file = $dir->read())
		if($file != '.' && $file != '..')
			echo $file
	$dir->close();
 ?>