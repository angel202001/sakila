<?php include_once "partes/parte_head.php"; ?>


<body>

<!-- Barra superior -->

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top"
             alt="">
        Sakila
    </a>
</nav>

<!-- Contenido -->

<div class="container-fluid">

    <div class="row">

        <div class="col-md-2">
            <?php include_once "partes/parte_menu.php"; ?>

        </div>

        <div class="col-md-10">
            <h3><?php echo $nombrePagina; ?></h3>


            <div class="row">
                <div class="col-md-5">
                    <form action="pelicula.php" nethod="get">

                        <div class="mb-3">
                            <label for="nombrePelicula">Titulo de la pelicula</label>
                            <input type="text" name="nombrePelicula" id="nombrePelicula" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="descripcionPelicula">Descripcion de la pelicula</label>
                            <input type="text" name="descripcionPelicula" id="descripcionPelicula" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="lanzamientoPelicula">Lanzamiento de la pelicula</label>
                            <input type="text" name="lanzamientoPelicula" id="lanzamientoPelicula" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="lenguajePelicula">Idioma de la pelicula</label>
                            <select name="lenguajePelicula" id="lenguajePelicula" class="form-select">
                                <option value="">Seleccione un idioma</option>

                                <?php
                                foreach ($idiomas as $idioma) {

                                    echo " <option value=\"{$idioma["lenguage_id"]}\">{$idioma["name"]}</option>";

                                }

                                ?>

                            </select>

                        </div>


                        <div class="mb-3">
                            <label for="precioPelicula">Precio de la pelicula</label>
                            <input type="text" name="precioPelicula" id="precioPelicula" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label for="codigoPelicula">Codigo postal</label>
                            <input type="text" name="codigoPelicula" id="codigoPelicula" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label for="especialesPelicula">Especiales de peliculas</label>
                            <input type="text" name="especialesPelicula" id="especialesPelicula" class="form-control">

                        </div>


                        <div class="mb-3">

                            <button type="submit" name="peliculas" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>


                </div>


            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">


                    <table class="table">
                        <thead>

                        <th scope="col">Titulos</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Lanzamiento</th>
                        <th scope="col">Idioma</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Especiales</th>


                        </thead>

                        <tbody>


                        <?php

                        foreach ($peliculas as $film) {
                            echo " <tr>

                                <th scope=\"row\">{$film['title']}</th>
                                <td>{$film['description']}</td>                             
                                 <td>{$film['release_year']}</td>
                                 <td>{$film['language_id']}</td>
                                  <td>{$film['rental_rate']}</td>
                                  <td>{$film['special_features']}</td>

                            </tr>";

                        }


                        ?>


                        </tbody>

                    </table>

                </div>


            </div>


</body>
</html>