<?php

require_once "config/conexion.php";

function obtenerTiendas($conexion)
{

    $sql = "SELECT store_id FROM store";

    return $conexion->query($sql)->fetchAll();

}

function obtenerInformacionTienda($conexion)
{


    $sql = "select sto.store_id, sto.manager_staff_id, sto.address_id, sta.first_name, a.address
            from store as sto
            inner join staff as sta on sto.manager_staff_id = sta.staff_id
            inner join address as a on sto.address_id = a.address_id";

    return $conexion->query($sql)->fetchAll();

}