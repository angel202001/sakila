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
                    <form action="ciudad.php" nethod="get">


                        <div class="mb-3">
                            <label for="numeroCity"> Ciudad</label>
                            <select name="numeroCity" id="numeroCity" class="form-select">
                                <option value="">Aqui va el id de ciudad , desde SQL</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="selectorCiudad">Selecciona tu País</label>
                            <select name="selectorCiudad" id="selectorCiudad" class="form-select">
                                <option value="">Aqui va el id de pais , desde SQL</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="actualizacion">Ultima actulización</label>
                            <input type="text" name="actualizacion" id="actualizacion" class="form-control">

                        </div>


                        <div class="mb-3">

                            <button type="submit" name="numeroCiudad" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>

                </div>

            </div>


        </div>


</body>
</html>