<?php
if (!defined('constructionpro_lite_VERSION')) {
    // Replace the version number of the theme on each release.
    define('constructionpro_lite_VERSION', wp_get_theme()->get('Version'));
}
define('constructionpro_lite_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('constructionpro_lite_DIR', trailingslashit(get_template_directory()));
define('constructionpro_lite_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('constructionpro_lite_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function constructionpro_lite_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'constructionpro_lite_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('constructionpro_lite_styles')) :
    function constructionpro_lite_styles()
    {
        // registering style for theme
        wp_enqueue_style('constructionpro-lite-style', get_stylesheet_uri(), array(), constructionpro_lite_VERSION);
        wp_enqueue_style('constructionpro-lite-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style('constructionpro-lite-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('constructionpro-lite-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('constructionpro-lite-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), constructionpro_lite_VERSION, true);
        wp_enqueue_script('constructionpro-lite-scripts', get_template_directory_uri() . '/assets/js/constructionpro-lite-scripts.js', array(), constructionpro_lite_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'constructionpro_lite_styles');

/**
 * Enqueue scripts for admin area
 */
function constructionpro_lite_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-constructionpro-lite' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('constructionpro-lite-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), constructionpro_lite_VERSION, 'all');
        wp_enqueue_script('constructionpro-lite-admin-scripts', get_template_directory_uri() . '/assets/js/constructionpro-lite-admin-scripts.js', array(), constructionpro_lite_VERSION, true);
        wp_localize_script('constructionpro-lite-admin-scripts', 'constructionpro_lite_admin_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('constructionpro_lite_admin_nonce')
        ));
        
    }
}
add_action('admin_enqueue_scripts', 'constructionpro_lite_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function constructionpro_lite_block_assets()
{
    wp_enqueue_style('constructionpro-lite-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'constructionpro_lite_block_assets');

/**
 * Load core file.
 */
//require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */


if (!function_exists('constructionpro_lite_excerpt_more_postfix')) {
    function constructionpro_lite_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'constructionpro_lite_excerpt_more_postfix');
}
function constructionpro_lite_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'constructionpro_lite_add_woocommerce_support');


/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/bootstrap.php';

/**
 * Theme info
 */
require get_theme_file_path( '/inc/theme-info/theme-info.php' );

/**
 * Getting started notification
 */
require get_theme_file_path( '/inc/getting-started/getting-started.php' );