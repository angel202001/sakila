<?php

require_once "config/conexion.php";

function obtenerCiudades($conexion) {

    $sql = "SElECT city_id, city FROM city";

    return $conexion->query($sql)->fetchALL();


}