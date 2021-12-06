<?php

include_once "config.php";

$sql="CREATE DATABASE ventaDB";
if($conexion->query($sql) === true){
    $db = "ventadb";
    $conexion=new mysqli($servidor,$nombreusuario,$password,$db);
    $sql2="CREATE TABLE productos(
        CodigoP VARCHAR(100) NOT NULL PRIMARY KEY,
        NombreP VARCHAR(100) NOT NULL,
        CostoP INT(11) NOT NULL,
        ValorV INT(11) NOT NULL
    )";
    if($conexion->query($sql2) === true){
        $sql3="CREATE TABLE facturas(
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            producto VARCHAR(100) NOT NULL,
            valor INT(11) NOT NULL
        )";
        if($conexion->query($sql3) === true){
            echo 'base de datos y tablas creadas corectamente   <a href="../index.php">volver</a>';
        } else{
            die("error al crear la tabla facturas: ". $conexion->error);
        }
    } else{
        die("error al crear la tabla productos: ". $conexion->error);
    }
} else{
    die("error al crear la base de datos: ". $conexion->error);
}



?>