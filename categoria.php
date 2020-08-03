<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";

$nombrePagina = "Categoria";

// Declarar las variables

$nombreCategoria = $_POST['nombreCategoria'] ?? "";


// Aseguremonos de que el usuario haya hecho click en el boton

try {
    if ( isset($_POST['guardar_categoria']) ) {


        // Validar los datos

        if ( empty($nombreCategoria) ) {
            throw new Exception ("El nombre de categoria esta vacio");

        }


        // Preparar el array con las datos
        $datos = compact('nombreCategoria');


        // insertar los datos

        $categoriaInsertada = insertarCategorias($conexion, $datos);

        // lanzar un error si no se insertó correctamente

        if ( ! $categoriaInsertada ) {

            throw new Exception ("Ocurrio un error al escribir los datos");
        }

        // Redireccion de la pagina

        header("Location: categoria.php", true, 303);
    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}


$categorias = obtenerCategorias($conexion);
//imprimirArray($categorias);


// Incluir la vista

include_once "vistas/vista_categoria.php";