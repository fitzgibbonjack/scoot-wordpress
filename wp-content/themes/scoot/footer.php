<aside class="download">
   <div class="container">
      <h2 class="download__title">Sign up and Scoot off today</h2>
      <ul class="download__links">
         <li>
            <img src="<?php echo get_theme_file_uri('/assets/icons/app-store.png') ?>" alt="Get it on Apple app store">
         </li>
         <li>
            <img src="<?php echo get_theme_file_uri('/assets/icons/google-play.png') ?>"
               alt="Get it on Google Play store">
         </li>
      </ul>
   </div>
</aside>

<footer class="footer--main">
   <nav class="footer__nav container">
      <a href="<?php echo site_url() ?>">
         <img class="footer__logo" src="<?php echo get_theme_file_uri('/assets/logo.svg')?>" alt="Scoot logo">
      </a>

      <ul class="footer__links">
         <li><a href="<?php echo site_url("/about") ?>">About</a></li>
         <li><a href="<?php echo get_post_type_archive_link('location') ?>">Locations</a></li>
         <li><a href="<?php echo get_post_type_archive_link('career') ?>">Careers</a></li>
      </ul>

      <ul class="footer__socials">
         <li>
            <a href="#" aria-label="Scoot Facebook page">
               <img src="<?php echo get_theme_file_uri('/assets/icons/facebook.svg') ?>" alt="Facebook logo">
            </a>
         </li>
         <li>
            <a href="#" aria-label="Scoot Twitter account">
               <img src="<?php echo get_theme_file_uri('/assets/icons/twitter.svg') ?>" alt="Twitter logo">
            </a>
         </li>
         <li>
            <a href="#" aria-label="Scoot Instagram page">
               <img src="<?php echo get_theme_file_uri('/assets/icons/instagram.svg') ?>" alt="Instagram logo">
            </a>
         </li>
      </ul>
   </nav>
</footer>

<?php wp_footer() ?>
</body>

</html>