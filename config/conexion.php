<?php
// Valores de mi base de datos

$host = "localhost";
$dbname = "sakila";
$usuario = "root";
$contrasena = "angelmiguel07";

//imprimirArray($_SERVER);

// Valores de la base de datos 000wedhost


if ($_SERVER['SERVER_NAME'] == 'brillantmind.000webhostapp.com')  {
    $host = "localhost";
    $dbname = "id12550821_sakila";
    $usuario = "id12550821_angel";
    $contrasena = "C)]q7?*t|?&wGo>s";
}


$ajustes = [

    19 => 2 // devuelve un array con los nombres de la columna de los resultados de la BD

];


try {

    $conexion = new PDO("mysql:host={$host};dbname={$dbname}", $usuario, $contrasena, $ajustes);

} catch (PDOException $exception) {

    throw new Exception("Hubo un error al conectarnos en la base de datos: {$exception->getMessage()}");

}



