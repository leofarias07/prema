<?php get_header(); ?>

<div class="container conteudo-categoria">
  <div class="row">
    <div class="row">
      <h4><?php single_cat_title(' Navegando na categoria '); ?></h4>

    </div>
       <hr>
    <div class="col-md-9" id="posts-games">
      
      <!--categoria-->
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>     
      <div class="media mt-3">
        <div class="media-left">
          <a href="<?php the_permalink(); ?>">
             <?php the_post_thumbnail('thumbnail-noticias', array('class' => 'd-flex align-self-start mr-3'));?>
          </a>
        </div>
        <div class="media-body">
          <h5 class="mt-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          <p class="visible-lg"><?php echo rwmb_meta('resumo'); ?></p>
        </div>
      </div>
    <?php endwhile; else: ?>
    <?php endif; ?>
    <!--/fim categoria-->
    <br>
    <?php wordpress_pagination(); ?>

    </div>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer(); ?>