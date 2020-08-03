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
                    <form action="direccion.php" method="post">

                        <div class="mb-3">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" id="direccion" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="distrito">Distrito</label>
                            <input type="text" name="distrito" id="distrito" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label for="ciudad">Ciudad</label>
                            <select name="ciudad" id="ciudad" class="form-select">
                                <option value="">Elige una ciudad</option>

                                <?php
                                foreach ($ciudades as $ciudad) {

                                    echo " <option value=\"{$ciudad["city_id"]}\">{$ciudad["city"]}</option>";

                                }

                                ?>

                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="codigoPostal">Codigo postal</label>
                            <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label for="telefono">Telefono</label>
                            <input type="tel" name="telefono" id="telefono" class="form-control">

                        </div>


                        <div class="mb-3">
                            <button type="submit" name="guardar_Direccion" class="btn btn-primary">Guardar datos
                            </button>
                        </div>
                    </form>

                    <?php

                    if ( isset($error) ) {
                        echo $error;
                    }


                    if ( isset($direccionInsertada) ) {

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

                        <th scope="col">Direccion</th>
                        <th scope="col">Distrito</th>
                        <th scope="col">ciudad</th>
                        <th scope="col">Codigo postal</th>
                        <th scope="col">Telefono</th>


                        </thead>

                        <tbody>


                        <?php

                        foreach ($direcciones as $address) {
                            echo " <tr>

                                <th scope=\"row\">{$address['address']}</th>                              
                                <td>{$address['district']}</td>
                                <td>{$address['city']}</td>                               
                                <td>{$address['postal_code']}</td>
                                <td>{$address['phone']}</td>
                                 

                            </tr>";

                        }


                        ?>


                        </tbody>

                    </table>

                </div>


            </div>


</body>
</html>