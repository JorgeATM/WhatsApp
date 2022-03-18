<?php
    include("../conexion/conexion.php");
    include("../conexion/conexionC.php");

    $emisor= $_POST['txtEmisor']; 
    $numero=$_POST['txtNumero'];
    $mensaje=$_POST['txtMensaje'];
    date_default_timezone_set('America/Mexico_City');
    $fecha = date('m-d-Y h:i:s a', time());

    $estado= $_POST['txtEstado'];


    $sentencia ="INSERT INTO servidor VALUES(DEFAULT,'$emisor','$numero','$mensaje','$fecha','$estado')";
            
            if(mysqli_query($conexion,$sentencia)){

                $sentenciaC= "INSERT INTO contacto VALUES('$receptor','$nombreReceptor')";
                if(mysqli_query($conexion,$sentenciaC)){

                        $sentenciaE= "INSERT INTO emisor VALUES('$emisor','$informacion')";
                if(mysqli_query($conexion,$sentenciaE)){
                        $sentenciaM= "INSERT INTO mensaje VALUES(DEFAULT,'$numero','$mensaje','$fecha','0','$estado')";
                if(mysqli_query($conexion,$sentenciaM)){
                        
                }
                }
                }

                    header("Location: ../main/index.php");
            }else{
                echo "no";
            }

    
            mysqli_close($conexionC);
    
    mysqli_close($conexion);
?>