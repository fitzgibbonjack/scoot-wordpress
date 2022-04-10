<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
   <header class="header--main">
      <nav class="header__nav container">
         <a href="<?php get_home_url() ?>">
            <img class="nav__logo" src="<?php echo get_theme_file_uri('/assets/logo.svg')?>" alt="Scoot logo">
         </a>

         <button class="nav__toggle" type="button" aria-label="navigation toggle" aria-expanded="false"
            aria-controls="menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
         </button>

         <ul class="nav__links" id="menu">
            <li><a href="#">About</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="#">Careers</a></li>
            <li><button class="nav__cta" type="button">Get Scootin</button></li>
         </ul>
      </nav>
   </header>