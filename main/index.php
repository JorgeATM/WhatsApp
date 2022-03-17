<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script> 
	<title>WhatsApp</title>
</head>
<body>
	<header>WHATSAPP</header>

<form id="form" class="topBefore" method="post"  action="../funciones/insert.php">
		
		  <input id="name" type="text" placeholder="Receptor" name="txtNumero">
		  <input id="email" type="text" placeholder="Mensaje" name="txtMensaje">
  <input id="submit" type="submit" value="Enviar">
  
  <div class="formgroup" id="message-form">        
    </div>        
        <div class="formgroup" id="message-form">
        <label >Mensajes recibidos: </label>
        <div id="tablaUpdate"></div>
        </div>
  
</form>

<script src="./js/funcion.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(
                function(){
                    $('#tablaUpdate').load('table.php');
                },2000
            );
        });
    </script>


</body>
</html>

