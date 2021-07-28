<?php
    $nombre = $_POST['nombre'];
    $apellidoP =$_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $matricula =$_POST['matricula'];
    $fecha = $_POST['fecha'];
    $especialidad =$_POST['especialidad'];
    $sexo = $_POST['sexo'];
    $nombreArchivo = $_FILES['miArchivo']['name'];
    $rutaTemporal = $_FILES['miArchivo']['tmp_name'];
    $rutaServidor = "../archivo/";

        
    require_once 'conexion.php';
    $conexion = conexion(); 

    $sql = "INSERT INTO t_registro (nombre,apellidoP,apeliidoM,matricula,fecha,espacialidad,sexo) VALUES ('$nombre','$apellidoP','$apellidoM','$matricula','$fecha','$especialidad','$sexo')";
    $resultado = mysqli_query($conexion,$sql);


if(move_uploaded_file($rutaTemporal, $rutaServidor . $nombreArchivo)){
                echo "arrba";
            }else{
                echo  "no se pudo subir archivo";
            }
    print_r($_FILES);

    

    if($resultado){

        //header("location:../index.php");
    }else{
        echo 'no se pudo agregar nada';
    }

?>