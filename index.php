<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/index.css">
	<title>Dropbox</title>
</head>
<body>
	<div id="contenedor">
	<header id="cabecera_pri">
		<nav id="menu_pri">

		</nav>
	</header>
		<section id="seccion_pri">
			<article>
	 <table id="tablon">
	 	<tr>
	 		<th>Fecha</th>
	 		<th>Nombre Carpeta</th>
	 		<th>Descripción</th>
	 	</tr>
	 	<form action="" mehod="GET">
	 		Carpeta: <input type="text" name="criterio" />
	 		<input type="submit" value="Buscar"/>
	 	</form>
		<a href="ficha_carpeta.php"><img id="anadir" src="img/anadir.png" alt="add">Añadir carpeta</a>
		<?php
		$default_dir = "app/"; 			
		$dir = dir($default_dir);		
		while($file = $dir->read())
			if($file != '.' && $file != '..')
			echo"<tr>
			 	<td>$file</td>
			 	<td>$file</td>
			 	<td><a href=ficha_carpeta.php?nombre=$file>ver </a>/<a href='ctrDelDir.php?nombreDir=$file'> Eliminar</a></td>
				</tr>";
		$dir->close(); ?>
			<!--Fila utilizada en el caso de realizar una busqueda
			<tr>
			 	<td></td>
			 	<td></td>
			 	<td></td>	
			</tr>
			-->
	 </table>
			</article>
		</section>
	<aside id="menu_col">
		
	</aside>
	<footer id="pie"></footer>
</div>
</body>
</html>