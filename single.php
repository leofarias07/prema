<?php get_header(); ?>

<div class="container single">
  <div class="row">
    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-md-9 conteudo-single">
      <h1><?php the_title(); ?></h1>
      <hr>
      <?php the_content(); ?>
      <hr>
    
    <?php endwhile; else: ?>
    <?php endif; ?>

    <div class="comentario title">
      <h1>Comentario</h1>

    </div>
    <?php comments_template(); ?>

    </div>
    
    
    <?php get_sidebar(); ?>
   

    
  </div>
</div>

<?php get_footer(); ?>