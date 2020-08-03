<?php

//  Incluir modelos

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pelicula.php";
require_once "modelos/modelo_idioma.php";

$idiomas = obtenerIdiomas($conexion);
$peliculas = obtenerPeliculas($conexion);
$nombrePagina = "Película";


$nombrePelicula = $_POST['nombrePelicula'] ?? "";
$descripcionPelicula = $_POST['descripcionPelicula'] ?? "";
$lanzamientoPelicula = $_POST['lanzamientoPelicula'] ?? "";
$precioPelicula = $_POST['precioPelicula'] ?? "";
$especialesPelicula = $_POST['especialesPelicula'] ?? "";


// Aseguremonos de que el usuario haya hecho click en el boton
try {
    if ( isset($_POST['peliculas']) ) {


        // Validar los datos

        if ( empty($nombrePelicula) ) {
            throw new Exception ("El nombre de la pelicula esta vacio");

        }

        if ( empty($descripcionPelicula) ) {
            throw new Exception ("La descripcion esta vacia");
        }


        if ( empty($lanzamientoPelicula) ) {
            throw new Exception ("El lanzamiento esta vacio");

        }

        if ( empty($precioPelicula) ) {
            throw new Exception ("El precio esta vacio");
        }

        if ( empty($especialesPelicula) ) {
            throw new Exception ("El especial esta vacio");
        }


        // Preparar el array con las datos
        $datos = compact('nombrePelicula', 'descripcionPelicula', 'lanzamientoPelicula', 'precioPelicula', 'especialesPelicula');


        // insertar los datos

        $peliculasInsertada = insertarPeliculas($conexion, $datos);

        // lanzar un error si no se insertó correctamente

        if ( ! $peliculasInsertada ) {

            throw new Exception ("Ocurrio un error al escribir los datos");
        }

        // Redireccion de la pagina

        header("Location: pelicula.php", true, 303);
    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}

imprimirArray($_POST);


// Incluir la vista

include_once "vistas/vista_pelicula.php";