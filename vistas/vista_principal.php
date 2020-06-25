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
                    <form action="index.php" nethod="get">

                        <div class="mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="nombreCiudad">Ciudad</label>
                            <select name="nombreCiudad" id="nombreCiudad" class="form-select">
                                <option value="">Aqui va el listado de la ciudad, desde SQL</option>

                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="email">Correo</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">

                        </div>

                        <div class="mb-3">
                            <label for="password">Contraseña</label>
                            <input type="password" name="pasword" id="pasword" class="form-control"
                                   placeholder="password">

                        </div>

                        <div class="mb-3">

                            <button type="submit" name="guardarPrincipal" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>


                </div>

            </div>

        </div>


</body>
</html>