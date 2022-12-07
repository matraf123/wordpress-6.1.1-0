<section id="courses" class="pb-3 pt-5">
  <h1 class="curso-h1">Matérias</h1>
  
  <div class="courses">
    <?php
      $args = array(
        'posts_per_page'=> 6
      );
      $query = new WP_Query($args);
      while ($query->have_posts()) : $query->the_post();?>
  
          <a href="<?php echo get_permalink(); ?>">
            <h1>
              <?php the_title(); ?>
            </h1>  
          </a>
          <hr>
        
        <?php endwhile; ?>
    </div>
  </div>