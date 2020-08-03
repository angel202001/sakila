<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";


$nombrePagina = "País";

// Declarar las variables
$paisNombre = $_POST['nombrePais'] ?? "";


// Aseguremonos de que el usuario haya hecho click en el boton
if ( isset($_POST['guardar_pais']) ) {

    echo "Se van ha guardar los datos....";
}

imprimirArray($_POST);

// Validar los datos
// TODO

// Insertar los datos


$datos = compact('paisNombre');


// Insertar los datos

$inserta = insertarPaises($conexion, $datos);


if ( $inserta ) {
    echo "Datos insertados correctamente";

} else {

    echo "No se insertaron los datos";
}


$paises = obtenerPaises($conexion);

//imprimirArray($paises);

// Incluir la vista

include_once "vistas/vista_pais.php";