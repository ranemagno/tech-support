<?php

add_theme_support('post-thumbnails');

function tech_support_assets() {
  wp_enqueue_style('tech_support_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'tech_support_assets');

register_nav_menus(['primary'=> 'Primary Menu']);

// change headline text
// function headline_options($wp_customize) {
//
//   $wp_customize->add_section("headline_section", array(
//     "title" => "Headline Text", "custom_setting",
//     "priority" => 251
//   ));
//
//   $wp_customize->add_setting("headline_setting", array(
//     "default" => "Impact Text"
//   ));
//
//   $wp_customize->add_control("headline_control", array(
//     "label" => "Enter a custom title",
//     "section" => "headline_section",
//     "settings" => "headline_setting",
//     "type" => "text"
//   ));
// }
//
// add_action("customize_register", "headline_options");



?>
