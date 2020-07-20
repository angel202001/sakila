<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";

$nombrePagina = "Categoria";


// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['categoria'])) {

    echo "Se van ha guardar los datos....";

}

$categorias = obtenerCategorias($conexion);
//imprimirArray($categorias);


// Incluir la vista

include_once "vistas/vista_categoria.php";