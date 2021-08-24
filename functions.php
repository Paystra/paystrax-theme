<?php

// WP cleanup

function cubiq_setup () {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    add_filter('the_generator', '__return_false');
    add_filter('show_admin_bar','__return_false');
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action('after_setup_theme', 'cubiq_setup');

// Scripts

define('WEB_VERSION', '1.1');
function web_scripts_styles() {
    wp_enqueue_script('wow', get_template_directory_uri() . "/assets/js/wow.min.js", array('jquery'), WEB_VERSION, false);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . "/assets/js/owl.carousel.min.js", array('jquery'), WEB_VERSION, false);
    wp_enqueue_script('scripts', get_template_directory_uri() . "/assets/js/scripts.js", array('jquery', 'wow', 'owl-carousel'), WEB_VERSION, false);
    wp_enqueue_script('wpwl', get_template_directory_uri() . "/assets/js/wpwl.js", array('jquery'), WEB_VERSION, false);

    wp_enqueue_style('copy_and_pay', get_template_directory_uri() . "/assets/css/cap.css", array(), WEB_VERSION);
    wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/style.css", array(), WEB_VERSION);
}
add_action('wp_enqueue_scripts', 'web_scripts_styles');

// Title

function web_wp_title( $title, $sep ) {
    global $paged, $page;
    if ( is_feed() ) {
        return $title;
    }
    $title .= get_bloginfo( 'name', 'display' );
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title = "$title $sep $site_description";
    }
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title = "$title $sep " . sprintf( __( 'Page %s', '' ), max( $paged, $page ) );
    }
    return $title;
}
add_filter( 'wp_title', 'web_wp_title', 10, 2 );

// Menu

register_nav_menus( array(
    'header_menu' => 'Heaader menu',
    'header_sub_menu_1' => 'Header bonus menu 1',
    'header_sub_menu_2' => 'Header bonus menu 2',
    'header_side_menu' => 'Header side menu',
    'footer_menu_1' => 'Footer menu 1',
    'footer_menu_2' => 'Footer menu 2',
    'footer_menu_3' => 'Footer menu 3',
    'footer_menu_4' => 'Footer menu 4',
    'footer_menu_5' => 'Footer menu 5'
));

// Options page

if( function_exists('acf_add_options_page') ) {
    $args = array(
        'page_title' => 'Options',
        'menu_title' => 'Options',
        'menu_slug' => '',
        'capability' => 'edit_posts',
        'position' => 3.5,
        'parent_slug' => '',
        'icon_url' => false,
        'redirect' => true,
        'post_id' => 'options',
        'autoload' => false,
    );
    acf_add_options_page($args);
}

// Active menu item when news single

add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );

function add_current_nav_class($classes, $item) {

    // Getting the current post details
    global $post;

    // Getting the post type of the current post
    $current_post_type = get_post_type_object(get_post_type($post->ID));
    $current_post_type_slug = $current_post_type->rewrite['slug'];

    // Getting the URL of the menu item
    $menu_slug = strtolower(trim($item->url));

    // If the menu item URL contains the current post types slug add the current-menu-item class
    if (strpos($menu_slug,$current_post_type_slug) !== false) {

        $classes[] = 'current-menu-item';

    }

    // Return the corrected set of classes to be added to the menu item
    return $classes;

}

// Disable Gutenberg

add_filter('use_block_editor_for_post', '__return_false');

// Images folder

function img() {
    echo get_template_directory_uri().'/assets/images';
}

// Image size

add_image_size( 'full-hd', 1920, 1080, true );

// reCAPTCHA

  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LfNFucUAAAAAFTcVldg-1q53lGLCNFJc0CfgHeK';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
            $succMsg = 'Your contact request have submitted successfully.';
        }
        else
        {
            $errMsg = 'Robot verification failed, please try again.';
        }
   };

// Disable Api
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
    }
    return $result;
});