<?php

require_once "funciones/ayudante.php";
require_once  "config/conexion.php";

// Incluir los modelos

require_once "modelos/modelo_ciudad.php";

$ciudades = obtenerCiudades($conexion);

//imprimirArray($ciudades);



$nombrePagina = "Dirección";

    $direccion = $_GET ['direccion'] ?? "";
    $direccion2 = $_GET ['direccion2'] ?? "";
    $distrito = $_GET ['distrito'] ?? "";
    $ciudad = $_GET ['ciudad'] ?? "";
    $codigoPostal= $_GET ['codigoPostal'] ?? "";
    $telefono = $_GET ['telefono'] ?? "";
    $ubicacion = $_GET ['ubicacion'] ?? "";

// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['guardarDireccion'])){

    echo "Se van ha guardar los datos....";
}






// Incluir la vista
include_once "vistas/vista_direccion.php";