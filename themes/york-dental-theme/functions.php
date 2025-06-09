<?php
/**
 * York Dental Suite Theme Customizer additions.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
 
function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

      wp_register_style('main', get_template_directory_uri().'/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts','load_css');


function load_js(){

    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js','jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts','load_js');


function york_dental_customize_register( $wp_customize ) {

   


    // Section for Header Settings
    $wp_customize->add_section('york_dental_header_settings', array(
        'title'      => __('Header Settings', 'yorkdental'),
        'priority'   => 30
    ));

    // Left Logo Upload
    $wp_customize->add_setting('york_dental_left_logo', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint', // Sanitize as integer (attachment ID)
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'york_dental_left_logo', array(
        'label'    => __('Upload Left Logo', 'yorkdental'),
        'section'  => 'york_dental_header_settings',
        'settings' => 'york_dental_left_logo',
        'mime_type' => 'image',
    )));

    // Middle Logo Upload
    $wp_customize->add_setting('york_dental_middle_logo', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint', // Sanitize as integer (attachment ID)
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'york_dental_middle_logo', array(
        'label'    => __('Upload Middle Logo', 'yorkdental'),
        'section'  => 'york_dental_header_settings',
        'settings' => 'york_dental_middle_logo',
        'mime_type' => 'image',
    )));

    // Phone Number Text Field
    $wp_customize->add_setting('york_dental_phone_number', array(
        'default'           => '0477777777',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('york_dental_phone_number', array(
        'label'    => __('Phone Number', 'yorkdental'),
        'section'  => 'york_dental_header_settings',
        'settings' => 'york_dental_phone_number',
        'type'     => 'text',
    ));

    // Email Address Text Field
    $wp_customize->add_setting('york_dental_email_address', array(
        'default'           => 'info@theyorkdentalsuite.co.uk',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_email', // WordPress specific sanitize for email
    ));
    $wp_customize->add_control('york_dental_email_address', array(
        'label'    => __('Email Address', 'yorkdental'),
        'section'  => 'york_dental_header_settings',
        'settings' => 'york_dental_email_address',
        'type'     => 'email', // Use 'email' type for better validation
    ));



    // below header section

// Section for Top Info Bar Settings
$wp_customize->add_section('york_dental_top_info_bar_settings', array(
    'title'      => __('Top Info Bar Settings', 'yorkdental'),
    'priority'   => 40, // Adjust priority to place it below Header Settings
));

// --- Block 1: Finance Options (Only Text Dynamic) ---
$wp_customize->add_setting('york_dental_finance_text_line1', array(
    'default'           => 'Finance options available',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_finance_text_line1', array(
    'label'    => __('Finance Text - Line 1', 'yorkdental'),
    'section'  => 'york_dental_top_info_bar_settings',
    'settings' => 'york_dental_finance_text_line1',
    'type'     => 'text',
));

$wp_customize->add_setting('york_dental_finance_text_line2', array(
    'default'           => 'T&C Apply!',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_finance_text_line2', array(
    'label'    => __('Finance Text - Line 2', 'yorkdental'),
    'section'  => 'york_dental_top_info_bar_settings',
    'settings' => 'york_dental_finance_text_line2',
    'type'     => 'text',
));

// --- Block 2: Google Reviews (Only Text Dynamic) ---
$wp_customize->add_setting('york_dental_reviews_text_line1', array(
    'default'           => 'Rated 5.0 Google Reviews',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_reviews_text_line1', array(
    'label'    => __('Reviews Text - Line 1', 'yorkdental'),
    'section'  => 'york_dental_top_info_bar_settings',
    'settings' => 'york_dental_reviews_text_line1',
    'type'     => 'text',
));

$wp_customize->add_setting('york_dental_reviews_text_line2', array(
    'default'           => 'Over 272+ 5★ reviews',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_reviews_text_line2', array(
    'label'    => __('Reviews Text - Line 2', 'yorkdental'),
    'section'  => 'york_dental_top_info_bar_settings',
    'settings' => 'york_dental_reviews_text_line2',
    'type'     => 'text',
));

// --- Block 3: Aftercare Included (Only Text Dynamic) ---
$wp_customize->add_setting('york_dental_aftercare_text_line1', array(
    'default'           => 'Free aftercare included',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_aftercare_text_line1', array(
    'label'    => __('Aftercare Text - Line 1', 'yorkdental'),
    'section'  => 'york_dental_top_info_bar_settings',
    'settings' => 'york_dental_aftercare_text_line1',
    'type'     => 'text',
));

$wp_customize->add_setting('york_dental_aftercare_text_line2', array(
    'default'           => 'Up to 3 months of aftercare',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_aftercare_text_line2', array(
    'label'    => __('Aftercare Text - Line 2', 'yorkdental'),
    'section'  => 'york_dental_top_info_bar_settings',
    'settings' => 'york_dental_aftercare_text_line2',
    'type'     => 'text',
));





// hero section 

// --- Hero Section Settings ---
$wp_customize->add_section('york_dental_hero_section_settings', array(
    'title'      => __('Hero Section', 'yorkdental'),
    'priority'   => 50, // Adjust priority as needed
));

// Hero Title
$wp_customize->add_setting('york_dental_hero_title', array(
    'default'           => 'Invisalign® clear braces for children (age 6-11) & teens in York',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field', // Use wp_kses_post for more complex HTML
));
$wp_customize->add_control('york_dental_hero_title', array(
    'label'    => __('Hero Title', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_title',
    'type'     => 'textarea', // Use textarea for potentially longer text
));

// Pricing Box: Price From
$wp_customize->add_setting('york_dental_hero_price_from', array(
    'default'           => 'From',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_price_from', array(
    'label'    => __('Price Box - From', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_price_from',
    'type'     => 'text',
));

// Pricing Box: Price Amount
$wp_customize->add_setting('york_dental_hero_price_amount', array(
    'default'           => '£3,000+',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_price_amount', array(
    'label'    => __('Price Box - Amount', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_price_amount',
    'type'     => 'text',
));

// Pricing Box: Installment Line 1
$wp_customize->add_setting('york_dental_hero_installment_line1', array(
    'default'           => 'or as little',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_installment_line1', array(
    'label'    => __('Price Box - Installment Line 1', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_installment_line1',
    'type'     => 'text',
));

// Pricing Box: Installment Line 2
$wp_customize->add_setting('york_dental_hero_installment_line2', array(
    'default'           => 'as £9',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_installment_line2', array(
    'label'    => __('Price Box - Installment Line 2', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_installment_line2',
    'type'     => 'text',
));

// Pricing Box: Installment Line 3
$wp_customize->add_setting('york_dental_hero_installment_line3', array(
    'default'           => 'a day',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_installment_line3', array(
    'label'    => __('Price Box - Installment Line 3', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_installment_line3',
    'type'     => 'text',
));

// Description Box: Heading
$wp_customize->add_setting('york_dental_hero_desc_heading', array(
    'default'           => 'Free consultation including 3D scan',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_desc_heading', array(
    'label'    => __('Description Box - Heading', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_desc_heading',
    'type'     => 'text',
));

// Description Box: Bullet Point 1
$wp_customize->add_setting('york_dental_hero_bullet1', array(
    'default'           => 'Over 12 yrs+ experience with Aligners',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_bullet1', array(
    'label'    => __('Description Box - Bullet 1', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_bullet1',
    'type'     => 'text',
));

// Description Box: Bullet Point 2
$wp_customize->add_setting('york_dental_hero_bullet2', array(
    'default'           => 'Experience with children and advanced cases',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_bullet2', array(
    'label'    => __('Description Box - Bullet 2', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_bullet2',
    'type'     => 'text',
));

// Description Box: Bullet Point 3
$wp_customize->add_setting('york_dental_hero_bullet3', array(
    'default'           => 'Finance options available T&C Apply*',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_bullet3', array(
    'label'    => __('Description Box - Bullet 3', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_bullet3',
    'type'     => 'text',
));

// Description Box: Bullet Point 4
$wp_customize->add_setting('york_dental_hero_bullet4', array(
    'default'           => 'Free initial consultation',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_bullet4', array(
    'label'    => __('Description Box - Bullet 4', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_bullet4',
    'type'     => 'text',
));

// Description Box: Bullet Point 5
$wp_customize->add_setting('york_dental_hero_bullet5', array(
    'default'           => 'Free set of removable retainers included',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_bullet5', array(
    'label'    => __('Description Box - Bullet 5', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_bullet5',
    'type'     => 'text',
));

// Description Box: Bullet Point 6
$wp_customize->add_setting('york_dental_hero_bullet6', array(
    'default'           => 'Free 3 month aftercare included',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_bullet6', array(
    'label'    => __('Description Box - Bullet 6', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_bullet6',
    'type'     => 'text',
));

// Button Text
$wp_customize->add_setting('york_dental_hero_button_text', array(
    'default'           => 'Book a free consultation',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_button_text', array(
    'label'    => __('Button Text', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_button_text',
    'type'     => 'text',
));

// Rating Section: Rating Number
$wp_customize->add_setting('york_dental_hero_rating_number', array(
    'default'           => '5.0',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_rating_number', array(
    'label'    => __('Rating Section - Number', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_rating_number',
    'type'     => 'text',
));

// Rating Section: Text
$wp_customize->add_setting('york_dental_hero_rating_text', array(
    'default'           => 'Google Reviews',
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('york_dental_hero_rating_text', array(
    'label'    => __('Rating Section - Text', 'yorkdental'),
    'section'  => 'york_dental_hero_section_settings',
    'settings' => 'york_dental_hero_rating_text',
    'type'     => 'text',
));

// Hero Subtitle (from your HTML)
// $wp_customize->add_setting('york_dental_hero_subtitle', array(
//     'default'           => 'Your default subtitle here if there is one in the image that is not the main title.', // Default subtitle text
//     'type'              => 'theme_mod',
//     'capability'        => 'edit_theme_options',
//     'sanitize_callback' => 'sanitize_text_field',
// ));
// $wp_customize->add_control('york_dental_hero_subtitle', array(
//     'label'    => __('Hero Subtitle', 'yorkdental'),
//     'section'  => 'york_dental_hero_section_settings',
//     'settings' => 'york_dental_hero_subtitle',
//     'type'     => 'textarea',
// ));


// Hero paragraph (from your HTML)
// $wp_customize->add_setting('york_dental_hero_paragraph', array(
//     'default'           => 'Your default subtitle here if there is one in the image that is not the main title.', // Default subtitle text
//     'type'              => 'theme_mod',
//     'capability'        => 'edit_theme_options',
//     'sanitize_callback' => 'sanitize_text_field',
// ));
// $wp_customize->add_control('york_dental_hero_paragraph', array(
//     'label'    => __('Hero Subtitle Paragraph', 'yorkdental'),
//     'section'  => 'york_dental_hero_paragraph_settings',
//     'settings' => 'york_dental_hero_paragraph',
//     'type'     => 'textarea',
// ));


  // 1. Add a Section
    $wp_customize->add_section( 'invisalign_section', array(
        'title'    => __( 'Invisalign Section', 'yourtheme' ),
        'priority' => 30, // Adjust priority to place it where you like in the Customizer
    ) );

    // 2. Add Setting and Control for the Heading
    $wp_customize->add_setting( 'invisalign_heading', array(
        'default'           => 'Our Invisalign package',
        'sanitize_callback' => 'sanitize_text_field', // For simple text, no HTML
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'invisalign_heading_control', array(
        'label'    => __( 'Invisalign Section Heading', 'yourtheme' ),
        'section'  => 'invisalign_section',
        'settings' => 'invisalign_heading',
        'type'     => 'text',
    ) );

    // 3. Add Setting and Control for the Paragraph
    $wp_customize->add_setting( 'invisalign_paragraph', array(
        'default'           => 'You get the world\'s most advanced aligner technology and the guidance of our trained Invisalign Dentist, Dr Mafalda Queiroz. But most of all, you get the smile you\'ll want to show off.',
        'sanitize_callback' => 'wp_kses_post', // Allow basic HTML in the paragraph
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'invisalign_paragraph_control', array(
        'label'    => __( 'Invisalign Section Paragraph', 'yourtheme' ),
        'section'  => 'invisalign_section',
        'settings' => 'invisalign_paragraph',
        'type'     => 'textarea',
    ) );


// footer section 

    // Section for Header Settings
    $wp_customize->add_section('york_dental_footer_settings', array(
        'title'      => __('Footer Settings', 'yorkdental'),
        'priority'   => 30
    ));

    // Left Logo Upload
    $wp_customize->add_setting('york_dental_footer_left_logo', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint', // Sanitize as integer (attachment ID)
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'york_dental_footer_left_logo', array(
        'label'    => __('Upload Left Footer Logo', 'yorkdental'),
        'section'  => 'york_dental_footer_settings',
        'settings' => 'york_dental_footer_left_logo',
        'mime_type' => 'image',
    )));

    // Middle Logo Upload
    $wp_customize->add_setting('york_dental_footer_middle_logo', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint', // Sanitize as integer (attachment ID)
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'york_dental_footer_middle_logo', array(
        'label'    => __('Upload Middle Footer Logo', 'yorkdental'),
        'section'  => 'york_dental_footer_settings',
        'settings' => 'york_dental_footer_middle_logo',
        'mime_type' => 'image',
    )));


     // Middle Logo Upload
    $wp_customize->add_setting('york_dental_footer_right_logo', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint', // Sanitize as integer (attachment ID)
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'york_dental_footer_right_logo', array(
        'label'    => __('Upload Right Footer Logo', 'yorkdental'),
        'section'  => 'york_dental_footer_settings',
        'settings' => 'york_dental_footer_right_logo',
        'mime_type' => 'image',
    )));

     // Add a new section for Social Media
    $wp_customize->add_section( 'yourtheme_social_media_section', array(
        'title'    => __( 'Social Media Links', 'yourtheme' ),
        'priority' => 30,
    ) );

    // Twitter URL setting
    $wp_customize->add_setting( 'yourtheme_twitter_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'yourtheme_twitter_url', array(
        'label'    => __( 'Twitter URL', 'yourtheme' ),
        'section'  => 'yourtheme_social_media_section',
        'type'     => 'url',
    ) );

    // Instagram URL setting
    $wp_customize->add_setting( 'yourtheme_instagram_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'yourtheme_instagram_url', array(
        'label'    => __( 'Instagram URL', 'yourtheme' ),
        'section'  => 'yourtheme_social_media_section',
        'type'     => 'url',
    ) );

    // Facebook URL setting
    $wp_customize->add_setting( 'yourtheme_facebook_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'yourtheme_facebook_url', array(
        'label'    => __( 'Facebook URL', 'yourtheme' ),
        'section'  => 'yourtheme_social_media_section',
        'type'     => 'url',
    ) );


    // Privacy Policy Page setting
    $wp_customize->add_setting( 'yourtheme_privacy_policy_page', array(
        'default'   => 0, // Default to no page selected
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'yourtheme_privacy_policy_page', array(
        'label'    => __( 'Privacy Policy Page', 'yourtheme' ),
        'section'  => 'yourtheme_social_media_section', // You can create a new section if preferred
        'type'     => 'dropdown-pages',
    ) );


}
add_action('customize_register', 'york_dental_customize_register');

 
 


?>