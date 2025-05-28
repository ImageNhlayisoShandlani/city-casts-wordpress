<?php


function reg_theme_post_types(){

    register_post_type('show', [
        'has_archive' => true,
        'supports' => [
            'title',
            'editor',
            'excerpt',
            'thumbnail',
        ],
        'rewrite' => [
            'slug' => 'shows'
        ],
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Shows',
            'all_items' => 'All Shows',
            'edit_item' => 'Edit Shows',
            'add_new_item' => 'Add New Show',
            'singular_name' => 'Shows'
        ],
        'menu_icon' => 'dashicons-playlist-audio'
    ]);
}


add_action('init', 'reg_theme_post_types');