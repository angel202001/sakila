<?php


require_once "funciones/ayudante.php";

$nombrePagina = "Tienda";


// Incluir modelos
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_personal.php";

$personal = obtenerPersonal($conexion);
$direcciones = obtenerDirecciones($conexion);
$informacionTiendas = obtenerInformacionTienda($conexion);


// Aseguremonos de que el usuario haya hecho click en el boton
if ( isset($_POST['guardarTienda']) ) {

    echo "Se van ha guardar los datos....";
}


// Incluir la vista

include_once "vistas/vista_tienda.php";