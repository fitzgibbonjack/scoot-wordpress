<?php $location = get_field('location') ?>

<li class="career container">
   <h3 class="career__title"><?php the_title(); ?></h3>
   <span class="career__location"><?php echo $location['address']; ?></span>
   <button class="career__apply button" type="button">Apply</button>
</li>