<?php

function includes_full_files($dir)
{
    foreach (glob($dir . '/*.php') as $file) {
        include_once $file;
    }
}

$include_path = get_template_directory() . '/includes';
define("VIEWS_DIR", $include_path . "/3_views/");

$themeAR = $debugAR = false;
$elementorWidgetsAR = [];

add_action('init', 'ar_theme_init', 10);
function ar_theme_init()
{
    global $include_path, $themeAR, $debugAR;
    include_once $include_path . "/theme_functions.php";
    includes_full_files($include_path . "/4_classes");
    $themeAR = new ThemeAR();
    $debugAR = new DebugAR();
    include_once $include_path . "/useractions.php";
}


add_action( 'wp_footer', 'prefix_add_footer_styles' );
function prefix_add_footer_styles() {
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue theme
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array(), null, true);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'writer-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.4.1.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'writer-jquery-fancybox', get_template_directory_uri() . '/assets/js/components/jquery.fancybox.js', array(), null, true );
    wp_enqueue_script( 'writer-components-slick', get_template_directory_uri() . '/assets/js/components/slick.js', array(), null, true );
    wp_enqueue_script( 'writer-components-swiper', get_template_directory_uri() . '/assets/js/components/swiper.js', array(), null, true );
    wp_enqueue_script( 'writer-jquery-mCustomScrollbar', get_template_directory_uri() . '/assets/js/components/jquery.mCustomScrollbar.js', array(), null, true );
    wp_enqueue_script( 'writer-masonry-pkgd', get_template_directory_uri() . '/assets/js/components/masonry.pkgd.min.js', array(), null, true );
    wp_enqueue_script( 'writer-jquery-validate', get_template_directory_uri() . '/assets/js/components/jquery.validate.min.js', array(), null, true );
    wp_enqueue_script( 'writer-components-sticky-kit', get_template_directory_uri() . '/assets/js/components/sticky-kit.min.js', array(), null, true );
    wp_enqueue_script( 'writer-components-wow', get_template_directory_uri() . '/assets/js/components/wow.js', array(), null, true );
    wp_enqueue_script( 'writer-jquery-parallax', get_template_directory_uri() . '/assets/js/components/parallax.js', array(), null, true );
    wp_enqueue_script( 'writer-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), null, true );
};


add_action('wp_enqueue_scripts', 'ar_theme_name_scripts', 100);
function ar_theme_name_scripts()
{
//    wp_deregister_script('jquery');
    wp_deregister_style('elementor-animations');
    wp_deregister_style('elementor-frontend');
    wp_deregister_style('elementor-global');
    wp_deregister_style('elementor-common');
}


//Подлючаем svg файлы
add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}