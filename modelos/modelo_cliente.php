<?php

require_once "config/conexion.php";

function obtenerClientes($conexion)
{

    $sql = "SELECT cu.customer_id, cu.store_id, cu.first_name, cu.last_name , cu.email ,  a.address ,  cu.active, cu.create_date 
            FROM customer AS cu
            INNER JOIN address AS a ON a.address_id = cu.address_id";

    return $conexion->query($sql)->fetchAll();

}

function insertarClientes($conexion, $datos)
{

    $sql = "INSERT INTO customer(customer_id, store_id, first_name, last_name, email, active, create_date, last_update) VALUES (:idCliente, :tiendaCliente, :nombreCliente, :apellidoCliente, 
            :nombreEmail, :activoCliente, :creacionCliente)";

    return $conexion->prepare($sql)->execute($datos);
}
