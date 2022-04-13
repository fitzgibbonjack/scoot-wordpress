<article class="question">
   <header class="question__header">
      <h4 class="question__title"><?php echo get_the_title(); ?></h4>
      <div class="question__toggle" aria-hidden="true">
         <?php echo get_svg('/assets/icons/chevron.svg'); ?>
      </div>
   </header>

   <p class="question__answer"><?php echo get_the_content(); ?></p>
</article>