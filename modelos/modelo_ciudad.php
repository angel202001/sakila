<?php

require_once "config/conexion.php";

function obtenerCiudades($conexion) {

    $sql = "SElECT ci.city_id, ci.city, co.country
            FROM city AS ci
            INNER JOIN country AS co ON co.country_id = ci.country_id";


    return $conexion->query($sql)->fetchALL();


}