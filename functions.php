<?php
function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');
?>

<?php 
/*******************************************
		Adding CSS and JS Files
*******************************************/
function imtheme_style_enqueue() {
	// wp_enqueue_style('fontAwesomecss',get_template_directory_uri().'/css/font-awesome.css');
	wp_enqueue_style('appcss',get_template_directory_uri().'/css/app.css');
	wp_enqueue_style('swipercss',get_template_directory_uri().'/css/swiper.css');
	// wp_enqueue_style('slickcss',get_template_directory_uri().'/css/slick.css');
	wp_enqueue_style('stylecss',get_template_directory_uri().'/css/style.css');
}

function imtheme_script_enqueue() {
	wp_enqueue_script('jqueryjs', get_template_directory_uri().'/js/jquery-3.1.0.js', array('jquery'), '',true);
	wp_enqueue_script('aos.js', get_template_directory_uri().'/js/aos.js', array('jquery'), '',true);

	wp_enqueue_script('swiperjs', get_template_directory_uri().'/js/swiper.js', array('jquery'), '',true);
	wp_enqueue_script('isotopejs', get_template_directory_uri().'/js/isotope.js', array('jquery'), '',true);
	wp_enqueue_script('modernizerjs', get_template_directory_uri().'/js/modernizer.js', array('jquery'), '',true);
	wp_enqueue_script('magnificpopupjs', get_template_directory_uri().'/js/magnific-popup.js', array('jquery'), '',true);
	wp_enqueue_script('hoverdirjs', get_template_directory_uri().'/js/hoverdir.js', array('jquery'), '',true);
	wp_enqueue_script('portfoliojs', get_template_directory_uri().'/js/portfolio.js', array('jquery'), '',true);
	// wp_enqueue_script('slickjs', get_template_directory_uri().'/js/slick.js', array('jquery'), '',true);
	wp_enqueue_script('alpinejs', get_template_directory_uri().'/js/alpine.min.js', array('jquery'), '',true);

}
	add_action( 'wp_enqueue_scripts', 'imtheme_style_enqueue' );
	add_action( 'wp_enqueue_scripts', 'imtheme_script_enqueue' );	
	
/*******************************************
		Adding Menus to Admin Panel
*******************************************/
/*******************************************
Adding Menus to Admin Panel and 02 Navigation menus to it
*******************************************/
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function amitkk_theme_setup(){
	add_theme_support('menus');
	register_nav_menu( 'primary', 'Primary Header Navigation');
	register_nav_menu( 'secondary', 'Footer Navigation');
}
add_action('init','amitkk_theme_setup'); 

/*******************************************
		Adding Theme Support Functions to Admin Panel
*******************************************/
add_theme_support('custom-background');

add_theme_support('custom-header');

add_theme_support('post-thumbnails');
add_theme_support ('post-formats', array('aside', 'image', 'video'));


/*******************************************
		Creating Sidebar Functions
*******************************************/
function imtheme_widget_setup(){
	register_sidebar(
		array(
			'name'			=> 'Sidebar',
			'id'			=> 'sidebar-1',
			'class'			=>	'custom',
			'description'	=>	'Standard Sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => "</li>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
	));
}
add_action('widgets_init', 'imtheme_widget_setup');


/*******************************************
		Settiing Post Excerpts
*******************************************/
function custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/*******************************************
Settiing Global Avatars for users without Avatars
*******************************************/
add_filter( 'avatar_defaults', 'new_default_avatar' );

function new_default_avatar ( $avatar_defaults ) {
		//Set the URL where the image file for your avatar is located
		$new_avatar_url = get_bloginfo( 'template_directory' ) . '/images/new_default_avatar.png';
		//Set the text that will appear to the right of your avatar in Settings>>Discussion
		$avatar_defaults[$new_avatar_url] = 'Your New Default Avatar';
		return $avatar_defaults;
}

/*******************************************
Threaded comment reply set up
*******************************************/
function xtreme_enqueue_comments_reply() {
	if( get_option( 'thread_comments' ) )  {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'comment_form_before', 'xtreme_enqueue_comments_reply' );


/*******************************************
    Add Custom Images ize
*******************************************/
add_image_size( 'AmitSize', $width = 315, $height = 0, $crop = false );


/*******************************************
Redirection to thank you page
*******************************************/
add_action( 'wp_footer', 'mycustom_wp_footer' );

function mycustom_wp_footer() {
?>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'https://www.1phi618.com/';
}, false );
</script>
<?php
}
?>