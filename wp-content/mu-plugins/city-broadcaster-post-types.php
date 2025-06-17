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

    register_post_type('article', [
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'rewrite' => [
            'slug' => 'articles'
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        ],
        'labels' => [
            'name' => 'Articles',
            'all_items' => 'All Articles',
            'edit_item' => 'Edit Article',
            'add_new_item' => 'Add New Article',
            'singular_name' => 'Articles'
        ],
        'menu_icon' => 'dashicons-rss'
    ]);


     register_post_type('channel', [
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'rewrite' => [
            'slug' => 'channels'
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        ],
        'labels' => [
            'name' => 'Channels',
            'all_items' => 'All Channels',
            'edit_item' => 'Edit Channels',
            'add_new_item' => 'Add New Channel',
            'singular_name' => 'Channel'
        ],
        'menu_icon' => 'dashicons-format-video'
    ]);
}



add_action('init', 'reg_theme_post_types');