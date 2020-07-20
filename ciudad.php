<?php

require_once "funciones/ayudante.php";


// Incluir los modelos

require_once "modelos/modelo_ciudad.php";
require_once "modelos/modelo_pais.php";

$nombrePagina = "Ciudad";


// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['numeroCiudad'])) {

    echo "Se van ha guardar los datos....";
}

$ciudades = obtenerCiudades($conexion);
$paises = obtenerPaises($conexion);


// Incluir la vista

include_once "vistas/vista_ciudad.php";
