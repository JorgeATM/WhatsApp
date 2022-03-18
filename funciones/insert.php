<?php
    include("../conexion/conexion.php");

    $emisor= $_POST['txtEmisor']; 
    $numero=$_POST['txtNumero'];
    $mensaje=$_POST['txtMensaje'];
    $nombre=$_POST['txtNombreReceptor'];
    $tipo=$_POST['txtES'];
    $estado=$_POST['txtEstados'];
    date_default_timezone_set('America/Mexico_City');
    $fecha = date('m-d-Y h:i:s a', time());



    $sentencia ="INSERT INTO servidor VALUES(DEFAULT,'$emisor','$numero','$mensaje','$fecha','pendiente')";
            
            if(mysqli_query($conexion,$sentencia)){
                    header("Location: ../main/index.php");
            }else{
                echo "no";
            }

    
    
    
    mysqli_close($conexion);
?>