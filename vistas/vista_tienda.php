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
                    <form action="tienda.php" nethod="get">

                        <div class="mb-3">
                            <label for="nombreTienda">Gerente de la tienda</label>
                            <select name="nombreTienda" id="nombreTienda" class="form-select">
                                <option value="">Aqui va el gerente , desde SQL</option>

                            </select>


                        </div>


                        <div class="mb-3">
                            <label for="direccionTienda">Direccion de la tienda</label>
                            <select name="direccionTienda" id="direccionTienda" class="form-select">
                                <option value="">Aqui va la direccion , desde SQL</option>

                            </select>


                        </div>

                        <div class="mb-3">

                            <button type="submit" name="guardarTienda" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>

                </div>


            </div>


        </div>


</body>
</html>