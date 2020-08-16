<?php

require_once "config/conexion.php";

function obtenerPeliculas($conexion)
{

    $sql = "SELECT  fi.film_id, fi.title, fi.description, fi.release_year, la.language_id, fi.original_language_id, fi.rental_rate, fi.rating,  fi.special_features 
            FROM film AS fi
            INNER JOIN language AS la ON la.language_id = fi.language_id ";

    return $conexion->query($sql)->fetchAll();

}

function insertarPeliculas($conexion, $datos)
{

    $sql = "INSERT INTO film(film_id, title, description, release_year, language_id, original_language_id, rental_rate, rating, special_features)
            VALUES (:tituloPelicula, :descripcionPelicula, :lanzamientoPelicula, :idiomaPelicula, :originalPelicula, :precioPelicula, :ratingPelicula, :especialPelicula)";

    return $conexion->prepare($sql)->execute($datos);
}
