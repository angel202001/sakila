<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $nombrePagina; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

<h1>Bienvenidos a la pagina <?php echo $nombrePagina; ?></h1>

<ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="actor.php">Actor</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="direccion.php">Direccion</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="ciudad.php">Ciudad</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pais.php">Pais</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="cliente.php">Cliente</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pelicula.php">Pelicula</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="idioma.php">Idioma</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="personal.php">Personal</a>
    </li>


</ul>

</body>
</html>