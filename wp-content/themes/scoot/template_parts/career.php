<?php $locations = get_field('related_locations'); ?>

<li class="career container">
   <h3 class="career__title"><?php the_title(); ?></h3>
   <span class="career__location"><?php foreach($locations as $location) { echo get_the_title($location); } ?></span>
   <a class="button career__apply" href="<?php echo get_post_permalink(); ?>">Apply</a>
</li>