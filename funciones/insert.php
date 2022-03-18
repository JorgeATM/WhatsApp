<?php
    include("../conexion/conexion.php");
    include("../conexion/conexionC.php");

    $emisor= $_POST['txtEmisor']; 
    $numero=$_POST['txtNumero'];
    $mensaje=$_POST['txtMensaje'];

    $nombre=$_POST['txtNombreReceptor'];
    $tipo=$_POST['txtES'];
    $estado=$_POST['txtEstados'];

    date_default_timezone_set('America/Mexico_City');
    $fecha = date('m-d-Y h:i:s a', time());

    //$estado= $_POST['txtEstado'];


    $sentencia ="INSERT INTO servidor VALUES(DEFAULT,'$emisor','$numero','$mensaje','$fecha','$estado')";
            
            if(mysqli_query($conexion,$sentencia)){

                $sentenciaC= "INSERT INTO contacto VALUES('$receptor','$nombre')";
                if(mysqli_query($conexionC,$sentenciaC)){

                        $sentenciaE= "INSERT INTO emisor VALUES('$emisor','$informacion')";
                if(mysqli_query($conexionC,$sentenciaE)){
                        $sentenciaM= "INSERT INTO mensaje VALUES(DEFAULT,'$numero','$mensaje','$fecha','$tipo','$estado')";
                if(mysqli_query($conexionC,$sentenciaM)){
                        header("Location: ../main/index.php");    
                }
                }
                }

                    
            }else{
                echo "no";
            }

    
        mysqli_close($conexionC);
    
    mysqli_close($conexion);
