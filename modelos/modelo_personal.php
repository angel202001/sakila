<?php

require_once "config/conexion.php";

function obtenerPersonal($conexion)
{

    $sql = "SELECT  sta.first_name, sta.last_name, sta.username, a.address 
            FROM staff AS sta
            INNER JOIN address AS a ON a.address_id = sta.address_id";

    return $conexion->query($sql)->fetchAll();

}
