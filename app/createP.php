<?php

include_once "config.php";


$db = "ventadb";

$conexion=new mysqli($servidor,$nombreusuario,$password,$db);


    $CodigoP=$_POST['CodigoP'];
    $NombreP=$_POST['NombreP'];
    $CostoP=$_POST['CostoP'];

include_once "Producto.inc.php";



    $sql="INSERT INTO productos(CodigoP,NombreP,CostoP)
                            VALUES('$CodigoP','$NombreP','$CostoP')";

    if($conexion->query($sql) === true){
        echo 'se registro correctamente  <a href="../index.php">volver</a>';
    } else{
        die("error al insertar datos: ".$conexion->error);
    }


?>