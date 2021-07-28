<?php
    $idRegistro = $_POST['idRegistro'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $fecha = $_POST['fecha'];
    $sexo = $_POST['sexo'];

    require_once 'conexion.php';
    $conexion=conexion();

    $sql = "UPDATE t_registro SET 
                                nombre='$nombre',
                                apellidoP= '$apellidoP',
                                apeliidoM= '$apellidoM',
                                fecha= '$fecha',
                                sexo= '$sexo'
            WHERE id_registro = '$idRegistro' ";
    $resultado = mysqli_query($conexion,$sql);

    if ($resultado) {
        header("location:../index.php");
    } else {
        echo "No se pudo actualizar :(";
    }

?>