<?php

$usuario = "root";
$contrasena = "angelmiguel07";
$ajustes = [

    19 => 2 // devuelve un array con los nombres de la columna de los resultados de la BD

];


try {

    $conexion = new PDO('mysql:host=localhost;dbname=sakila', $usuario, $contrasena, $ajustes);

} catch (PDOException $exception) {

    throw new Exception("Hubo un error al conectarnos en la base de datos: {$exception->getMessage()}");

}



