<?php

$usuario = "root";
$contrasena = "angelmiguel07";

$errores = [];


try {

    $conexion = new PDO('mysql:host=localhost;dbname=sakila', $usuario, $contrasena);

} catch (PDOException $exception) {

    array_push($errores, $exception->getMessage());

}

imprimirArray($errores);


