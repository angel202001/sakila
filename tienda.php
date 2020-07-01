<?php

require_once "funciones/ayudante.php";
require_once  "config/conexion.php";

$nombrePagina = "Tienda";


// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['guardarTienda'])){

    echo "Se van ha guardar los datos....";
}


// Incluir la vista

include_once "vistas/vista_tienda.php";