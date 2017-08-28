<?php

// Imagens dos posts
add_theme_support( 'post-thumbnails' );

// pegar o arquivo marca header
require get_template_directory() . '/inc/marca.php';

// pegar o arquivo metabox.php
require get_template_directory() . '/inc/metabox.php';
require get_template_directory() . '/inc/navbar.php';


function criar_custom_post_cursos(){
    $args_cursos_post_type = array(
        'labels' => array('name' => 'Cursos'),
        'public' => true,
        'supports' => array('title','editor','excerpt','thumbnail','comments'),
        'register_meta_box_cb' => 'cursos_meta_box'  );
    register_post_type( 'cursos' , $args_cursos_post_type );
}
add_action( 'init' , 'criar_custom_post_cursos');

function enqueue_our_required_stylesheets(){
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

// Registrar Navigation Walker
require_once('inc/walker.php');
register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'sitesaae2' ),
) );
// Links úteis rodape
register_nav_menus( array(
    'links-uteis' => __( 'Links Úteis', 'movaVideo' ),
) );

// Registro de sidebar
if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'name' => __( 'Minha Conta'),
        'id' => 'sidebar-login',
        'description' => __( 'Formulario de login para o painel admin.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
    register_sidebar(array(
        'name' => __( 'Regras do Portal'),
        'id' => 'sidebar-regras',
        'description' => __( 'Informações sobre regras do portal.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
    register_sidebar(array(
        'name' => __( 'Sobre Nós Rodape'),
        'id' => 'sobre-nos-rodape',
        'description' => __( 'Um pouco sobre o Blog.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) ); 
    register_sidebar(array(
        'name' => __( 'Instagram'),
        'id' => 'instagram-rodape',
        'description' => __( 'Link do instagram'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );  
    register_sidebar(array(
        'name' => __( 'Sidebar'),
        'id' => 'sidebar-internas',
        'description' => __( 'Elementos da sidebar single e page'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );                    
}

// GALERIA DE IMAGENS
/**
* Add title back to images
*/
function pexeto_add_title_to_attachment( $markup, $id ){
    $att = get_post( $id );
    return str_replace('<a ', '<a title="'.$att->post_title.'" ', $markup);
}
add_filter('wp_get_attachment_link', 'pexeto_add_title_to_attachment', 10, 5);

/* PAGINAÇÃO WORDPRESS */
function wordpress_pagination() {
            global $wp_query;
 
            $big = 999999999;
 
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
            ) );
      }

?>