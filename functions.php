<?php

// STYLES
function load_stylesheets()
{
    // loading font-awesome
    wp_register_style('fontawesomecss', get_template_directory_uri() . '/assets/fonts/fontawesome/css/all.css', array(), false, 'all');
    wp_enqueue_style('fontawesomecss');

    // loading Bootstrap styles
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    // loading own styles
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

    // loading own scss styles
    wp_register_style('stylesscss', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all');
    wp_enqueue_style('stylesscss');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// JQUERY
function include_jquery()
{
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

// SCRIPTS
function loadjs()
{
    // loading own scripts
    wp_register_script('customjs', get_template_directory_uri() . '/assets/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');