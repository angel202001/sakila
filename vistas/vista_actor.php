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

                    <form action="actor.php" method="post">

                        <div class="mb-3">
                            <label for="nombreActor">Primer nombre del actor</label>
                            <input type="text" name="nombreActor" id="nombreActor" class="form-control"
                                   value="<?= $nombreActor ?>">

                        </div>


                        <div class="mb-3">
                            <label for="apellidoActor">Apellido del actor</label>
                            <input type="text" name="apellidoActor" class="form-control" value="<?= $apellidoActor ?>">

                        </div>

                        <div class="mb-3">

                            <button type="submit" name="guardar_actor" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>

                   <?php

                    if ( isset($error) ) {
                        echo $error;
                    }


                    if ( isset($mensaje) ) {

                        echo $mensaje;
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>

                        </thead>

                        <tbody>


                        <?php

                        foreach ($actores as $actor) {
                            echo " <tr>

                                <th scope=\"row\">{$actor['actor_id']}</th>
                                <td>{$actor['first_name']}</td>
                                <td>{$actor['last_name']}</td>

                            </tr>";

                        }


                        ?>


                        </tbody>

                    </table>

                </div>


            </div>


        </div>


    </div>

    <?php include_once "partes/parte_food.php"; ?>
