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
            <img class="header__logo" src="<?php echo get_theme_file_uri('/assets/logo.svg')?>" alt="Scoot logo">
         </a>

         <button class="header__toggle" type="button" aria-label="headerigation toggle" aria-expanded="false"
            aria-controls="menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
         </button>

         <ul class="header__links" id="menu">
            <li><a href="<?php echo site_url("/about") ?>">About</a></li>
            <li><a href="<?php echo get_post_type_archive_link('location') ?>">Locations</a></li>
            <li><a href="<?php echo site_url("/careers") ?>">Careers</a></li>
            <li><?php get_template_part('template_parts/cta'); ?></li>
         </ul>
      </nav>
   </header>