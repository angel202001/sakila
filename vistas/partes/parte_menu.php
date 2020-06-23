<nav class="nav flex-column">

<?php

 $paginasMenu = [
         "index" => ["Inicio", "fas fa-home"],
         "actor" => ["Actor", "fas fa-user-tie"],
        "direccion" => ["Dirección", "fas fa-map-marker-alt"],
        "ciudad" => ["Ciudad", "fas fa-city"],
        "pais" => ["País", "far fa-flag"],
        "cliente" => ["Cliente", "fas fa-hands-helping"],
        "pelicula" => ["Pelicula", "fas fa-film"],
        "idioma" => ["Idioma", "fas fa-globe-americas"],
        "personal" => ["Personal", "fas fa-users"]


 ];

 foreach ($paginasMenu as $nombreArchivo => $pagina) {
     $icono = $pagina[1];
     $nombrePagina = $pagina[0];

     echo "<a class=\"nav-link\" href=\"{$nombreArchivo}.php\">
        <i class=\"{$icono}\" ></i>
     {$nombrePagina}
    </a>";

  }

?>


</nav>


