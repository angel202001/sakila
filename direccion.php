<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_direccion.php";

// Incluir los modelos

require_once "modelos/modelo_ciudad.php";

$ciudades = obtenerCiudades($conexion);
$direcciones = obtenerDirecciones($conexion);

//imprimirArray($ciudades);


$nombrePagina = "Dirección";

$direccion = $_POST ['direccion'] ?? "";
$distrito = $_POST ['distrito'] ?? "";
$ciudad = $_POST ['ciudad'] ?? "";
$codigoPostal = $_POST ['codigoPostal'] ?? "";
$telefono = $_POST ['telefono'] ?? "";


try {
    if ( isset($_POST['guardar_Direccion']) ) {


        // Validar los datos

        if ( empty($direccion) ) {
            throw new Exception ("La direccion esta vacia");

        }

        if ( empty($distrito) ) {
            throw new Exception ("El distrito esta vacio");
        }

        if ( empty($ciudad) ) {
            throw new Exception ("La ciudad esta vacia");
        }

        if ( empty($codigoPostal) ) {
            throw new Exception ("El codigo postal esta vacio");
        }

        if ( empty($telefono) ) {
            throw new Exception ("El telefono esta vacio");
        }


        // Preparar el array con las datos
        $datos = compact('direccion', 'distrito', 'ciudad', 'codigoPostal', 'telefono');


        // insertar los datos

        $direccionInsertada = insertarDirecciones($conexion, $datos);

        // lanzar un error si no se insertó correctamente

        if ( ! $direccionInsertada ) {

            throw new Exception ("Ocurrio un error al escribir los datos");
        }

        // Redireccion de la pagina

        header("Location: direccion.php", true, 303);
    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}


// Incluir la vista
include_once "vistas/vista_direccion.php";