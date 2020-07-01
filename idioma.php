<?php

require_once "funciones/ayudante.php";
require_once  "config/conexion.php";

$nombrePagina = "Idioma";

// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['idioma'])){

    echo "Se van ha guardar los datos....";
}


// Incluir la vista

include_once "vistas/vista_idioma.php";