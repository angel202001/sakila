<?php

// Incluir modelos

require_once "funciones/ayudante.php";
require_once "modelos/modelo_cliente.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";

$informacionTiendas = obtenerInformacionTienda($conexion);
$clientes = obtenerClientes($conexion);
$direcciones = obtenerDirecciones($conexion);
$nombrePagina = "Cliente";


// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['guardarCliente'])) {

    echo "Se van ha guardar los datos....";
}


// Incluir la vista

include_once "vistas/vista_cliente.php";