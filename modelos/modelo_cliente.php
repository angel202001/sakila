<?php

require_once "config/conexion.php";

function obtenerClientes($conexion)
{

    $sql = "SELECT cu.customer_id, cu.store_id, cu.first_name, cu.last_name , cu.email ,  a.address ,  cu.active, cu.create_date ,
            CASE c.active WHEN 1 THEN 'SI' END;
            FROM customer AS cu
            LEFT JOIN store AS s ON cu.store_id = s.store_id
            LEFT JOIN address AS a ON a.address_id = cu.address_id";

    return $conexion->query($sql)->fetchAll();

}

function insertarClientes($conexion, $datos)
{

    $sql = "INSERT INTO customer(customer_id, store_id, first_name, last_name, email, address, active, create_date, last_update) VALUES (:idCliente, :tiendaCliente, :nombreCliente, :apellidoCliente, 
            :nombreEmail, :direccionCliente, :activoCliente, :creacionCliente)";

    return $conexion->prepare($sql)->execute($datos);
}
