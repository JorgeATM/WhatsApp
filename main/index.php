<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">
	<title>WhatsApp</title>
</head>
<body>
	<header>WHATSAPP</header>

<form id="form" class="topBefore" method="post"  action="../funciones/insert.php">
		
		  <input id="name" type="text" placeholder="Receptor" name="txtNumero">
		  <input id="email" type="text" placeholder="Mensaje" name="txtMensaje">
  <input id="submit" type="submit" value="Enviar">
  
  
</form>

<!--Tabla Alumno-->
                            
<table class="table table-striped">
	<thead>
	  <tr>
		  <th scope="col">e|m</th>
		  <th scope="col">re</th>
		  <th scope="col">texto</th>
		  <th scope="col">fecha</th>
		  <th scope="col">estado</th>
		  
	</thead>
	<tbody>
		
		 
	<?php
		  include("../conexion/conexion.php"); //importar la conexion
		  
		  $sentencia = "SELECT em,re,texto,fecha,estado FROM servidor WHERE
		  em = '1111111'";
  
		  $resultado = mysqli_query($conexion, $sentencia);
  
		  while($ver = mysqli_fetch_assoc($resultado)){
			  echo"
			  <tr>
				  <td>".$ver["em"]."</td>
				  <td>".$ver["re"]."</td>
				  <td>".$ver["texto"]."</td>
				  <td>".$ver["fecha"]."</td>
				  <td>".$ver["estado"]."</td>
				  
				  
			  </tr>";
		  } 
		  mysqli_close($conexion);                             
	  ?>


	</tbody>
  </table>
</body>
</html>

