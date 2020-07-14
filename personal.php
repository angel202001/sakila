<?php


// Incluir personal

require_once "funciones/ayudante.php";
require_once  "modelos/modelo_personal.php";
require_once  "modelos/modelo_direccion.php";
require_once  "modelos/modelo_tienda.php";


$inforamacionTiendas = obtenerInformacionTienda($conexion);
$direcciones = obtenerDirecciones($conexion);
$personal = obtenerPersonal($conexion);
$nombrePagina = "Personal";

// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['guardarPersonal'])){

    echo "Se van ha guardar los datos....";
}



// Incluir la vista

include_once "vistas/vista_personal.php";