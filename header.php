<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name');?><?php wp_title();?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/magnific-popup.css">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">    
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <?php wp_head();?> 
  </head>
  <body>
    <section class="bem-vindos">

    <header class="cabecalho fixed-top" role="banner">
    <section class="barra-superior">
    <div class="container">
      <div class="row">
      
    
      <div class="col-12">
     <i class="fa fa-phone-square mr-1" aria-hidden="true"></i> (99) 3421-4463 <i class="fa fa-envelope ml-3 mr-1" aria-hidden="true"></i>prema1000@hotmail.com
      </div>
      </div>
      </div>
    </section>
  <div class="container">
     <a href="<?php bloginfo('home'); ?>" class="logo">
         <img src="<?php bloginfo('template_url')?>/imagens/logo.png" alt="logotipo">
      </a>

   
      <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-bars" aria-hidden="true"></i>
      </button>
    

  


  <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary" id="menuprincipal">
    <!--<button class="boton-menu hidden-md-up" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>-->
 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <?php
      wp_nav_menu( array(
        'theme_location'    => 'navbar',
        'container'         => false,
        'menu_class'        => 'collapse',
        'fallback_cb'       => '__return_false',
        'items_wrap'        => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
        'depth'             => 2,
        'walker'            => new b4st_walker_nav_menu()
      ) );
    ?>
    <?php get_template_part('navbar-search'); ?>
  </div>
</nav>
      </div>
    </header>
  </section>
