<?php
    /*
     Aqui deben de colocar los datos de su respectiva conexion, solo deben de reemplazar los datos de las variables
     */
    $host = "localhost";
    $user = "root";
    $password = "";
    $base_datos = "crud_basico";

    $conexion = new mysqli($host,$user,$password,$base_datos);
    $conexion->set_charset("utf8");
    if($conexion->connect_error){
        die("Error al conectar a la base de datos" . $conexion->connect_error);
    }
