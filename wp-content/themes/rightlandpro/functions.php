<?php
/**
 * rightlandpro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rightlandpro
 */

if ( ! function_exists( 'rightlandpro_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rightlandpro_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rightlandpro, use a find and replace
		 * to change 'rightlandpro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rightlandpro', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'rightlandpro' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'rightlandpro' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'rightlandpro_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Enable custom header
		 */
		add_theme_support('custom-header');

		// enable woocommerce
		add_theme_support('woocommerce');
		
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		/**
		 * Enable suporrt for Post Formats
		 *
		 * see: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'image',
			'audio',
			'video',
			'gallery',
			'quote',
		) );

		// Add theme support for selective refresh for widgets.
		//add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );


		add_image_size( 'rightlandpro-carousel', 733, 508, array('center','center') );
		add_image_size( 'rightlandpro-case-studies-carousel', 420, 300, array('center','center') );
		add_image_size( 'rightlandpro-case-studies-grid', 370, 390, array('center','center') );
		add_image_size( 'rightlandpro-case-studies-gallery', 370, 290, array('center','center') );
		add_image_size( 'rightlandpro-case-studies-gallery-thumb', 370, 415, array('center','center') );
		add_image_size( 'rightlandpro-member-thumb', 270, 290, array('center','center') );

	}
endif;
add_action( 'after_setup_theme', 'rightlandpro_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rightlandpro_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rightlandpro_content_width', 640 );
}
add_action( 'after_setup_theme', 'rightlandpro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rightlandpro_widgets_init() {
	/**
	* blog sidebar
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'rightlandpro' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="widget mb-40 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title-box mb-30">
                                    <span class="animate-border"></span>
                                    <h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	/**
	* Footer Widget Style 1 er 1st Widget 
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 1', 'rightlandpro' ),
		'id'            => 'footer-widget-style-1-er-first-widget',
		'description'   => esc_html__( '1st Widget of Footer Widget Style 1', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 1 er 2nd Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 1', 'rightlandpro' ),
		'id'            => 'footer-widget-style-1-er-second-widget',
		'description'   => esc_html__( '2nd Widget of Footer Widget Style 1', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 1 er 3rd Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 1', 'rightlandpro' ),
		'id'            => 'footer-widget-style-1-er-third-widget',
		'description'   => esc_html__( '3rd Widget of Footer Widget Style 1', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 1 er 4th Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 1', 'rightlandpro' ),
		'id'            => 'footer-widget-style-1-er-fourth-widget',
		'description'   => esc_html__( '4th Widget of Footer Widget Style 1', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 1 er 5th Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 1', 'rightlandpro' ),
		'id'            => 'footer-widget-style-1-er-fifth-widget',
		'description'   => esc_html__( '5th Widget of Footer Widget Style 1', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );


	/**
	* Footer Widget Style 2 er 1st Widget 
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 2', 'rightlandpro' ),
		'id'            => 'footer-widget-style-2-er-first-widget',
		'description'   => esc_html__( '1st Widget of Footer Widget Style 2', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper footer-2-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 2 er 2nd Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 2', 'rightlandpro' ),
		'id'            => 'footer-widget-style-2-er-second-widget',
		'description'   => esc_html__( '2nd Widget of Footer Widget Style 2', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper footer-2-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 2 er 3rd Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 2', 'rightlandpro' ),
		'id'            => 'footer-widget-style-2-er-third-widget',
		'description'   => esc_html__( '3rd Widget of Footer Widget Style 3', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper footer-2-wrapper mb-30 pl-50 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 2 er 4th Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 2', 'rightlandpro' ),
		'id'            => 'footer-widget-style-2-er-fourth-widget',
		'description'   => esc_html__( '4th Widget of Footer Widget Style 4', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper footer-2-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Top Widget Style 1 
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Widget', 'rightlandpro' ),
		'id'            => 'footer-top-widget-style-1',
		'description'   => esc_html__( '1st Widget of Footer Widget', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Top Widget Style 2
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Widget', 'rightlandpro' ),
		'id'            => 'footer-top-widget-style-2',
		'description'   => esc_html__( '2nd Widget of Footer Top Widget', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	
	/**
	* Footer Widget Style 3 er 1st Widget 
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 3', 'rightlandpro' ),
		'id'            => 'footer-widget-style-3-er-first-widget',
		'description'   => esc_html__( '1st Widget of Footer Widget Style 3', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 3 er 2nd Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 3', 'rightlandpro' ),
		'id'            => 'footer-widget-style-3-er-second-widget',
		'description'   => esc_html__( '2nd Widget of Footer Widget Style 3', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 3 er 3rd Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 3', 'rightlandpro' ),
		'id'            => 'footer-widget-style-3-er-third-widget',
		'description'   => esc_html__( '3rd Widget of Footer Widget Style 3', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 3 er 4th Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 3', 'rightlandpro' ),
		'id'            => 'footer-widget-style-3-er-fourth-widget',
		'description'   => esc_html__( '4th Widget of Footer Widget Style 3', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	
	/**
	* Footer Widget Style 4 er 1st Widget 
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 4', 'rightlandpro' ),
		'id'            => 'footer-widget-style-4-er-first-widget',
		'description'   => esc_html__( '1st Widget of Footer Widget Style 4', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 4 er 2nd Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 4', 'rightlandpro' ),
		'id'            => 'footer-widget-style-4-er-second-widget',
		'description'   => esc_html__( '2nd Widget of Footer Widget Style 4', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 4 er 3rd Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 4', 'rightlandpro' ),
		'id'            => 'footer-widget-style-4-er-third-widget',
		'description'   => esc_html__( '3rd Widget of Footer Widget Style 4', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	/**
	* Footer Widget Style 4 er 4th Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Style 4', 'rightlandpro' ),
		'id'            => 'footer-widget-style-4-er-fourth-widget',
		'description'   => esc_html__( '4th Widget of Footer Widget Style 4', 'rightlandpro' ),
		'before_widget' => '<div id="%1$s" class="footer-wrapper mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );



	/**
	* Service Widget
	*/
	register_sidebar(
		array(
			'name' 			=> esc_html__( 'Service Sidebar', 'rightlandpro' ),
			'id' 			=> 'services-sidebar',
			'description' 	=> esc_html__( 'Widgets in this area will be shown on Service Details Sidebar.', 'rightlandpro' ),
			'before_title' 	=> '<div class="widget-title-box mb-30">
                    <h3 class="widget-title">',
			'after_title' 	=> '</h3></div>',
			'before_widget' => '<div class="service-widget mb-50 %2$s">',
			'after_widget' 	=> '</div>',
		)
	);

	/**
	* Portfolio Widget
	*/
	register_sidebar(
		array(
			'name' 			=> esc_html__( 'Portfolio Sidebar', 'rightlandpro' ),
			'id' 			=> 'portfolio-sidebar',
			'description' 	=> esc_html__( 'Widgets in this area will be shown on Portfolio Details Sidebar.', 'rightlandpro' ),
			'before_title' 	=> '<h3>',
			'after_title' 	=> '</h3>',
			'before_widget' => '<div class="portfolio-sidebar  %2$s">',
			'after_widget' 	=> '</div>',
		)
	);


}
add_action( 'widgets_init', 'rightlandpro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
define('RIGHTLANDPRO_THEME_DIR', get_template_directory() );
define('RIGHTLANDPRO_THEME_URI', get_template_directory_uri());
define('RIGHTLANDPRO_THEME_CSS_DIR', RIGHTLANDPRO_THEME_URI.'/css/');
define('RIGHTLANDPRO_THEME_JS_DIR', RIGHTLANDPRO_THEME_URI.'/js/');
define('RIGHTLANDPRO_THEME_INC', RIGHTLANDPRO_THEME_DIR.'/inc/');

/** 
 * rightlandpro_scripts description
 * @return [type] [description]
 */
function rightlandpro_scripts() {
	/**
	* all css files
	*/
	wp_enqueue_style( 'rightlandpro-fonts', rightlandpro_fonts_url(), array(), '1.0.0' );


	wp_enqueue_style( 'rightlandpro-main', RIGHTLANDPRO_THEME_CSS_DIR.'main.css', array() );
	wp_enqueue_style( 'style-magnific-popup', RIGHTLANDPRO_THEME_CSS_DIR.'style-magnific-popup.css', array() );
	wp_enqueue_style( 'font-awesome', RIGHTLANDPRO_THEME_CSS_DIR.'font-awesome.min.css', array() );
	wp_enqueue_style( 'pe-icon-7-stroke', RIGHTLANDPRO_THEME_CSS_DIR.'pe-icon-7-stroke.css', array() );
	wp_enqueue_style( 'helper', RIGHTLANDPRO_THEME_CSS_DIR.'helper.css', array() );
	wp_enqueue_style( 'owl-carousel', RIGHTLANDPRO_THEME_CSS_DIR.'owl.carousel.min.css', array() );
	wp_enqueue_style( 'owl-theme-default', RIGHTLANDPRO_THEME_CSS_DIR.'owl.theme.default.min.css', array() );



	wp_enqueue_style( 'rightlandpro-style', get_stylesheet_uri() );
	wp_enqueue_style( 'rightlandpro-responsive', RIGHTLANDPRO_THEME_CSS_DIR.'responsive.css', array() );

	if(get_theme_mod( 'rtl_switch',false)) {
		wp_enqueue_style( 'rightlandpro-rtl', RIGHTLANDPRO_THEME_CSS_DIR . 'rtl.css', array() );
		wp_enqueue_style( 'rightlandpro-rtl-responsive', RIGHTLANDPRO_THEME_CSS_DIR . 'rtl-responsive.css', array() );
	}

	// all js

	wp_enqueue_script( 'bootstrap', RIGHTLANDPRO_THEME_JS_DIR.'bootstrap.js', array('jquery'),, '', true );
	wp_enqueue_script( 'owl-carousel', RIGHTLANDPRO_THEME_JS_DIR.'owl.carousel.min.js', array('jquery'),, '', true );
	wp_enqueue_script( 'jquery-scrollTo-min', RIGHTLANDPRO_THEME_JS_DIR.'jquery.scrollTo-min.js', array('jquery'),, '', true );
	wp_enqueue_script( 'magnific-popup', RIGHTLANDPRO_THEME_JS_DIR.'jquery.magnific-popup.min.js', array('jquery'),, '', true );
	wp_enqueue_script( 'jquery-nav', RIGHTLANDPRO_THEME_JS_DIR.'jquery.nav.js', array('jquery'),, '', true );
	wp_enqueue_script( 'rightlandpro-plugins', RIGHTLANDPRO_THEME_JS_DIR.'plugins.js', array('jquery'),, false, true );
	wp_enqueue_script( 'rightlandpro-custom', RIGHTLANDPRO_THEME_JS_DIR.'custom.js', array('jquery'),, false, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rightlandpro_scripts' );

/*
Register Fonts
*/
function rightlandpro_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'rightlandpro' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Cabin:500,600,700' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template helper function for this theme.
 */
require get_template_directory() . '/inc/template-helper.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* include rightlandpro functions file
*/
require_once RIGHTLANDPRO_THEME_INC . 'rightlandpro_navwalker.php';
require_once RIGHTLANDPRO_THEME_INC . 'rightlandpro_customizer.php';
require_once RIGHTLANDPRO_THEME_INC . 'rightlandpro_customizer_data.php';
require_once RIGHTLANDPRO_THEME_INC . 'class-tgm-plugin-activation.php';
require_once RIGHTLANDPRO_THEME_INC . 'rightlandpro_add_plugin.php';


if (!defined('rightlandpro_WOOCOMMERCE_ACTIVED')){
	define( 'rightlandpro_WOOCOMMERCE_ACTIVED', in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) );
}

if(rightlandpro_WOOCOMMERCE_ACTIVED) {
	require_once RIGHTLANDPRO_THEME_INC . 'rightlandpro-woocommerce.php';
}

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function rightlandpro_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'rightlandpro_pingback_header' );

/**
*
* comment section
*
*/
add_filter('comment_form_default_fields', 'rightlandpro_comment_form_default_fields_func');

function rightlandpro_comment_form_default_fields_func($default){

	unset($default['author']);
	unset($default['email']);
	unset($default['url']);
	unset($default['cookies']);

		$default['clients_commnet'] = '
            <div class="col-xl-12">
                <div class="contact-icon contacts-message">
                    <textarea name="comments" id="comments" cols="30" rows="10" placeholder="'.esc_attr__('Your Comments....','rightlandpro').'"></textarea>
                </div>
            </div>

            ';


		$default['author'] = '
			<div class="col-xl-12">
				<div class="contact-icon contacts-name">
					<input type="text" name="author" placeholder="'.esc_attr__('Your Name....','rightlandpro').'">
				</div>
			</div>


            ';
		$default['email'] = '
			<div class="col-xl-12">
				<div class="contact-icon contacts-email">
					<input type="text" name="email" placeholder="'.esc_attr__('Your Email....','rightlandpro').'">
				</div>
			</div>
			';

		$default['url'] = '
			<div class="col-xl-12">
				<div class="contact-icon contacts-website">
					<input type="text" name="url" placeholder="Your Website....">
				</div>
			</div>
		';


	return $default;
}

add_filter('comment_form_defaults', 'rightlandpro_comment_form_defaults_func');

function rightlandpro_comment_form_defaults_func($info){
	if( !is_user_logged_in() ){
		$info['comment_field'] = '';
		$info['submit_field'] = '<div class="col-xl-12">%1$s %2$s</div>';
	}else {
		$info['comment_field'] = '
            <div class="col-xl-12">
				<div class="contact-icon contacts-message">
             		<textarea id="comment" name="comment" cols="30" rows="10" placeholder="'.esc_attr__('Your Comments....','rightlandpro').'"></textarea>
            	</div>
            </div>                    
                                                ';
        $info['submit_field'] = '<div class="col-xl-12">%1$s %2$s</div>';
	}


	$info['submit_button'] = '<button class="btn" type="submit"> <span class="btn-text">'.esc_html__('Post Comment','rightlandpro').' <i class="far fa-long-arrow-right"></i></span></button>
	';

	$info['title_reply_before'] = '<div class="post-comments-title">
										<h2>
									';
	$info['title_reply_after'] = '</h2></div>';
	$info['comment_notes_before'] = '';
	// $info['logged_in_as'] = '<div class="col-xl-12"> <p class="logged-in-as">' . sprintf(
	// 		/* translators: 1: edit user link, 2: accessibility text, 3: user name, 4: logout URL */
	// 								__( '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>' ),
	// 		get_edit_user_link(),
	// 		/* translators: %s: user name */
	// 								esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.' ), $user_identity ) ),
	// 		$user_identity,
	// 		wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
	// 	) . '</p></div>';

	return $info;
}

if( !function_exists('rightlandpro_comment') ) {
	function rightlandpro_comment($comment, $args, $depth) {
		$GLOBAL['comment'] = $comment;
		extract($args, EXTR_SKIP);
		$args['reply_text'] = '<i class="fas fa-reply"></i> Reply';
		$replayClass = 'comment-depth-' . esc_attr($depth);
		?>
			<li id="comment-<?php comment_ID(); ?>" <?php comment_class($replayClass); ?>>
				<div class="comments-box">
					<div class="comments-avatar">
						<?php print get_avatar($comment, 102, null, null, array('class'=> array())); ?>
					</div>
					<div class="comments-text">
						<div class="avatar-name">
							<h5><?php print get_comment_author_link(); ?></h5>
							<span><?php comment_time( get_option('date_format') ); ?></span>
							<?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))); ?>
						</div>
						<?php comment_text(); ?>
						
					</div>
				</div>
		<?php
	}
}

/**
* shortcode supports for removing extra p, spance etc
*
*/
add_filter( 'the_content', 'rightlandpro_shortcode_extra_content_remove' );
/**
 * Filters the content to remove any extra paragraph or break tags
 * caused by shortcodes.
 *
 * @since 1.0.0
 *
 * @param string $content  String of HTML content.
 * @return string $content Amended string of HTML content.
 */
function rightlandpro_shortcode_extra_content_remove( $content ) {

    $array = array(
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']'
    );
    return strtr( $content, $array );

}

/**
 * [ocdi_import_files description]
 * @return [type] [description]
 */
function rightlandpro_import_files() {
    return array(
        array(
            'import_file_name'           => esc_html__('rightlandpro Demo Data', 'rightlandpro'),
            'import_file_url'            => 'http://bdevs.net/plugins/wp/rightlandpro/demo_data/rightlandpro-demo-content.xml',
            'import_widget_file_url'     => 'http://bdevs.net/plugins/wp/rightlandpro/demo_data/rightlandpro-widget.json',
            'import_customizer_file_url' => 'http://bdevs.net/plugins/wp/rightlandpro/demo_data/rightlandpro-customizer.dat',
            'import_preview_image_url'   => 'http://www.bdevs.net/ocdi/preview.jpg',
            'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'rightlandpro' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'rightlandpro_import_files' );

/**
 * [ocdi_after_import_setup description]
 * @return [type] [description]
 */
function ocdi_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import_setup' );

// rightlandpro_search_filter_form
if(!function_exists('rightlandpro_search_filter_form')){
  function rightlandpro_search_filter_form( $form ) {
    
    $form = sprintf( 
    	'<div class="sidebar-form"><form class="search-form" action="%s" method="get">
      	<input type="text" value="%s" required name="s" placeholder="%s">
      	<button type="submit"> <i class="fas fa-search"></i>  </button>
		</form></div>',
		esc_url( home_url('/')),
		esc_attr( get_search_query()),
		esc_html__('Search','rightlandpro')
	);

    return $form;
  }
  add_filter( 'get_search_form','rightlandpro_search_filter_form');
}

function _html_markup_render( $markup ){
	return $markup;
}

add_action('admin_enqueue_scripts', 'rightlandpro_admin_custom_scripts');
function rightlandpro_admin_custom_scripts(){
	wp_enqueue_media();
	wp_register_script('rightlandpro-admin-custom', get_template_directory_uri().'/inc/js/admin_custom.js', array('jquery'), '', true);
	wp_enqueue_script('rightlandpro-admin-custom');

}


// enable_rtl
function enable_rtl(){
	if(get_theme_mod( 'rtl_switch',false)) {
		return ' dir="rtl" ';
	}
	else{
		return '';
	}
}