<?php

function enqueue_function(){


    wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    // wp_enqueue_style('googlefont','https://fonts.googleapis.com/css?family=Crimson+Text|EB+Garamond|Fjalla+One|Libre+Baskerville|Palanquin&display=swap');
    wp_enqueue_style('purecss','https://unpkg.com/purecss@1.0.0/build/base-min.css');
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css' );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js");
    wp_enqueue_script('myscript', get_template_directory_uri() . '/js/myscript.js', array('jquery'), '1.0.0', true);


}

add_action( 'wp_enqueue_scripts', 'enqueue_function' );

function register_resources(){

    //register main menu
    register_nav_menu('main-menu', 'Main Menu');

    //register project
	    $args = array(
        'public' => true,
        'label'  => 'Projects',
        // 'show_in_rest'=>true,
        // 'supports'=>array('title','editor')
      );
      register_post_type( 'project', $args );
  

    //   register section taxonomy
      $args = array(
      'hierarchical'=> true,
		  'labels' => array(
			'name' => 'Genres',
			'singular_name' => 'Genre',
			'menu_name' => 'Genres'
      ),
      'public' => true,
      'show_in_nav_menues' => true
      );
      register_taxonomy('genre','work',$args);
        
}

add_action('init','register_resources');

// Prevent WP from adding <p> tags on all post types
function disable_wp_auto_p( $content ) {
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  return $content;
}
add_filter( 'the_content', 'disable_wp_auto_p', 0 );



?>