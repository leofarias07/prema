<?php get_header(); ?>

<div class="container page mt-6">
  <div class="row">
    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-md-9 conteudo-page">
      <h1><?php the_title(); ?></h1>
  
      <?php the_content(); ?>

      <hr>
    </div>
    <?php endwhile; else: ?>
    <?php endif; ?>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer(); ?>