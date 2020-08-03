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
                    <form action="ciudad.php" method="post">


                        <div class="mb-3">
                            <label for="nombreCiudad"> Ciudad</label>
                            <input type="text" name="nombreCiudad" id="nombreCiudad" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="pais"> País</label>
                            <select name="pais" id="pais" class="form-select">
                                <option value="">seleccione un pais</option>

                                <?php
                                foreach ($paises as $pais) {

                                    echo " <option value=\"{$pais["country_id"]}\">{$pais["country"]}</option>";

                                }

                                ?>

                            </select>
                        </div>


                        <div class="mb-3">

                            <button type="submit" name="guardar_ciudad" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>

                    <?php

                    if ( isset($error) ) {
                        echo $error;
                    }


                    if ( isset($ciudadInsertada) ) {

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

                        <th scope="col">ID de la ciudad</th>
                        <th scope="col">Nombre de la ciudad</th>
                        <th scope="col">Nombre del país</th>


                        </thead>

                        <tbody>


                        <?php

                        foreach ($ciudades as $ciudad) {
                            echo " <tr>

                                <th scope=\"row\">{$ciudad['city_id']}</th>
                                <td>{$ciudad['city']}</td>
                                <td>{$ciudad['country']}</td>
                                

                            </tr>";

                        }


                        ?>


                        </tbody>

                    </table>

                </div>


            </div>


</body>
</html>