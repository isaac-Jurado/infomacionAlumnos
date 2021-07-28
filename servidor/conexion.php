<?php
    function conexion(){
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $db = "reg";

        $conexion = mysqli_connect($servidor, $usuario, $password, $db);
        return $conexion;

    } 
?>