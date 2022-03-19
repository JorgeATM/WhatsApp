<?php
    $servidor = "192.168.0.196";
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