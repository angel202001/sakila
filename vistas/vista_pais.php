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
                    <form action="pais.php" method="post">

                        <div class="mb-3">
                            <label for="nombre">Escriba su país</label>
                            <input type="text" name="nombrePais" id="nombrePais" class="form-control">

                        </div>


                        <div class="mb-3">

                            <button type="submit" name="guardar_pais" class="btn btn-primary">Guardar datos</button>

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
                        <th scope="col">Pais</th>


                        </thead>

                        <tbody>


                        <?php

                        foreach ($paises as $pais) {
                            echo " <tr>

                                <th scope=\"row\">{$pais['country_id']}</th>
                                <td>{$pais['country']}</td>
                                

                            </tr>";

                        }


                        ?>


                        </tbody>

                    </table>

                </div>


            </div>


</body>
</html>