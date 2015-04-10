<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/ficha.css">
	<title></title>
</head>
<body>
<div id="contenedor">
	<header id="cabecera_pri">
	<nav id="menu_pri">

	</nav>
	</header>
		<section id="seccion_pri">
			<article>
	 <h3 align="center">Formulario crear carpeta</h3>
	 <?php 
	 	if($_GET){
			$nombre = $_GET['nombre'];
			echo "<form action='ctrEditDir.php' method='get'>";
		}
	  	else{
	 		echo "<form action='ctrCreateDir.php' method='post'>";
		}
	 ?>
		 <table align="center" border="0">
		 	<tr><td>Nombre Carpeta: </td></tr>
		 	<tr><?php  
		 		if(!$_GET){
		 		echo "<td align='right'><input type='text' name='nombreDir' size='52'/></td><br />";
		 		}
		 		if($_GET){ 
		 		echo"<td align='right'><input type='text' name='nombreDir' size='52' value='$nombre' /></td><br />";
		 		echo"<td><input type='hidden' name='oldNombre' value='$nombre'></td>";
		 		 } ?>
		 	</tr>
		 	<tr><td>Descripción: </td></tr>
		 	<tr>
		 		<td align="right"> <textarea name="descripcionDir" cols="40" rows="7"></textarea></td>
		 	</tr>
		 	<tr>
		 		<td align="center"><input type="submit" value="Enviar" /></td>
		 	</tr>
		 </table>
	 </form>
			</article>
		</section>
	<aside id="menu_col">
		
	</aside>
	<footer id="pie"></footer>
</div>
</body>
</html>

