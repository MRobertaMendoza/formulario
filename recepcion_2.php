

<!DOCTYPE html>
<html>
<head>
	<title>Recepcion de formulario</title>
	<link rel="stylesheet" type="text/css" href="estilo_2.css">
</head>
<body>

		<?php

		

			$titulo = $_POST['titulo'];
			
			$autor = $_POST['autor'];

			$editorial = $_POST['editorial'];

			$año = $_POST['año'];
			
			$descripcion = $_POST['descripcion'];
			

            
			echo "El titulo      es :".$titulo."<br>";
			
			

			echo "El autor       es :".$autor. "<br>";
			

			echo "La editorial   es :".$editorial. "<br>";
			

			echo "El año 	     es :".$año. "<br>";
			
			echo "La descripcion es :".$descripcion. "<br>";
			

			//validaciones

					if(isset($_POST['submit'])){

					if (empty($titulo)) {// validamos que no este vacio
						echo "<p class ='error'>* AGREGUE UN TITULO </p>";
					}else {

						if (strlen($titulo)>15) {
								#validamos la cantidad de caracteres
						echo "<p class = 'error'>* EL TITULO ES MUY LARGO"; 

							}	

					}



					if (empty($autor)) {
						echo "<p class ='error'>* Agregue un Autor </p>";
					}else {

						if (strlen($autor)>10) {
								#validamos la cantidad de caracteres
						echo "<p class = 'error'>* EL NOMBRE ES MUY LARGO"; 

							}

							}



					if (empty($editorial)) {
						echo "<p class ='error'>* AGREGUE UNA EDITORIAL </p>";
					}else {

						if (strlen($editorial)>8) {
								#validamos la cantidad de caracteres
						echo "<p class = 'error'>* LA EDITORIAL ES MUY LARGA"; 

							}

							}







					if (empty($año)) {
						echo "<p class ='error'>* AGREGUE UN AÑO </p>";
					}else {

						if (strlen($año)>4) {
								#validamos la cantidad de caracteres
						echo "<p class = 'error'>* EL AÑO ES MUY LARGO"; 

							}else {
								if (!is_numeric($año)) {

									echo "<p class = 'error'>*EL AÑO DEBEN SER CUARTO NUMEROS";
									# valido que sea un numero
								}


							}

							}






					if (empty($descripcion)) {
						echo "<p class ='error'>* AGREGUE UNA DESCRIPCION </p>";
					}else {

						if (strlen($descripcion)>20) {
								#validamos la cantidad de caracteres
						echo "<p class = 'error'>* LA DESCRIPCION ES MUY LARGA"; 

							}

							}					


				}


					

					
					// subir archivos - upload
					// usamos la varibale super global FILE
				//copiamos los archivos n nuestra carpeta, nos pide la fuente, la colocamos mediante la variable Global FILE, va a traer foto y la fuente va ser el nombre temporal, es decir donde estar temporalmente
				//en mi computadora.

				copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);


				echo "Archivo subido exitosamente !!";

				$nombre = $_FILES['foto']['name'];
				echo "<img src=\"$nombre\">";


					



				//}



		?>

</body>
</html>