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
                    <form action="cliente.php" nethod="get">


                        <div class="mb-3">
                            <label for="tiendaCliente"> Tinda</label>
                            <select name="tiendaCliente" id="tiendaCliente" class="form-select">
                                <option value="">Selecciona el número de una tienda</option>

                                <?php
                                foreach ($informacionTiendas as $tienda) {

                                    echo " <option value=\"{$tienda["store_id"]}\">{$tienda["address_id"]}</option>";

                                }

                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nombreCliente">Nombre</label>
                            <input type="text" name="nombreCliente" id="nombreCliente" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="apellicoCliente">Apellido</label>
                            <input type="text" name="apellidoCliente" id="apellidoCliente" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="nombreEmail">Escriba su correo</label>
                            <input type="text" name="nombreEmail" id="nombreEmail" class="form-control"
                                   placeholder="Email">

                        </div>

                        <div class="mb-3">
                            <label for="direccionCliente"> Dirección</label>
                            <select name="direccionCliente" id="direccionCliente" class="form-select">
                                <option value="">Selecciona una dirección</option>

                                <?php
                                foreach ($direcciones as $direccion) {

                                    echo " <option value=\"{$direccion["address_id"]}\">{$direccion["address"]}</option>";

                                }

                                ?>

                            </select>
                        </div>


                        <div class="mb-3">

                            <button type="submit" name="guardarCliente" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>


                </div>


            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">


                    <table class="table">
                        <thead>


                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Dirección</th>


                        </thead>

                        <tbody>


                        <?php

                        foreach ($clientes as $customer) {
                            echo " <tr>

                               
                                <td>{$customer['first_name']}</td>
                                <td>{$customer['last_name']}</td>                               
                                <td>{$customer['address']}</td>
                                

                            </tr>";

                        }


                        ?>


                        </tbody>

                    </table>

                </div>


            </div>


</body>
</html>