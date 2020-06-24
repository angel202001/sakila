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

        <div class="col-md-10">
            <h3><?php echo $nombrePagina;?></h3>

        </div>


    </div>


</div>




</body>
</html>