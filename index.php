<?php

require_once "funciones/ayudante.php";
require_once "config/conexion.php";

$nombrePagina = "Principal";


// Incluir los modelos

require_once "modelos/modelo_actor.php";

$actores = obtenerActores($conexion);

//imprimirArray($actores);


// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['guardarPrincipal'])) {

    echo "Se van ha guardar los datos....";
}


// Incluir la vista
include_once "vistas/vista_principal.php";
