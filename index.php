
<?php get_header();?>

<section class="slider">
  
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">

   <?php
            $posts_slides = new WP_Query(array(
                'category_name' => 'slide',
                'posts_per_page' => 3
              ));
            $i = 1;
          while ($posts_slides->have_posts()) : $posts_slides->the_post();
          
     ?>
       <div class="carousel-item <?php if ($i == 1) echo 'active';?>">
            <?php the_post_thumbnail('thumbnail-slide', array('class' => 'img-responsive'));?>
             
        </div>
         <?php $i++; endwhile; wp_reset_postdata();?>
            
          </div>


  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<section class="sobre mt-3">
   
      
      <div class="title mt-3">
        <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="mt-2">Sobre a Prema Pré-Moldados</h1>
          </div>
        </div>
        </div>
      </div>
     
    
  <div class="container">
   
    <div class="row">
      <div class="col-6 mt-5">

            <?php
            $posts_noticia = new WP_Query(array(
                'category_name' => 'sobre',
                'posts_per_page' => 1
              ));
          
          while ($posts_noticia->have_posts()) : $posts_noticia->the_post();
          
           ?>
        <p class="p-sobre"><?php the_content();?></p>
      </div>
      <div class="col-6 mt-5">
        <?php the_post_thumbnail('thumbnail-sobre', array('class' => 'img-responsive img-thumbnail'));?>
      </div>
       <?php endwhile; wp_reset_postdata();?>

    </div>
  </div>
</section>
<section class="sobre mt-3">
   
      
      <div class="title mt-3">
        <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="mt-2">Serviços</h1>
          </div>
        </div>
        </div>
      </div>
     
    
  <div class="container">
   
    <div class="row">
  <div id="carouselExampleIndicators" class="carousel slide ml-5 mt-4" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="item-c mr-5">
      <img class="rounded-circle" src="<?php bloginfo('template_url')?>/imagens/baseagua.png" alt="First slide" height="250" width="250">
      <h3>Montagem de Base de Caixa D'agua</h3>
       </div>
       <div class="item-c mr-5">
      <img class="rounded-circle" src="<?php bloginfo('template_url')?>/imagens/baseagua.png" alt="First slide" height="250" width="250">
       <h3>Montagem de Base de Caixa D'agua</h3>
       </div>
       <div class="item-c mr-5">
      <img class="rounded-circle" src="<?php bloginfo('template_url')?>/imagens/baseagua.png" alt="First slide" height="250" width="250">
       <h3>Montagem de Base de Caixa D'agua</h3>
      </div>
     
    </div>
    <div class="carousel-item">
         <div class="item-c mr-5">
      <img class="rounded-circle" src="<?php bloginfo('template_url')?>/imagens/baseagua.png" alt="First slide" height="250" width="250">
      <h3>Montagem de Base de Caixa D'agua</h3>
       </div>
       <div class="item-c mr-5">
      <img class="rounded-circle" src="<?php bloginfo('template_url')?>/imagens/baseagua.png" alt="First slide" height="250" width="250">
      <h3>Montagem de Base de Caixa D'agua</h3>
       </div>
       <div class="item-c mr-5">
      <img class="rounded-circle" src="<?php bloginfo('template_url')?>/imagens/baseagua.png" alt="First slide" height="250" width="250">
      <h3>Montagem de Base de Caixa D'agua</h3>
      </div>
    </div>
    <div class="carousel-item">
       <div class="item-c mr-5">
      <img class="rounded-circle" src="<?php bloginfo('template_url')?>/imagens/baseagua.png" alt="First slide" height="250" width="250">
      <h3>Montagem de Base de Caixa D'agua</h3>
       </div>
       <div class="item-c mr-5">
      <img class="rounded-circle" src="<?php bloginfo('template_url')?>/imagens/baseagua.png" alt="First slide" height="250" width="250">
      <h3>Montagem de Base de Caixa D'agua</h3>
       </div>
       <div class="item-c mr-5">
      <img class="rounded-circle" src="<?php bloginfo('template_url')?>/imagens/baseagua.png" alt="First slide" height="250" width="250">
      <h3>Montagem de Base de Caixa D'agua</h3>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
  </div>
</section>

<section class="sobre mt-3">
   
      
      <div class="title mt-3">
        <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="mt-2">Prema Solar</h1>
          </div>
        </div>
        </div>
      </div>
     
    
  <div class="container">
   
    <div class="row">
      <div class="col-6 mt-5">
        <img src="<?php bloginfo('template_url')?>/imagens/solar.jpeg" height="300" width="500">
      </div>
      <div class="col-6 mt-5">
        <p class="p-sobre">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker</p>
      </div>
    

    </div>
  </div>
</section>

<div class='embed-container maps mt-4'>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d908.340886257516!2d-43.351691203042385!3d-4.84493469927376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78e91939ea30851%3A0x453760e8634898b7!2sAv.+Santos+Dumont%2C+717+-+Matadouro+Novo%2C+Caxias+-+MA!5e1!3m2!1spt-BR!2sbr!4v1480619390492" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>



<?php get_footer();?>