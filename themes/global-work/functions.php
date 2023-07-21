<?php

function my_script_init()
{
  wp_enqueue_style('my', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime( get_theme_file_path( './assets/css/main.css' )), 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), filemtime( get_theme_file_path( 'js/script.js' )), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

function get_main_title() {
  if ( is_singular('post')): 
    $category_obj = get_the_category();
    return $category_obj[0]->name;
  elseif ( is_page()):
    return get_the_title();
  elseif ( is_category()):
    return single_cat_title();
  endif;
}


register_post_type(
  'news',
  array(
    'supports' => array('title', 'editor', 'thumbnail'),
    add_theme_support( 'post-thumbnails' )
  )
  );
