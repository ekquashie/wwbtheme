<?php 

function wwb_files() {
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Nunito:wght@200;400;700&display=swap');
    wp_enqueue_style('wwb_main_styles', get_stylesheet_uri());
}

function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }

add_action( 'init', 'register_my_menus' );
add_action('wp_enqueue_scripts', 'wwb_files');
?>