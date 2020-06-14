


<!DOCTYPE html>
<html>
<head>
	<title>Envio de formulario libro</title>
	<meta content="text/html"  charset="utf-8" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<!--dentro del cuerpo-->


<body>
                                                             <!--enctype para subir archivos upload-->                           
	<form  action="recepcion_2.php"  method="post"  enctype="multipart/form-data">

						
			<p><label>Titulo  :</label></p>
			<input type="text" name="titulo">


			<p><label>Autor   :</label></p>
			<input type="text" name="autor">

			<p><label>Editorial   :</label></p>
			<input type="text" name="editorial">


			<p><label>Año   :</label></p>
			<input type="number" name="año">


			<p><label>Descripcion   :</label></p>
			<input type="text" name="descripcion">




			<p><input type="submit" value="enviar" name="submit"></p>
			<p><input type="file" name="foto"></p>

			
			<p><input type="submit" value ="upload" name="enviar"></p>






			<?php
//validaciones

					if(isset($_POST['submit'])){

					if (empty($titulo)) {
						echo "<p class ='error'>* Agregue un Titulo </p>";
					}

					if (empty($autor)) {
						echo "<p class ='error'>* Agregue un Autor </p>";
					}

					if (empty($editorial)) {
						echo "<p class ='error'>* Agregue una Editorial </p>";
					}


					if (empty($año)) {
						echo "<p class ='error'>* Agregue un Año </p>";
					}


					if (empty($descripcion)) {
						echo "<p class ='error'>* Agregue una descripcion </p>";
					}					


				}



			?>

	</form>


</body>
</html> 