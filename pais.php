<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";


$nombrePagina = "País";


// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['paisNombre'])) {

    echo "Se van ha guardar los datos....";
}


$paises = obtenerPaises($conexion);

//imprimirArray($paises);

// Incluir la vista

include_once "vistas/vista_pais.php";