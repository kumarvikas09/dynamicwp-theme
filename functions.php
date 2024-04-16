<?php
//  for functionality 

// Enqueue script function
function dynamicwp_theme_scripts(){

    wp_enqueue_style( 'bootstrap-5-css', get_theme_file_uri("assets/bootstrap-5.0.0/css/bootstrap.min.css"));
    
    wp_enqueue_style( 'slick-css', get_theme_file_uri("assets/slick/slick.css"));

    wp_enqueue_style( 'owl-min-css', get_theme_file_uri("assets/owl-carousel/owl.carousel.min.css"));

    wp_enqueue_style( 'owl-theme-css', get_theme_file_uri("assets/owl-carousel/owl.theme.default.css"));
    
    wp_enqueue_style( 'owl-custom-style-css', get_theme_file_uri("assets/owl-carousel/custom-style.css"));
    
    wp_enqueue_style( 'fontawesome-css', get_theme_file_uri("assets/fontawesome/css/all.min.css"));

    wp_enqueue_style( 'toggle-css', get_theme_file_uri("assets/css/toggle-style.css"));

    wp_enqueue_style( 'like-dislike-css', get_theme_file_uri("assets/css/like-dislike.css"));    

    wp_enqueue_style( 'lightgallery-css', get_theme_file_uri("assets/lightgallery/lightgallery.css"));

    wp_enqueue_style( 'custom-css', get_theme_file_uri("assets/css/custom-style.css"));
    
    wp_enqueue_script("jquery");
    
    wp_enqueue_script( 'bootstrap-5-js', get_theme_file_uri( 'assets/bootstrap-5.0.0/js/bootstrap.min.js' ), '', '5.0', true);

    wp_enqueue_script( 'slick-js', get_theme_file_uri( 'assets/slick/slick.min.js' ), '', '1.0', true);

    wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( 'assets/owl-carousel/owl.carousel.min.js' ), '', '1.0', true);

    wp_enqueue_script( 'lightgallery-js', get_theme_file_uri( 'assets/lightgallery/lightgallery-all.min.js' ), '', '1.0', true);

    wp_enqueue_script( 'custom-script-js', get_theme_file_uri( 'assets/js/custom-script.js' ), '', '1.0', true);
    
}
add_action("wp_enqueue_scripts","dynamicwp_theme_scripts");

// Theme setup function
function dynamicwp_theme_setup() {

	// where you can see dynamicwp there will be your textdomain

	// Title support
	add_theme_support( 'title-tag' );  


	// post-thumbnails support (Featured Image)
	add_theme_support( 'post-thumbnails' );

	// widgets support
	add_theme_support( 'widgets' );
    
    
    
	// under array you can set crop area.. Hard crop left top.. all this size on thubmbnail using <?php the_post_thumbnail('custom-size');
	// add_image_size( 'custom-size', 220, 220, array( 'left', 'top' ) ); 
    // multiple image size can work with regenerate thumbnail plugin
    if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( 'custom-size', 220, 220 ); 
        // post-thumbnails size define (Featured Image)
        add_image_size( 'custom-size2', 500, 500 ); 
       }         


	// automatic-feed-links support (RSS FEED rss feed is the data of another website which you want to show it on your website then you need to find XML code of that website's for rss feed using plugin you can show it on your website rss feed plugin).
	add_theme_support( 'automatic-feed-links' );


    // custom header support
    add_theme_support( 'custom-header', array(
            'default-image'      => get_template_directory_uri() . '/assets/images/img5.jpg',
            'default-text-color' => '000',
            'width'              => 1920,
            'height'             => 300,
            'flex-width'         => true,
            'flex-height'        => true,
        ) 
    );


	// Logo support
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => false, 
        );
    
        add_theme_support( 'custom-logo', $defaults );

    
    // change class of logo + add attr on logo element by av
    add_filter( 'get_custom_logo', function( $html, $blog_id ) {
        $html = str_replace( 'class="custom-logo"', 'class="logo-img img-fluid" title="'.get_bloginfo("name").'" alt="'.get_bloginfo("name").'"', $html );
        $html = str_replace( 'custom-logo-link', 'logo', $html );
        return $html;
    }, 10, 2 );


	// register_nav_menus Support
	register_nav_menus( array(
		'primary_menu' => __( 'Primary Menu', 'dynamicwp' ),
		'footer_menu'  => __( 'Footer Menu', 'dynamicwp' ),
	) );		
	
    
    // replace menu current-menu-item class to active
    function dynamicwp_special_nav_class ($classes, $item) {
        if (in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class' , 'dynamicwp_special_nav_class' , 10 , 2);    
    
    
    // add caret for submenus
    function dynamicwp_menu_arrow($item_output, $item, $depth, $args) {
        if (in_array('menu-item-has-children', $item->classes)) {
            $arrow = '<span class="subMenuAngle"> <i class="fas fa-chevron-down"></i></span>'; // Change the class to your font icon
            $item_output = str_replace('</a>', '</a>'. $arrow .'', $item_output);
        }
        return $item_output;
    }
    add_filter('walker_nav_menu_start_el', 'dynamicwp_menu_arrow', 10, 4);


    // excerpt length function
    function dynamicwp_custom_excerpt_length( $length ) {
        return 40;
    }
    add_filter( 'excerpt_length', 'dynamicwp_custom_excerpt_length', 999 );
}
add_action( 'after_setup_theme', 'dynamicwp_theme_setup' );






// register sidebar (widgets)

function dynamicwp_widgets_init() {
    // register_main_sidebar 
    // Footer's widgets registered here
    // register_footer_first box widget
    register_sidebar( array(
        'name'          => __( 'Footer First', 'dynamicwp' ),
        'id'            => 'footer_first',
        'description'   => __( 'Widgets in this area Footer First Block content.', 'dynamicwp' ),
        'before_widget' => '<div class="footer-sec first">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-Bx-title d-none">',
        'after_title'   => '</h4>',
    ) );
    // register_footer_first box widget
    register_sidebar( array(
        'name'          => __( 'Footer Second', 'dynamicwp' ),
        'id'            => 'footer_second',
        'description'   => __( 'Widgets in this area Footer Second Block content.', 'dynamicwp' ),
        'before_widget' => '<div class="footer-sec">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-Bx-title">',
        'after_title'   => '</h4>',
    ) );
    // register_footer_first box widget
    register_sidebar( array(
        'name'          => __( 'Footer Third', 'dynamicwp' ),
        'id'            => 'footer_third',
        'description'   => __( 'Widgets in this area Footer Third Block content.', 'dynamicwp' ),
        'before_widget' => '<div class="footer-sec">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-Bx-title">',
        'after_title'   => '</h4>',
    ) );
    // register_footer_first box widget
    register_sidebar( array(
        'name'          => __( 'Footer Fourth', 'dynamicwp' ),
        'id'            => 'footer_fourth',
        'description'   => __( 'Widgets in this area Footer Fourth Block content.', 'dynamicwp' ),
        'before_widget' => '<div class="footer-sec">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-Bx-title">',
        'after_title'   => '</h4>',
    ) );
    // register_copyright box widget
    register_sidebar( array(
        'name'          => __( 'Footer Copyright Bar', 'dynamicwp' ),
        'id'            => 'footer_copyright',
        'description'   => __( 'Widgets in this area Footer Copyright Bar content.', 'dynamicwp' ),
        'before_widget' => '<div class="text-center">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-Bx-title d-none">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'dynamicwp_widgets_init' );



// for get_breadcrumbs
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}




// Include files here
// custom customizer config file
// require_once get_template_directory() . "/inc/customizer.php";
// kirki plugin embeded for customizer kirki main file
require get_template_directory() . "/inc/plugins/kirki/kirki.php";

// kirki config file
require get_template_directory() . "/inc/plugins/kirki/kirki-config.php";

// Tgm plugin file for allow user to install require plugin for theme
require_once get_template_directory() . "/inc/plugins/tgm-activation/class-tgm-plugin-activation.php";

// Tgm plugin file for allow user to install require plugin for theme
require_once get_template_directory() . "/inc/plugins/tgm-activation/install-plugins.php";

// Metabox-Testing custom post register file
require_once get_template_directory() . "/inc/metabox-testing-post-register.php";

// custom post for slider-custom-post-register /*register file*/
require_once get_template_directory() . "/inc/slider-custom-post-register.php";

// custom post for Gallery-custom-post-register /*register file*/
require_once get_template_directory() . "/inc/gallery-custom-post-register.php";

// custom post for Gallery-Album-post-register /*register file*/
require_once get_template_directory() . "/inc/album-gallery-post-register.php";

// custom query for Gallery file*/
require_once get_template_directory() . "/inc/gallery-custom-query.php";

// custom slider query (owl carousel)  file*/
require_once get_template_directory() . "/inc/slider-custom-query.php";

// Metabox register for URL for metabox-testing-custom-post /*register file*/
require_once get_template_directory() . "/inc/metabox-register-testing.php";

// Metabox register for TEXT for metabox-testing-custom-post /*register file*/
require_once get_template_directory() . "/inc/metabox-custom-text.php";

// Metabox register for media images for metabox-testing-custom-post /*register file*/
require_once get_template_directory() . "/inc/upload_image_metabox.php";

// like-dislike for post
require get_template_directory() . "/inc/like-dislike.php";


// Custom post page not found error Solved by using code on function.php (WP)
flush_rewrite_rules( false );