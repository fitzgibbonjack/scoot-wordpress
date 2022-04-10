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
         <a href="<?php echo site_url() ?>">
            <img class="nav__logo" src="<?php echo get_theme_file_uri('/assets/logo.svg')?>" alt="Scoot logo">
         </a>

         <button class="nav__toggle" type="button" aria-label="navigation toggle" aria-expanded="false"
            aria-controls="menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
         </button>

         <ul class="nav__links" id="menu">
            <li><a href="<?php echo site_url("/about") ?>">About</a></li>
            <li><a href="<?php echo site_url("/locations") ?>">Locations</a></li>
            <li><a href="<?php get_post_type_archive_link('career') ?>">Careers</a></li>
            <li><button class="nav__cta" type="button">Get Scootin</button></li>
         </ul>
      </nav>
   </header>