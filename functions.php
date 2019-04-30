 <?php
//This is where you enable functionalities, libaries and so forth
//Theme supports are added here



// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Theme Support
function wpb_theme_setup()
{
	//Adding Theme Support
	add_theme_support( 'post-thumbnails' );

	//Nav Menus
	register_nav_menus( array( 
		//The double underscore is a localisation function for wordpress.
		//Wrap it around any static text you use.
		'primary' => __('Primary Menu', 'New Theme') 
	) );

	//Post Formats
	add_theme_support( 'post-formats', array('aside', 'gallery'));
}

//add_action() is used to create something
add_action( 'after_setup_theme', 'wpb_theme_setup');

//Function to control how long an excerpt can be
function set_excerpt_length()
{
	return 45;
}

//add_filter is used to edit something (whatever that means)
add_filter( 'excerpt_length', 'set_excerpt_length');

//Widget Locations
function wpb_init_widgets($id)
{
	register_sidebar( array( 
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		 ) );

	register_sidebar( array( 
		'name' => 'Box1',
		'id' => 'box1',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		 ) );

	register_sidebar( array( 
		'name' => 'Box2',
		'id' => 'box2',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		 ) );

	register_sidebar( array( 
		'name' => 'Box3',
		'id' => 'box3',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		 ) );
}

add_action( 'widgets_init', 'wpb_init_widgets');

//Customizer File
// require_once (get_template_directory_uri('../inc/cutomizer.php'));
// $path = realpath(dirname(__FILE__));
// require "$path/inc/customizer.php";

function wpb_customize_register($wp_customize)
{
	//Showcase Section
	$wp_customize->add_section('showcase' , array(
		'title'  => __('Showcase', 'newtheme'),
		'description'  => sprintf(__('Options for Showcase', 'newtheme')),
		'priority'   => 1
	));

	//Showcase Image
	$wp_customize->add_setting('showcase_image', array(
		'default'   => get_bloginfo('template_directory').'/images/showcase.jpg',
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
		'label'    => __('Showcase Image', 'newtheme'),
		'section'  => 'showcase',
		'settings'  => 'showcase_image',
		'priority' => 2 
	)));	

	//Showcase Heading
	$wp_customize->add_setting('showcase_heading', array(
		'default'   => _x( 'Custom Bootstrap Wordpress Theme', 'newtheme' ),
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control('showcase_heading', array(
		'label'    => __('Heading', 'newtheme'),
		'section'  => 'showcase',
		'priority' => 3 
 	));

	//Showcase Text
 	$wp_customize->add_setting('showcase_text', array(
		'default'   => _x( 'Etiam porta sem malesuada magna mollis euismod. Cras mattis 						consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla 				sed consectetur.', 'newtheme' ),
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control('showcase_text', array(
		'label'    => __('Text', 'newtheme'),
		'section'  => 'showcase',
		'priority' => 4 
 	));

	//Button URL
 	$wp_customize->add_setting('btn_url', array(
		'default'   => _x( 'http://oluwadaradaily.com', 'newtheme' ),
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control('btn_url', array(
		'label'    => __('Button URL', 'newtheme'),
		'section'  => 'showcase',
		'priority' => 5 
 	));

	//Button Text
 	$wp_customize->add_setting('btn_text', array(
		'default'   => _x( 'Read More', 'newtheme' ),
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control('btn_text', array(
		'label'    => __('Button Text', 'newtheme'),
		'section'  => 'showcase',
		'priority' => 6 
 	));
}

add_action('customize_register', 'wpb_customize_register');