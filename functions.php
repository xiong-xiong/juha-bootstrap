<?php

//Activate scripts here
function my_theme_scripts() {
        //Generic scripts
        wp_enqueue_script( 'jst-scripts', get_template_directory_uri() . '/js/jst-scripts.js', array( 'jquery' ), '1.0.0', true );
    
        //Scripts related to rest API
        wp_enqueue_script('xiongRest', get_template_directory_uri() . '/js/rest-frontpage.js', array( 'jquery' ), NULL, 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );



/*
 * REGISTER SIDEBARS/WIDGET AREAS
 *
 */
function arphabet_widgets_init() {


//LANGUAGE SIDEBAR
    register_sidebar( array(
        'name'          => 'Kielivalinta',
        'id'            => 'language_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

//POST SIDEBAR
	register_sidebar( array(
		'name'          => 'post_sidebar',
		'id'            => 'post_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

//RIGHT SIDEBAR
register_sidebar( array(
        'name'          => 'right_sidebar',
        'id'            => 'right_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );


}
add_action( 'widgets_init', 'arphabet_widgets_init' );




//Create Nav Menu
//if (function_exists('register_nav_menus')) {
//	register_nav_menus (array( 'main-nav' => 'Header Navigation' ));
//	register_nav_menus (array( 'secondary' => 'City Navigation' ));
//}

function register_my_menu() {
  register_nav_menu('paanavi',__( 'Paanavi' ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//Tuki artikkelikuvien eri kokoisille kuville
if (function_exists('add_theme_support')) {
	add_theme_support( 'post-thumbnails' ); 
}

if (function_exists('add_image_size')) {
//KUVAKOOT
	add_image_size( 'banner',960 ,250, true );
	add_image_size( 'square',200 ,200, true );
	// true = crop image 
}


//Ingressin pituuden rajaaminen 15 sanaan
function new_excerpt_length($length) {
	return 12;
}
add_filter('excerpt_length', 'new_excerpt_length');







?>