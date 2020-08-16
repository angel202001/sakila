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
// Declarar las variables


$tiendaCliente = $_POST['tiendaCliente'] ?? "";
$nombreCliente = $_POST['nombreCliente'] ?? "";
$apellidoCliente = $_POST['apellidoCliente'] ?? "";
$nombreEmail = $_POST['nombreEmail'] ?? "";
$direccionCliente = $_POST['direccionCliente'] ?? "";
$activoCliente = $_POST['activoCliente'] ?? "";
$creacionCliente = $_POST['creacionCliente'] ?? "";

try {
    if ( isset($_POST['guardar_Cliente']) ) {


        // Validar los datos


        if ( empty($tiendaCliente) ) {
            throw new Exception ("seleccione una tienda");
        }


        if ( empty($nombreCliente) ) {
            throw new Exception ("El nombre esta vacio");

        }

        if ( empty($apellidoCliente) ) {
            throw new Exception ("El apellido esta vacio....");
        }

        if ( empty($nombreEmail) ) {
            throw new Exception ("El email esta vacio");
        }

        if ( empty($direccionCliente) ) {
            throw new Exception ("El cliente  esta vacio");
        }

        if ( empty($activoCliente) ) {
            throw new Exception ("El activo esta vacio");
        }

        if ( empty($creacionCliente) ) {
            throw new Exception ("La creacion esta vacia");
        }


        // Preparar el array con las datos
        $datos = compact('tiendaCliente', 'nombreCliente',
            'apellidoCliente', 'nombreEmail', 'direccionCliente', 'activoCliente', 'creacionCliente');


        // insertar los datos

        $clienteInsertado = insertarClientes($conexion, $datos);

        // lanzar un error si no se insertó correctamente

        if ( ! $clienteInsertado ) {

            throw new Exception ("Ocurrio un error al escribir los datos");
        }

        // Redireccion de la pagina

        header("Location: cliente.php", true, 303);
    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}


// Incluir la vista

include_once "vistas/vista_cliente.php";