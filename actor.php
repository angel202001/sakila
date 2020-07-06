<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";

//imprimirArray($_GET);

$nombrePagina = "Actor";

// Declarar las variables

$nombreActor = $_GET['nombreActor']?? "";
$apellidoActor = $_GET['apellidoActor']?? "";



// Aseguremonos de que el usuario haya hecho click en el boton
    if (isset($_GET['guardar_actor'])){

        echo "Se van ha guardar los datos....";
    }

$actores = obtenerActores($conexion);

    //imprimirArray($actores);



// Incluir la vista

include_once "vistas/vista_actor.php";