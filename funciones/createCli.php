<?php
    
    include("../conexion/conexionC.php");

    $emisor= $_POST['txtEmisor']; 
    $numero=$_POST['txtNumero'];
    $mensaje=$_POST['txtMensaje'];

    $nombre=$_POST['txtNombreReceptor'];
    //$tipo=$_POST['txtES'];
    $enSal = $_POST["txtES"];
    $estado=$_POST['txtEstados'];

    date_default_timezone_set('America/Mexico_City');
    $fecha = date('m-d-Y h:i:s a', time());
$sentenciaM= "INSERT INTO mensaje VALUES(DEFAULT,'$numero','$mensaje','$fecha','$enSal','$estado')";
                if(mysqli_query($conexion,$sentenciaM)){
                        header("Location: ../main/index.php");    
                }
                else{

                        echo "no cliente";
                }

                mysqli_close($conexion); 
?>