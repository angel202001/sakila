<?php

require_once  "funciones/ayudante.php";

$nombrePagina = "Principal";

imprimirArray($_GET);

// Declaramos las variables



$nombre = $_GET['nombre']?? "";
$apellido = $_GET['apellido']?? "";
$ciudad = $_GET['ciudad']?? "";
$correo= $_GET['correo']?? "";
$contraseña = $_GET['password'] ?? "";


// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['guardarPrincipal'])){

    echo "Se van ha guardar los datos....";
}



// Incluir la vista
include_once "vistas/vista_principal.php";