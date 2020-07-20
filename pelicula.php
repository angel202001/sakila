<?php

//  Incluir modelos

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pelicula.php";
require_once "modelos/modelo_idioma.php";

$idiomas = obtenerIdiomas($conexion);
$peliculas = obtenerPeliculas($conexion);
$nombrePagina = "Película";

// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['peliculas'])) {

    echo "Se van ha guardar los datos....";
}


// Incluir la vista

include_once "vistas/vista_pelicula.php";