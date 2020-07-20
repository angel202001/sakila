<?php

require_once "config/conexion.php";

function obtenerActores($conexion)
{

    $sql = "SELECT actor_id, first_name , last_name, last_update FROM actor";

    return $conexion->query($sql)->fetchAll();

}

function insertarActores($conexion, $datos)
{

    $sql = "INSERT INTO actor(first_name, last_name) VALUES (:nombreActor, :apellidoActor)";

    return $conexion->prepare($sql)->execute($datos);
}