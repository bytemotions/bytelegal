<?php
/**
 * Bytemotions Attorneys Theme's functions and definitions
 *
 * @package bytelegal
 * @since Bytemotions Theme 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'bytelegal_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnmy_registerails.
     */
    function bytelegal_setup() {
    
        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        //load_theme_textdomain( 'bytelegal_setup', get_template_directory() . '/languages' );
    
        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );
    
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
    
        /**
         * Add support for custom navigation menus.
         */
        register_nav_menus( array(
            'header' => __('Header Holder', 'bytelegal' ),
            'social' => __('Social Holder', 'bytelegal' ),
            'footer' => __('Footer Holder', 'bytelegal' )		
        ) );

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
} // bytelegal_setup

add_action( 'after_setup_theme', 'bytelegal_setup' );

function bytelegal_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'sidebar-widgets',
            'name'          => __( 'Sidebar Widegts Area' ),
            'description'   => __( 'Sidebar bytemotion\'s area for pleacing great widgets.' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>'            
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */
    /* register_sidebar(
        array(
            'id'            => 'header-widgets',
            'name'          => __( 'Headers Widegts Area' ),
            'description'   => __( 'Header bytemotion\'s area for pleacing great widgets.' ),
            'before_widget' => '<span id="%1$s" class="widget %2$s">',
            'after_widget'  => '</span>'            
        )
    ); 
    */   
} // bytelegal_sidebars

add_action( 'widgets_init', 'bytelegal_sidebars' );

function bytelegal_add_theme_scripts() {
    
    wp_enqueue_style( 'bootstrap'   , get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.1', 'all');
    wp_enqueue_style( 'style'       , get_stylesheet_uri() );  
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), '4.5.0', 'all');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/js/plugins/owl-carousel/owl.carousel.css', array(), '1.3.3', 'all');
    wp_enqueue_style( 'owl.theme'   , get_template_directory_uri() . '/assets/js/plugins/owl-carousel/owl.theme.css', array(), '1.3.3', 'all');
    wp_enqueue_style( 'responsive'  , get_template_directory_uri() . '/assets/css/responsive.css', array(), null, 'all');    

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.3.0.min.js', array ('jquery'), null, true);
    wp_enqueue_script( 'bootstrap',      get_template_directory_uri() . '/assets/js/bootstrap.min.js', array (), null, true);
    wp_enqueue_script( 'owl.carousel',   get_template_directory_uri() . '/assets/js/plugins/owl-carousel/owl.carousel.js', array (), null, true);
    wp_enqueue_script( 'custom',         get_template_directory_uri() . '/assets/js/custom.js', array (), null, true);
        
} // bytelegal_add_theme_scripts

add_action( 'wp_enqueue_scripts', 'bytelegal_add_theme_scripts' );


/** 
* no es necesaria la etiqueta de cierre: "?>"
*/
