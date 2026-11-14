<?php
/**
 * Theme Functions & Setup - S&S PRESTIGE CONSULTANTS LLP
 *
 * @package SS_Prestige_Consultants
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('SS_PRESTIGE_VERSION', '1.0.2');

function ss_prestige_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Custom logo support
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Register primary navigation
    register_nav_menus([
        'primary' => __('Floating Primary Menu', 'ssprestige'),
        'footer'  => __('Footer Navigation', 'ssprestige'),
    ]);
}
add_action('after_setup_theme', 'ss_prestige_setup');

/**
 * Enqueue scripts and styles.
 */
function ss_prestige_scripts() {
    // Google Fonts - Plus Jakarta Sans & Space Grotesk
    wp_enqueue_style(
        'ss-prestige-google-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap',
        [],
        null
    );

    // CSS Variables & Design Tokens
    wp_enqueue_style(
        'ss-prestige-variables',
        get_template_directory_uri() . '/assets/css/variables.css',
        [],
        SS_PRESTIGE_VERSION
    );

    // Glassmorphism & Floating Navigation
    wp_enqueue_style(
        'ss-prestige-glassmorphism',
        get_template_directory_uri() . '/assets/css/glassmorphism.css',
        ['ss-prestige-variables'],
        SS_PRESTIGE_VERSION
    );

    // Page Components & Sections
    wp_enqueue_style(
        'ss-prestige-components',
        get_template_directory_uri() . '/assets/css/components.css',
        ['ss-prestige-glassmorphism'],
        SS_PRESTIGE_VERSION
    );

    // Main Theme Stylesheet
    wp_enqueue_style(
        'ss-prestige-style',
        get_stylesheet_uri(),
        ['ss-prestige-components'],
        SS_PRESTIGE_VERSION
    );

    // Interactive JavaScript
    wp_enqueue_script(
        'ss-prestige-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        SS_PRESTIGE_VERSION,
        true
    );

    // Localize Script for dynamic tax calculation and inquiry routing
    wp_localize_script('ss-prestige-main-js', 'ssPrestigeData', [
        'ajaxUrl'   => admin_url('admin-ajax.php'),
        'nonce'     => wp_create_nonce('ss_prestige_nonce'),
        'themeUrl'  => get_template_directory_uri(),
        'phone'     => '+923464439391',
        'whatsapp'  => 'https://wa.me/923464439391?text=Hello%20SS%20Prestige%20Consultants%2C%20I%20would%20like%20to%20inquire%20about%20your%20services.',
    ]);
}
add_action('wp_enqueue_scripts', 'ss_prestige_scripts');

/**
 * Handle Consultation Form Submission
 */
function ss_prestige_handle_consultation() {
    if (!isset($_POST['ss_consultation_nonce']) || !wp_verify_nonce($_POST['ss_consultation_nonce'], 'ss_consultation_action')) {
        wp_die(__('Security check failed. Please refresh and try again.', 'ssprestige'));
    }

    $name    = isset($_POST['client_name']) ? sanitize_text_field($_POST['client_name']) : '';
    $phone   = isset($_POST['client_phone']) ? sanitize_text_field($_POST['client_phone']) : '';
    $email   = isset($_POST['client_email']) ? sanitize_email($_POST['client_email']) : '';
    $service = isset($_POST['service_type']) ? sanitize_text_field($_POST['service_type']) : '';
    $message = isset($_POST['client_message']) ? sanitize_textarea_field($_POST['client_message']) : '';

    $to      = ['info@ssprestigeconsultants.com', 'ssprestigeconsultants@gmail.com'];
    $subject = 'New Consultation Request - ' . $name . ' (' . ucfirst($service) . ')';
    
    $body  = "A new consultation inquiry has been submitted on ssprestigeconsultants.com:\n\n";
    $body .= "Client Name: " . $name . "\n";
    $body .= "Phone / WhatsApp: " . $phone . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Service Required: " . ucfirst($service) . "\n\n";
    $body .= "Requirement Details:\n" . $message . "\n\n";
    $body .= "Submission Time: " . current_time('mysql') . "\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'From: S&S Prestige Consultants <info@ssprestigeconsultants.com>'
    ];
    if (!empty($email)) {
        $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
    }

    wp_mail($to, $subject, $body, $headers);

    wp_safe_redirect(add_query_arg('consultation_sent', '1', home_url('/#consultation')));
    exit;
}
add_action('admin_post_submit_consultation', 'ss_prestige_handle_consultation');
add_action('admin_post_nopriv_submit_consultation', 'ss_prestige_handle_consultation');

/**
 * Auto-create core pages on theme activation if they don't exist
 */
function ss_prestige_setup_pages() {
    $pages = [
        [
            'title'    => 'About S&S Prestige Consultants',
            'slug'     => 'about',
            'template' => 'page-about.php'
        ],
        [
            'title'    => 'Practice Areas & Advisory Services',
            'slug'     => 'services',
            'template' => 'page-services.php'
        ],
        [
            'title'    => 'Contact & Offices (Islamabad & Gilgit)',
            'slug'     => 'contact',
            'template' => 'page-contact.php'
        ]
    ];

    foreach ($pages as $p) {
        $existing = get_page_by_path($p['slug']);
        if (!$existing) {
            $page_id = wp_insert_post([
                'post_title'     => $p['title'],
                'post_name'      => $p['slug'],
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
            ]);
            if ($page_id && !empty($p['template'])) {
                update_post_meta($page_id, '_wp_page_template', $p['template']);
            }
        }
    }

    // Set clean permalinks structure
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules();
}
add_action('after_switch_theme', 'ss_prestige_setup_pages');
add_action('admin_init', function () {
    if (get_option('ss_prestige_pages_initialized') !== 'yes') {
        ss_prestige_setup_pages();
        update_option('ss_prestige_pages_initialized', 'yes');
    }
});

