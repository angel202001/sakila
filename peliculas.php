<?php


// Comentario de linea
# Comentario de linea

/*Comentario
en multi
linea
*/

// Declarar el nombre de la pagiana

$pagina = "Películas/Movies";

//Concatenar en PHP

echo "Estas en la pagina de " .$pagina;

// Template string en PHP

echo "Soy un nuevo texto {$pagina}";

$texto = "Hola";
$texto = 'Hola';
$texto = `Hola`; // Cuidado con las comillas invertidas


$numbero = 10;
$numero = 12.1;

$booleano = true;
$booleano = false;



// Declarar objeto

$objeto = new stdClass();
$objeto-> nombre = "angel";
$objeto-> edad = 14;

echo "Hola , mi nombre es {$objeto->nombre} y tengo {$objeto->edad} años";