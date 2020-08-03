<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";


$nombrePagina = "Actor";

// Declarar las variables

$nombreActor = $_POST['nombreActor'] ?? "";
$apellidoActor = $_POST['apellidoActor'] ?? "";


try {
    if ( isset($_POST['guardar_actor']) ) {


        // Validar los datos

        if ( empty($nombreActor) ) {
            throw new Exception ("El nombre esta vacio");

        }

        if ( empty($apellidoActor) ) {
            throw new Exception ("El apellido esta vacio....");
        }

        // Preparar el array con las datos
        $datos = compact('nombreActor', 'apellidoActor');


        // insertar los datos

        $actorInsertado = insertarActores($conexion, $datos);
        $mensaje = "Los datos se guardaron correctamente";

        // lanzar un error si no se insertó correctamente

        if ( ! $actorInsertado ) {

            throw new Exception ("Ocurrio un error al escribir los datos");
        }

        // Redireccion de la pagina


        redireccionar("actor.php");
    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}


// Cargar los datos de los modelos

$actores = obtenerActores($conexion);


// Incluir la vista

include_once "vistas/vista_actor.php";