<?php
  get_header(); ?>

<div id="courses" class="pb-3 pt-5" style="margin-top: 20px">
  <h3 class="curso-h1">Categorias</h3>
  
  <div class="courses">          
    <?php                                                                                           
      while (have_posts()) : the_post();?>
          <a href="<?php echo get_permalink(); ?>" class="link-aula">
            <h4>
              <?php the_title(); ?>
            </h4>  
            <div style="margin-bottom:20px;">
              <?php echo wp_trim_words( get_the_content(), 20)?>
            </div>
          </a>
        <hr>
      <?php endwhile; ?>  

      <div class="paginacao">
        <?php 
        $current_page = max(1,get_query_var('paged'));
          echo paginate_links(array(
            'current' => $current_page,
            'posts_per_page' => 10,
            'prev_text' => __('<<'),
            'next_text' => __('>>'),
        ))
        ?>
    
      </div>
    </div>
  </div>

<?php
get_footer(); ?>