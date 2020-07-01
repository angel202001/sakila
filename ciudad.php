<?php

require_once "funciones/ayudante.php";
require_once  "config/conexion.php";

$nombrePagina = "Ciudad";


// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['numeroCiudad'])){

    echo "Se van ha guardar los datos....";
}

// Incluir la vista

include_once "vistas/vista_ciudad.php";
