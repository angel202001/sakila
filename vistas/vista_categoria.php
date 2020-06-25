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

            <hr>

            <div class="row">
                <div class="col-md-5">
                    <form action="categoria.php" nethod="get">
                        <div class="mb-3">
                            <label for="categoria">Categoria</label>
                            <select name="categoria" id="categoria" class="form-select">
                                <option value="">Aqui va el listado de categoria</option>

                            </select>

                        </div>


                        <div class="mb-3">
                            <label for="nombreCategoria">Nombre</label>
                            <select name="nombreCategoria" id="nombreCategoria" class="form-select">
                                <option value="">Aqui va el listado de nombre</option>

                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="actuaCategoria">Actualizaciones</label>
                            <input type="text" name="actuaCategoria" id="actuaCategoria" class="form-control">

                        </div>


                        <div class="mb-3">

                            <button type="submit" name="categoria" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>


                </div>


            </div>


        </div>


</body>
</html>