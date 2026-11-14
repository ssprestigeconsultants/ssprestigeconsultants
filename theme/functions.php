<?php
/**
 * Theme Functions & Setup - S&S PRESTIGE CONSULTANTS LLP
 *
 * @package SS_Prestige_Consultants
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('SS_PRESTIGE_VERSION', '1.0.8');

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
 * Register Custom Post Type: Client Consultation Inquiries (Internal CRM)
 */
function ss_prestige_register_inquiries_cpt() {
    $labels = [
        'name'               => __('Consultation Inquiries', 'ssprestige'),
        'singular_name'      => __('Consultation Inquiry', 'ssprestige'),
        'menu_name'          => __('Client Inquiries', 'ssprestige'),
        'name_admin_bar'     => __('Client Inquiry', 'ssprestige'),
        'add_new'            => __('Add New', 'ssprestige'),
        'add_new_item'       => __('Add New Consultation Inquiry', 'ssprestige'),
        'new_item'           => __('New Inquiry', 'ssprestige'),
        'edit_item'          => __('View / Edit Inquiry', 'ssprestige'),
        'view_item'          => __('View Inquiry', 'ssprestige'),
        'all_items'          => __('All Inquiries', 'ssprestige'),
        'search_items'       => __('Search Inquiries', 'ssprestige'),
        'not_found'          => __('No consultation inquiries found.', 'ssprestige'),
        'not_found_in_trash' => __('No inquiries found in Trash.', 'ssprestige')
    ];

    $args = [
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-businessman',
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'supports'           => ['title', 'editor', 'custom-fields'],
        'has_archive'        => false,
        'rewrite'            => false,
        'query_var'          => false,
    ];

    register_post_type('ssp_inquiry', $args);
}
add_action('init', 'ss_prestige_register_inquiries_cpt');

/**
 * Custom Columns for Consultation Inquiries in WP Admin
 */
function ss_prestige_inquiry_columns($columns) {
    $new_columns = [
        'cb'           => $columns['cb'],
        'title'        => __('Client Name', 'ssprestige'),
        'client_phone' => __('Phone / WhatsApp', 'ssprestige'),
        'client_email' => __('Email', 'ssprestige'),
        'service_type' => __('Practice Area', 'ssprestige'),
        'lead_status'  => __('Status', 'ssprestige'),
        'date'         => __('Received On', 'ssprestige'),
    ];
    return $new_columns;
}
add_filter('manage_ssp_inquiry_posts_columns', 'ss_prestige_inquiry_columns');

function ss_prestige_inquiry_custom_column($column, $post_id) {
    switch ($column) {
        case 'client_phone':
            $phone = get_post_meta($post_id, '_client_phone', true);
            if ($phone) {
                $clean = preg_replace('/[^0-9]/', '', $phone);
                echo '<a href="https://wa.me/' . esc_attr($clean) . '" target="_blank" style="font-weight:600; color:#1A6BFF;">' . esc_html($phone) . '</a>';
            } else {
                echo '—';
            }
            break;
        case 'client_email':
            $email = get_post_meta($post_id, '_client_email', true);
            echo $email ? '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>' : '—';
            break;
        case 'service_type':
            $service = get_post_meta($post_id, '_service_type', true);
            echo $service ? '<span style="display:inline-block; padding:3px 8px; background:#EFF6FF; color:#1A6BFF; border-radius:6px; font-weight:600; font-size:12px;">' . esc_html(ucwords(str_replace('-', ' ', $service))) . '</span>' : 'General Advisory';
            break;
        case 'lead_status':
            $status = get_post_meta($post_id, '_lead_status', true);
            if (!$status) {
                $status = 'New / Uncontacted';
            }
            $bg = ($status === 'New / Uncontacted') ? '#FEF3C7; color:#92400E;' : '#D1FAE5; color:#065F46;';
            echo '<span style="display:inline-block; padding:3px 8px; background:' . $bg . ' border-radius:6px; font-weight:700; font-size:11px;">' . esc_html($status) . '</span>';
            break;
    }
}
add_action('manage_ssp_inquiry_posts_custom_column', 'ss_prestige_inquiry_custom_column', 10, 2);

/**
 * Handle Consultation Form Submission & Priority Notification Routing
 */
function ss_prestige_handle_consultation() {
    if (!isset($_POST['ss_consultation_nonce']) || !wp_verify_nonce($_POST['ss_consultation_nonce'], 'ss_consultation_action')) {
        wp_die(__('Security check failed. Please refresh and try again.', 'ssprestige'));
    }

    $name    = isset($_POST['client_name']) ? sanitize_text_field($_POST['client_name']) : '';
    $phone   = isset($_POST['client_phone']) ? sanitize_text_field($_POST['client_phone']) : '';
    $email   = isset($_POST['client_email']) ? sanitize_email($_POST['client_email']) : '';
    $service = isset($_POST['service_type']) ? sanitize_text_field($_POST['service_type']) : 'General';
    $message = isset($_POST['client_message']) ? sanitize_textarea_field($_POST['client_message']) : '';

    $formatted_service = ucwords(str_replace('-', ' ', $service));

    // 1. Persist to WordPress Database as internal lead record (Never Lose a Lead)
    $inquiry_id = wp_insert_post([
        'post_title'   => (!empty($name) ? $name : 'Prospective Client') . ' — ' . $formatted_service . ' (' . current_time('M j, Y H:i') . ')',
        'post_content' => $message,
        'post_status'  => 'publish',
        'post_type'    => 'ssp_inquiry',
    ]);

    if ($inquiry_id) {
        update_post_meta($inquiry_id, '_client_name', $name);
        update_post_meta($inquiry_id, '_client_phone', $phone);
        update_post_meta($inquiry_id, '_client_email', $email);
        update_post_meta($inquiry_id, '_service_type', $formatted_service);
        update_post_meta($inquiry_id, '_lead_status', 'New / Uncontacted');
        update_post_meta($inquiry_id, '_submission_ip', sanitize_text_field($_SERVER['REMOTE_ADDR'] ?? 'Unknown'));
        update_post_meta($inquiry_id, '_submission_time', current_time('mysql'));
    }

    // 2. High-Priority Partner Notification Email with Segregation Subject Tag
    // The [CLIENT INTAKE - URGENT] prefix allows 1-click filtering in Gmail / Webmail
    $to = ['info@ssprestigeconsultants.com', 'ssprestigeconsultants@gmail.com'];
    $subject = '[CLIENT INTAKE - URGENT] ' . $name . ' — ' . $formatted_service;

    $body  = "=========================================================\n";
    $body .= "   S&S PRESTIGE CONSULTANTS LLP — CLIENT INTAKE ALERT   \n";
    $body .= "=========================================================\n\n";
    $body .= "A prospective client has submitted an advisory request on ssprestigeconsultants.com:\n\n";
    $body .= "Client Full Name: " . $name . "\n";
    $body .= "Phone / WhatsApp: " . $phone . "\n";
    $body .= "Email Address:    " . $email . "\n";
    $body .= "Practice Area:    " . $formatted_service . "\n";
    $body .= "Received Date:    " . current_time('mysql') . " (PKT)\n\n";
    $body .= "---------------- REQUIREMENT DETAILS ----------------\n";
    $body .= (!empty($message) ? $message : "[No additional notes provided]") . "\n\n";
    $body .= "-----------------------------------------------------\n";
    if ($inquiry_id) {
        $body .= "Admin CRM Record: " . admin_url('post.php?post=' . $inquiry_id . '&action=edit') . "\n";
    }
    $body .= "Direct WhatsApp:  https://wa.me/" . preg_replace('/[^0-9]/', '', $phone) . "\n";
    $body .= "=========================================================\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'From: S&S Prestige Intake <info@ssprestigeconsultants.com>',
        'X-Priority: 1 (Highest)',
        'X-MSMail-Priority: High',
        'Importance: High',
        'X-Lead-Source: ssprestigeconsultants.com-consultation-form',
        'X-Inquiry-ID: ' . ($inquiry_id ? $inquiry_id : '0')
    ];
    if (!empty($email)) {
        $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
    }

    wp_mail($to, $subject, $body, $headers);

    // 3. Automated Client Acknowledgment Email (If email provided)
    if (!empty($email) && is_email($email)) {
        $client_subject = 'Consultation Inquiry Confirmation — S&S Prestige Consultants LLP';
        $client_body  = "Dear " . $name . ",\n\n";
        $client_body .= "Thank you for reaching out to S&S Prestige Consultants LLP.\n\n";
        $client_body .= "We have received your advisory request regarding " . $formatted_service . ". Our Managing Partner, Sunil Babar, and the senior practice team have been notified. We will review your inquiry with utmost confidentiality and reach out to you within 2 to 4 business hours.\n\n";
        $client_body .= "SUMMARY OF YOUR REQUEST:\n";
        $client_body .= "- Practice Area: " . $formatted_service . "\n";
        $client_body .= "- Contact Phone: " . $phone . "\n";
        $client_body .= "- Reference Time: " . current_time('mysql') . " PKT\n\n";
        $client_body .= "FIRM CREDENTIALS & DIRECT CHANNELS:\n";
        $client_body .= "- Firm: S&S PRESTIGE CONSULTANTS LLP\n";
        $client_body .= "- SECP Registration # 0316515 • NTN # I107949-3\n";
        $client_body .= "- Islamabad Head Office: 2nd Floor, Farooq Plaza, Kurri Road, Jinnah Avenue, Islamabad\n";
        $client_body .= "- Gilgit Regional Office: Hunza Electronics, Naseem Shopping Center, Cinema Bazaar, Airport Road, Gilgit\n";
        $client_body .= "- Managing Partner Helpline: +92 346 4439391 / +92 333 4439391\n";
        $client_body .= "- Direct WhatsApp: https://wa.me/923464439391\n\n";
        $client_body .= "Sincerely,\n";
        $client_body .= "Client Relations & Practice Management\n";
        $client_body .= "S&S Prestige Consultants LLP\n";
        $client_body .= "https://ssprestigeconsultants.com\n";

        $client_headers = [
            'Content-Type: text/plain; charset=UTF-8',
            'From: S&S Prestige Consultants <info@ssprestigeconsultants.com>',
            'Reply-To: S&S Prestige Consultants <info@ssprestigeconsultants.com>'
        ];

        wp_mail($email, $client_subject, $client_body, $client_headers);
    }

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
        ],
        [
            'title'    => 'Pakistan Income Tax Calculator',
            'slug'     => 'tax-calculator',
            'template' => 'page-tax-calculator.php'
        ],
        [
            'title'    => 'Client Assurance & The 4 Pillars of Trust',
            'slug'     => 'client-assurance',
            'template' => 'page-assurance.php'
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
        } else {
            // Ensure template is explicitly linked
            if (!empty($p['template'])) {
                update_post_meta($existing->ID, '_wp_page_template', $p['template']);
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
    if (get_option('ss_prestige_pages_v3_initialized') !== 'yes') {
        ss_prestige_setup_pages();
        update_option('ss_prestige_pages_v3_initialized', 'yes');
    }
});

/**
 * Auto-provision 404.php template if not present on server
 */
function ss_prestige_ensure_404_template() {
    $file_404 = get_template_directory() . '/404.php';
    if (!file_exists($file_404) || filesize($file_404) < 500) {
        $content = <<<'EOD'
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package SS_Prestige_Consultants
 */

get_header(); ?>

<main id="main-content" class="site-main" style="min-height: 80vh; display: flex; align-items: center; justify-content: center; padding-top: clamp(120px, 15vw, 160px); padding-bottom: 80px;">
  <div class="container">
    
    <div class="frosted-card" style="max-width: 780px; margin: 0 auto; padding: clamp(32px, 5vw, 56px); border-radius: 32px; background: rgba(255, 255, 255, 0.94); text-align: center; box-shadow: 0 25px 60px -15px rgba(26, 107, 255, 0.12);">
      
      <!-- 404 Icon & Large Number -->
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 88px; height: 88px; border-radius: 28px; background: rgba(26, 107, 255, 0.08); color: #1A6BFF; margin-bottom: 24px;">
        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      </div>

      <div style="font-size: clamp(4rem, 10vw, 6.5rem); font-weight: 900; line-height: 1; letter-spacing: -0.04em; background: linear-gradient(135deg, #0F172A 0%, #1A6BFF 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 12px;">
        404
      </div>

      <span class="section-eyebrow" style="margin-bottom: 16px;">Regulatory Route Relocated</span>
      
      <h1 style="font-size: clamp(22px, 3.5vw, 32px); font-weight: 800; color: #0F172A; margin-bottom: 14px;">
        Page Not Found on Official Portal
      </h1>

      <p style="font-size: 15.5px; color: #64748B; max-width: 580px; margin: 0 auto 36px; line-height: 1.65;">
        The requested compliance document, advisory route, or statutory resource does not exist or may have been relocated under our updated governance structure.
      </p>

      <!-- Quick Directory Navigation -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 200px), 1fr)); gap: 14px; margin-bottom: 36px; text-align: left;">
        
        <a href="<?php echo esc_url(home_url('/')); ?>" class="frosted-card" style="padding: 16px; border-radius: 16px; text-decoration: none; display: block; border: 1px solid #E2E8F0; transition: transform 0.2s ease, border-color 0.2s ease;">
          <div style="font-weight: 700; font-size: 14px; color: #0F172A; margin-bottom: 4px;">Return Home &rarr;</div>
          <div style="font-size: 12px; color: #64748B;">Explore firm pedigree &amp; overview</div>
        </a>

        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="frosted-card" style="padding: 16px; border-radius: 16px; text-decoration: none; display: block; border: 1px solid #E2E8F0; transition: transform 0.2s ease, border-color 0.2s ease;">
          <div style="font-weight: 700; font-size: 14px; color: #0F172A; margin-bottom: 4px;">Practice Areas &rarr;</div>
          <div style="font-size: 12px; color: #64748B;">Tax, SECP, FDI &amp; ERP advisory</div>
        </a>

        <a href="<?php echo esc_url(home_url('/tax-calculator/')); ?>" class="frosted-card" style="padding: 16px; border-radius: 16px; text-decoration: none; display: block; border: 1px solid #E2E8F0; transition: transform 0.2s ease, border-color 0.2s ease;">
          <div style="font-weight: 700; font-size: 14px; color: #0F172A; margin-bottom: 4px;">Tax Calculator &rarr;</div>
          <div style="font-size: 12px; color: #64748B;">Instant FBR slab computation</div>
        </a>

        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="frosted-card" style="padding: 16px; border-radius: 16px; text-decoration: none; display: block; border: 1px solid #E2E8F0; transition: transform 0.2s ease, border-color 0.2s ease;">
          <div style="font-weight: 700; font-size: 14px; color: #0F172A; margin-bottom: 4px;">Dual Chambers &rarr;</div>
          <div style="font-size: 12px; color: #64748B;">Islamabad &amp; Gilgit offices</div>
        </a>

      </div>

      <!-- Immediate Action Buttons -->
      <div style="display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap;">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary-glow" style="padding: 14px 28px;">
          <span>Back to Homepage</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="https://wa.me/923464439391?text=Hello%20Sunil%20Babar%2C%20I%20encountered%20a%20missing%20page%20on%20ssprestigeconsultants.com%20and%20need%20direct%20advisory." 
           class="btn-nav-outline" target="_blank" rel="noopener" style="padding: 13px 24px;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <span>WhatsApp Partner Helpline</span>
        </a>
      </div>

    </div>

  </div>
</main>

<?php get_footer(); ?>
EOD;
        @file_put_contents($file_404, $content);
    }
}
add_action('init', 'ss_prestige_ensure_404_template');

