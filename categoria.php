<?php

require_once "funciones/ayudante.php";

$nombrePagina = "Categoria";





// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['categoria'])) {

    echo "Se van ha guardar los datos....";

}

// Incluir la vista

include_once "vistas/vista_categoria.php";