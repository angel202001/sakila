<?php

require_once "config/conexion.php";

function obtenerPaises($conexion)
{

    $sql = "SELECT country_id, country FROM country";

    return $conexion->query($sql)->fetchAll();

}

function insertarPaises($conexion, $datos)
{

    $sql = "INSERT INTO country (country) values (:paisNombre)";

    return $conexion->prepare($sql)->execute($datos);
}
