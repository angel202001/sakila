<?php

require_once  "config/conexion.php";

function obtenerClientes($conexion){

    $sql = "SELECT cu.first_name, cu.last_name ,  a.address
            FROM customer AS cu
            INNER JOIN address AS a ON a.address_id = cu.address_id";

    return $conexion->query($sql)->fetchAll();

}

