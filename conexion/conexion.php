<?php
    $servidor = "192.168.1.186";
    $usuario = "root";
    $password = "";
    $db = "cliente";

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $password,
        $db) OR DIE
        ("No se puede conectar......".mysqli_connect_error());
?>