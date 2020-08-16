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
                    <form action="pelicula.php" method="post">


                        <div class="mb-3">
                            <label for="tituloPelicula">Titulo de la pelicula</label>
                            <input type="text" name="tituloPelicula" id="tituloPelicula" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="descripcionPelicula">Descripcion de la pelicula</label>
                            <input type="text" name="descripcionPelicula" id="descripcionPelicula" class="form-control">

                        </div>


                        <div class="mb-3">

                            <label for="anoLanzamiento" class="form-label">Año de lanzamiento</label>
                            <input class="form-control" list="listadoAnios" name="anoLanzamiento" id="anoLanzamiento"
                                   placeholder="Digite un año">
                            <datalist id="listadoAnios">


                                <?php
                                for ( $year = date("Y"); $year >= 1900; $year-- ) {
                                    echo "<option value=\"{$year}\">";
                                }

                                ?>


                            </datalist>

                        </div>


                        <div class="mb-3">
                            <label for="idiomaPelicula">Idioma de la pelicula</label>
                            <select name="idiomaPelicula" id="idiomaPelicula" class="form-select">
                                <option value="">Seleccione un idioma</option>

                                <?php
                                foreach ($idiomas as $idioma) {

                                    echo " <option value=\"{$idioma["lenguage_id"]}\">{$idioma["name"]}</option>";

                                }

                                ?>

                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="originalPelicula">Idioma original</label>
                            <input type="text" name="originalPelicula" id="originalPelicula" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="precioPelicula">Precio de la pelicula</label>
                            <input type="text" name="precioPelicula" id="precioPelicula" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="ratingPelicula">Rating</label>
                            <input type="text" name="ratingPelicula" id="ratingPelicula" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="especialPelicula">Especiales</label>
                            <input type="text" name="especialPelicula" id="especialPelicula" class="form-control">

                        </div>


                        <div class="mb-3">

                            <button type="submit" name="peliculas" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>

                    <?php

                    if ( isset($error) ) {
                        echo $error;
                    }


                    if ( isset($peliculasInsertada) ) {

                        echo "Los datos se han insertado.";
                    }

                    ?>


                </div>


            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">


                    <table class="table">
                        <thead>

                        <th scope="col">ID</th>
                        <th scope="col">Titulos</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Lanzamiento</th>
                        <th scope="col">Idioma</th>
                        <th scope="col">Idioma original</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Especiales</th>


                        </thead>

                        <tbody>


                        <?php

                        foreach ($peliculas as $film) {
                            echo " <tr>

                                <th scope=\"row\">{$film['film_id']}</th>
                                <td>{$film['title']}</td> 
                                <td>{$film['description']}</td>                             
                                 <td>{$film['release_year']}</td> 
                                  <td>{$film['language_id']}</td>
                                   <td>{$film['original_language_id']}</td>                                                                 
                                  <td>{$film['rental_rate']}</td>                                 
                                  <td>{$film['rating']}</td>
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