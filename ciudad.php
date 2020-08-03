<?php

require_once "funciones/ayudante.php";


// Incluir los modelos

require_once "modelos/modelo_ciudad.php";
require_once "modelos/modelo_pais.php";

$nombrePagina = "Ciudad";

// Declarar las variables
$nombreCiudad = $_POST['nombreCiudad'] ?? "";
$pais = $_POST['pais'] ?? "";


try {
    if ( isset($_POST['guardar_ciudad']) ) {


        // Validar los datos

        if ( empty($nombreCiudad) ) {
            throw new Exception ("El nombre de ciudad esta vacio");

        }

        if ( empty($pais) ) {
            throw new Exception ("Seleccione un pais");
        }

        // Preparar el array con los datos

        $datos = compact('nombreCiudad', 'pais');


        // Insertar los datos

        $ciudadInsertada = insertarCiudades($conexion, $datos);

        // Lanzar error si no de han insertado los datos

        if ( ! $ciudadInsertada ) {
            throw new Exception("Ha ocurrido un error");

        }


    }

} catch ( Exception $e ) {
    $error = $e->getMessage();
}


// Cargar los datos de los modelos

$ciudades = obtenerCiudades($conexion);
$paises = obtenerPaises($conexion);


// Incluir la vista

include_once "vistas/vista_ciudad.php";
