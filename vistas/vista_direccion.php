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

        <div class="col-md-7">
            <h3><?php echo $nombrePagina; ?></h3>


            <div class="row">
                <div class="col-md-5">
                    <form action="direccion.php" nethod="get">

                        <div class="mb-3">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" id="direccion" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="direccion2">Direccion2</label>
                            <input type="text" name="direccion2" id="direccion2" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label for="distrito">Distrito</label>
                            <input type="text" name="distrito" id="distrito" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label for="ciudad">Ciudad</label>
                            <select name="ciudad" id="ciudad" class="form-select">
                                <option value="">Aqui va el listado de la ciudad, desde SQL</option>

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
                            <label for="ubicacion">Ubicacion</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="guardarDireccion" class="btn btn-primary">Guardar datos</button>
                        </div>
                    </form>

                </div>


            </div>


        </div>


</body>
</html>