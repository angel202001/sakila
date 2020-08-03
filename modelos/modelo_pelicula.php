<?php

require_once "config/conexion.php";

function obtenerPeliculas($conexion)
{

    $sql = "SELECT fi.title, fi.description, fi.release_year, la.language_id, fi.rental_rate, fi.special_features 
            FROM film AS fi
            INNER JOIN language AS la ON la.language_id = fi.language_id ";

    return $conexion->query($sql)->fetchAll();

}

function insertarPeliculas($conexion, $datos)
{

    $sql = "INSERT INTO film(title, description, release_year, rental_rate,  special_features) VALUES (:nombrePelicula, :descripcionPelicula, :lanzamientoPelicula, :precioPelicula,  :especialesPelicula)";

    return $conexion->prepare($sql)->execute($datos);
}
