<?php

add_theme_support('post-thumbnails');

function tech_support_assets() {
  wp_enqueue_style('tech_support_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'tech_support_assets');
register_nav_menus(['primary'=> 'Primary Menu']);


// All Controls and Custom Settings for Client
function custom_options($wp_customize) {

  // Home Page Styles ----------------------------------------------------------
  $wp_customize->add_section("home_page_section", array(
    "title" => "Home Page Adjustments", "custom_setting",
    "priority" => 50
  ));
  // Home Page Headline //////////
  $wp_customize->add_setting("home_headline_setting", array(
    "default" => "Impact Text"
  ));
  $wp_customize->add_control("home_headline_control", array(
    "label" => "Enter a custom header",
    "section" => "home_page_section",
    "settings" => "home_headline_setting",
    "type" => "text"
  ));
  // Hero Img //////////
  $wp_customize->add_setting("home_hero_img_setting", array(
    "default" => "Impactful Text"
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'home_hero_img_setting', array(
      "label" => "Upload a hero image",
      "section" => "home_page_section",
      "settings" => "home_hero_img_setting"
    ))
  );

  // Services Page Styles ------------------------------------------------------
  $wp_customize->add_section("service_page_section", array(
    "title" => "Service Page Adjustments", "custom_setting",
    "priority" => 50
  ));
  // Headline //////////
  $wp_customize->add_setting("service_headline_setting", array(
    "default" => "Impactful Text"
  ));
  $wp_customize->add_control("service_headline_control", array(
    "label" => "Enter a custom header",
    "section" => "service_page_section",
    "settings" => "service_headline_setting",
    "type" => "text"
  ));
  // Sub Text //////////
  $wp_customize->add_setting("service_sub_text_setting", array(
    "default" => "Short and captivating description."
  ));
  $wp_customize->add_control("service_sub_text_control", array(
    "label" => "Enter a subtext",
    "section" => "service_page_section",
    "settings" => "service_sub_text_setting",
    "type" => "text"
  ));
  // Hero Img //////////
  $wp_customize->add_setting("service_hero_img_setting", array(
    "default" => ""
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'service_hero_img_setting', array(
      "label" => "Upload a hero image",
      "section" => "service_page_section",
      "settings" => "service_hero_img_setting"
    ))
  );

  // About Us Styles ------------------------------------------------------
  $wp_customize->add_section("about_page_section", array(
    "title" => "About Us Page Adjustments", "custom_setting",
    "priority" => 50
  ));
  $wp_customize->add_setting("about_headline_setting", array(
    "default" => "Impactful Text"
  ));
  $wp_customize->add_control("about_headline_control", array(
    "label" => "Enter a custom header",
    "section" => "about_page_section",
    "settings" => "about_headline_setting",
    "type" => "text"
  ));
  $wp_customize->add_setting("about_sub_text_setting", array(
    "default" => "Short and captivating description."
  ));
  $wp_customize->add_control("about_sub_text_control", array(
    "label" => "Enter a subtext",
    "section" => "about_page_section",
    "settings" => "about_sub_text_setting",
    "type" => "text"
  ));
  $wp_customize->add_setting("about_hero_img_setting", array(
    "default" => ''
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'about_hero_img_setting', array(
      "label" => "Upload a hero image",
      "section" => "about_page_section",
      "settings" => "about_hero_img_setting"
    ))
  );

  // Website Global Styles -----------------------------------------------------
  $wp_customize->add_section("website_color_section", array(
    "title" => "Website Colors", "custom_setting",
    "priority" => 49
  ));
  // Primary Color //////////
  $wp_customize->add_setting("primary_color_setting", array(
    "default" => "#33CCCC"
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'primary_color_setting', array(
      "label" => "Primary Color",
      "section" => "website_color_section",
      "settings" => "primary_color_setting"
  )));
  // Background Color //////////
  $wp_customize->add_setting("bg_color_setting", array(
    "default" => "rgb(246, 246, 246)"
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'bg_color_setting', array(
      "label" => "Background Color",
      "section" => "website_color_section",
      "settings" => "bg_color_setting"
  )));
  // Text Color //////////
  $wp_customize->add_setting("text_color_setting", array(
    "default" => "rgb(14, 14, 14)"
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'text_color_setting', array(
      "label" => "Text Color",
      "section" => "website_color_section",
      "settings" => "text_color_setting"
  )));

  // Contact Us ----------------------------------------------------------------
  $wp_customize->add_section("contact_page_section", array(
    "title" => "Contact Section Adjustments", "custom_setting",
    "priority" => 50
  ));
  // Headline //////////
  $wp_customize->add_setting("contact_headline_setting", array(
    "default" => "Impactful Text"
  ));
  $wp_customize->add_control("contact_headline_control", array(
    "label" => "Enter a custom header",
    "section" => "contact_page_section",
    "settings" => "contact_headline_setting",
    "type" => "text"
  ));
  // Sub Text //////////
  $wp_customize->add_setting("contact_sub_text_setting", array(
    "default" => "Short and captivating description."
  ));
  $wp_customize->add_control("contact_sub_text_control", array(
    "label" => "Enter a subtext",
    "section" => "contact_page_section",
    "settings" => "contact_sub_text_setting",
    "type" => "text"
  ));
  // Phone Icon //////////
  $wp_customize->add_setting("phone_icon_setting", array(
    "default" => ''
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'phone_icon_setting', array(
      "label" => "Upload a phone icon",
      "section" => "contact_page_section",
      "settings" => "phone_icon_setting"
    ))
  );
  // Email Icon //////////
  $wp_customize->add_setting("email_icon_setting", array(
    "default" => ''
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'email_icon_setting', array(
      "label" => "Upload an email icon",
      "section" => "contact_page_section",
      "settings" => "email_icon_setting"
    ))
  );

  // Booking -------------------------------------------------------------------
  $wp_customize->add_section("booking_page_section", array(
    "title" => "Booking Page Adjustments", "custom_setting",
    "priority" => 50
  ));
  // Headline //////////
  $wp_customize->add_setting("booking_headline_setting", array(
    "default" => "Impactful Text"
  ));
  $wp_customize->add_control("booking_headline_control", array(
    "label" => "Enter a custom header",
    "section" => "booking_page_section",
    "settings" => "booking_headline_setting",
    "type" => "text"
  ));
  // Sub Text //////////
  $wp_customize->add_setting("booking_sub_text_setting", array(
    "default" => "Short and captivating description."
  ));
  $wp_customize->add_control("contact_sub_text_control", array(
    "label" => "Enter a subtext",
    "section" => "booking_page_section",
    "settings" => "booking_sub_text_setting",
    "type" => "text"
  ));

  // Company Information  ------------------------------------------------------
  $wp_customize->add_section("company_section", array(
    "title" => "Company Information", "custom_setting",
    "priority" => 48
  ));
  // Logo Top Nav //////////
  $wp_customize->add_setting("logo_nav_setting", array(
    "default" => ''
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'logo_nav_setting', array(
      "label" => "Top Nav Logo",
      "section" => "company_section",
      "settings" => "logo_nav_setting"
    ))
  );
  // Logo Footer //////////
  $wp_customize->add_setting("logo_footer_setting", array(
    "default" => ''
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'logo_footer_setting', array(
      "label" => "Footer Logo",
      "section" => "company_section",
      "settings" => "logo_footer_setting"
    ))
  );

  // Phone Number //////////
  $wp_customize->add_setting("phone_setting", array(
    "default" => "021 2134 5678"
  ));
  $wp_customize->add_control("phone_control", array(
    "label" => "Company Phone No.",
    "section" => "company_section",
    "settings" => "phone_setting",
    "type" => "text"
  ));
  $wp_customize->add_setting("phone_note_setting", array(
    "default" => "Same hours as in store."
  ));
  $wp_customize->add_control("phone_note_control", array(
    "label" => "Phone No. Note",
    "section" => "company_section",
    "settings" => "phone_note_setting",
    "type" => "text"
  ));

  // Email //////////
  $wp_customize->add_setting("email_setting", array(
    "default" => "techsupport.help@email.com"
  ));
  $wp_customize->add_control("email_control", array(
    "label" => "Company Service Email",
    "section" => "company_section",
    "settings" => "email_setting",
    "type" => "text"
  ));

  // Location //////////
  $wp_customize->add_setting("location_setting", array(
    "default" => "987 High St, Wellington"
  ));
  $wp_customize->add_control("location_control", array(
    "label" => "Company Store Location",
    "section" => "company_section",
    "settings" => "location_setting",
    "type" => "text"
  ));
  // Store Time //////////
  $wp_customize->add_setting("store_hours_setting", array(
    "default" => "MON-FRI : 9am - 6pm    |    SAT & SUN : 10am - 3pm"
  ));
  $wp_customize->add_control("store_hours_control", array(
    "label" => "Store Hours",
    "section" => "company_section",
    "settings" => "store_hours_setting",
    "type" => "text"
  ));
  // Store Note //////////
  $wp_customize->add_setting("store_note_setting", array(
    "default" => "Don't forget to scan coing in, thank you!"
  ));
  $wp_customize->add_control("store_note_control", array(
    "label" => "Store Note",
    "section" => "company_section",
    "settings" => "store_note_setting",
    "type" => "text"
  ));
}

function custom_styles() {
  $primary_color = get_theme_mod("primary_color_setting");
  $bg_color = get_theme_mod("bg_color_setting");
  $text_color = get_theme_mod("text_color_setting");

  ?>
  <style type="text/css">
    :root {
      --primary-color: <?php echo $primary_color ?>;
      --bg-color: <?php echo $bg_color ?>;
      --text-color: <?php echo $text_color ?>;
    }
  </style>
  <?php
}

add_action('wp_head', 'custom_styles');
add_action("customize_register", "custom_options");

// Removes Standard Post on Dashboard
function post_remove (){
   remove_menu_page('edit.php');
}
add_action('admin_menu', 'post_remove');

// Removing Specific Sections in the Customize Bar
function remove_these_sections( $wp_customize ) {
 $wp_customize->remove_section("static_front_page");
}
add_action( "customize_register", "remove_these_sections" );

// Remove Comment Section on Dashboard and Customize Bar
// Removes from admin menu
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
add_action( 'admin_menu', 'my_remove_admin_menus' );
?>
