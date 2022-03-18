<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "";

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $password,
        $db) OR DIE
        ("No se puede conectar......".mysqli_connect_error());
?>