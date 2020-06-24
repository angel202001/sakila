<?php include_once "partes/parte_head.php" ;?>


<body>

<!-- Barra superior -->

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Sakila
    </a>
</nav>

<!-- Contenido -->

<div class="container-fluid">

    <div class="row">

        <div class="col-md-2">
            <?php include_once "partes/parte_menu.php";?>
        </div>

        <div class="col-md-7">
            <h3><?php echo $nombrePagina;?></h3>


            <hr>

            <div class="row">
              <div class="col-md-5">

                <form action="actor.php" nethod="get">

                    <div class="mb-3">
                        <label for ="nombreActor">Primer nombre del actor</label>
                        <input type="text" name="nombreActor" id="nombreActor" class="form-control">

                    </div>


                    <div class="mb-3">
                        <label for ="apellidoActor">Apellido del actor</label>
                        <input type="text" name="apellidoActor" class="form-control">

                    </div>

                    <div class="mb-3">

                        <button type="submit" name="guardar_actor"  class="btn btn-primary">Guardadr datos</button>

                    </div>

                </form>

               </div>
            </div>
        </div>


    </div>


</body>
</html>