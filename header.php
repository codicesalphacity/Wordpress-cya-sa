<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../favicon.ico">

    <title>CyA, Controles y Automatización</title>
   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>   

    <!-- Custom styles for this template -->    

    <script src="js/ie-emulation-modes-warning.js"></script>
    
	 <!--<style>
      #map-container { height: 300px }
    </style>-->
    <?php wp_head(); ?>
  </head>

  <body>

    <div class="container">
      <!-- Static navbar -->
      <!--<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">            
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Inicio <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Nosotros</a></li>
              <li><a href="../navbar-fixed-top/">Aliados</a></li>
      			  <li><a href="../navbar-fixed-top/">Proyectos</a></li>
      			  <li><a href="../navbar-fixed-top/">Portafolio</a></li>
      			  <li><a href="../navbar-fixed-top/">Clientes</a></li>
      			  <li><a href="../navbar-fixed-top/">Blog</a></li>
      			  <li><a href="../navbar-fixed-top/">Contactos</a></li>
            </ul>
          </div>
        </div>
      </nav>-->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                      <img src="<?php echo get_template_directory_uri() ?>/img/logo.png">
                  </a>
          </div>
              <?php
                  wp_nav_menu( array(
                      'menu'              => 'primary',
                      'theme_location'    => 'primary',
                      'depth'             => 2,
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
                      'menu_class'        => 'nav navbar-nav',
                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                      'walker'            => new wp_bootstrap_navwalker())
                  );
              ?>
          </div>
      </nav>