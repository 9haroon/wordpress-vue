<?php 
	  
	  function twentytwentythree_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		}
    function twentytwentythree_child_enqueue_scripts() {
      wp_register_script( 'vue-script', get_stylesheet_directory_uri() . '/assets/vue.global.js', array(),
      '3.3.4',
      array(
          'strategy'  => 'defer',
      ) ); 
      wp_register_script( 'main-script', get_stylesheet_directory_uri() . '/assets/main.js', array('vue-script'),
      '1.0.0',
      array(
          'strategy'  => 'defer',
      ) ); 
      wp_enqueue_script('vue-script');
      wp_enqueue_script('main-script');
    }

    add_action( 'wp_enqueue_scripts', 'twentytwentythree_child_enqueue_styles' );
    add_action( 'wp_enqueue_scripts', 'twentytwentythree_child_enqueue_scripts' );
 ?>