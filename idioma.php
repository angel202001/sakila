<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_idioma.php";

$nombrePagina = "Idioma";

// Aseguremonos de que el usuario haya hecho click en el boton
if ( isset($_POST['idioma']) ) {

    echo "Se van ha guardar los datos....";
}

$idiomas = obtenerIdiomas($conexion);

//imprimirArray($idiomas);

// Incluir la vista

include_once "vistas/vista_idioma.php";