<?php while(have_posts()) { 
   the_post();
   $banner_url = get_field('banner_image') ? get_field('banner_image') : get_theme_file_uri('/assets/images/banner-fallback.jpg');
   ?>

<div class="hero" style="background-image: url(<?php echo $banner_url; ?>)">
   <div class="hero__inner container">
      <h1 class="hero__title"><?php the_title(); ?></h1>
   </div>
</div>

<?php } ?>