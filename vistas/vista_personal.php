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
                    <form action="personal.php" nethod="get">

                        <div class="mb-3">
                            <label for="nombrePersonal">Nombre</label>
                            <input type="text" name="nombrePersonal" id="nombrePersonal" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="apellicoPersonal">Apellido</label>
                            <input type="text" name="apellidoPersonal" id="apellidoPersonal" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="direccionPersonal">Direccion</label>
                            <select name="direccionPersonal" id="direccionPersonal" class="form-select">
                                <option value="">Aqui va el listado de direccion del personal, desde SQL</option>

                            </select>

                        </div>


                        <div class="mb-3">
                            <label for="pinturaPersonal">Pintura</label>
                            <input type="text" name="pinturaPersonal" id="pinturaPersonal" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="correoPersonal">Escriba su correo</label>
                            <input type="text" name="correoPersonal" id="pinturaPersonal" class="form-control" placeholder="Email">

                        </div>



                        <div class="mb-3">
                            <label for="tiendaPersonal">Tiendas</label>
                            <select name="tiendaPersonal" id="tiendaPersonal" class="form-select">
                                <option value="">Aqui va el listado de la tienda, desde SQL</option>

                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="usuarioPersonal">Escriba su usuario</label>
                            <input type="text" name="usuarioPersonal" id="usuarioPersonal" class="form-control">

                        </div>


                        <div class="mb-3">

                            <button type="submit" name="guardarPersonal" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>

                </div>


            </div>


        </div>


</body>
</html>