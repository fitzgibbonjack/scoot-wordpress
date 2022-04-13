<article class="question">
   <header class="question__header">
      <h4 class="question__title"><?php echo get_the_title(); ?></h4>
      <button class="question__toggle" type="button" aria-hidden="true">
         <?php echo get_svg('/assets/icons/chevron.svg'); ?>
      </button>
   </header>

   <p class="question__answer"><?php echo get_the_content(); ?></p>
</article>