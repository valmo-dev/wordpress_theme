<?php

function montheme_supports ()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
}

function montheme_register_assets ()
{
    wp_register_style('tailwind', 'https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css');
    wp_register_style('daisyui', 'https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css');
    wp_register_script('tailwind', 'https://cnd.tailwindcss.com');
    wp_enqueue_style('tailwind');
    wp_enqueue_style('daisyui');
    wp_enqueue_script('tailwind');
}

function montheme_title_separator ()
{
    return '|';
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');