<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <img src="<?php the_field('logo', 'option'); ?>" alt="logo"> </a>
  <button class="navbar-toggler text-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav ml-auto justify-content-end">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul> -->
    <?php

  				      $defaults = array(
                  'container' => 'ul',
  				        'menu_class' => 'navbar-nav ml-auto justify-content-end',
  				        'theme_location' => 'primary-menu',
  				      );

  				      wp_nav_menu( $defaults );
?>
  </div>
</nav>
    </header>
