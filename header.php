<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roger Trelles</title>
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css" rel="stylesheet">  
  </head>
  <body>

    <!--Menú-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">Roger Trelles</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'menu-principal',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'navbarSupportedContent',
                        'menu_class'        => 'nav navbar-nav ml-auto',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>


                <!--
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mentorias.html">Mentorías</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contenido
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog.php">blog</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="resumenes.html">Resúmenes de libros</a></li>
                                <li><a class="dropdown-item" href="manuales.html">Manuales propios</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                </div>
                -->
            </div>
        </div>
    </nav>
    <!--Menú-->