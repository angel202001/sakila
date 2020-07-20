<nav class="nav flex-column">

    <?php

    $paginasMenu = [
        "index"     => ["Inicio", "fas fa-home"],
        "actor"     => ["Actor", "fas fa-user-tie"],
        "direccion" => ["Dirección", "fas fa-map-marker-alt"],
        "ciudad"    => ["Ciudad", "fas fa-city"],
        "pais"      => ["País", "far fa-flag"],
        "cliente"   => ["Cliente", "fas fa-hands-helping"],
        "categoria" => ["Categoria", "fas fa-tags"],
        "pelicula"  => ["Película", "fas fa-film"],
        "idioma"    => ["Idioma", "fas fa-globe-americas"],
        "personal"  => ["Personal", "fas fa-users"],
        "tienda"    => ["tienda", "fas fa-store"]


    ];
    $url = $_SERVER['REQUEST_URI'];
    foreach ($paginasMenu as $nombreArchivo => $pagina) {
        $paginaActual = '';
        if (strpos($url, $nombreArchivo)) {

            $paginaActual = 'activo';
        }
        $icono = $pagina[1];
        $textoPagina = $pagina[0];

        echo "<a class=\"nav-link {$paginaActual}\" href=\"{$nombreArchivo}.php\">
        <i class=\"{$icono}\" ></i>
     {$textoPagina}
    </a>";

    }

    ?>


</nav>



