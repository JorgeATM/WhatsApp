<?php
    include("../conexion/conexion.php");

    $numero=$_POST['txtNumero'];
    $mensaje=$_POST['txtMensaje'];
    date_default_timezone_set('America/Mexico_City');
    $fecha = date('m-d-Y h:i:s a', time());



    $sentencia ="INSERT INTO servidor VALUES(DEFAULT,'1111111','$numero','$mensaje','$fecha','pendiente')";
            
            if(mysqli_query($conexion,$sentencia)){
                    header("Location: ../main/index.html");
            }else{
                echo "no";
            }

    
    
    
    mysqli_close($conexion);
    ?>
