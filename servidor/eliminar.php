<?php
    $idRegistro = $_POST['idRegistro'];
    require_once 'conexion.php';
    $conexion = conexion();

    $sql = "DELETE FROM t_registro WHERE id_registro='$idRegistro'";
    $respuesta= mysqli_query($conexion,$sql);

    if($respuesta){
        header("location:../listado.php");
    }else{
        echo "no se puedo eliminar";
    }
?>