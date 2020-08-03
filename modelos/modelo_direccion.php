<?php

require_once "config/conexion.php";

function obtenerDirecciones($conexion)
{

    $sql = "SELECT a.address, a.district, c.city, a.postal_code, a.phone
            FROM address as a
            INNER JOIN city as c  ON c.city_id = a.city_id";

    return $conexion->query($sql)->fetchAll();

}

function insertarDirecciones($conexion, $datos)
{

    $sql = "INSERT INTO address(address, district, city_id, postal_code, phone) VALUES (:direccion, :distrito, :ciudad, :codigoPostal, :telefono )";

    return $conexion->prepare($sql)->execute($datos);
}