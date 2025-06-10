<?php

function pg_radio_scripts()
{
    wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('bootstrapCSS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapJS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js');
    wp_enqueue_style('fontAwesomeCSS', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
    wp_enqueue_script('fontAwesomeJS', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js');
}

function pg_radio_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}


function page_header($title)
{

?>
    <section class="page-header__bread">
        <div>
            <h3> <?php echo $title; ?> </h3>
            <p>
                <a href=" <?php echo get_home_url() ?> " > Home </a> - <?php  echo $title; ?>
             </p>
        </div>
    </section>

<?php
}

add_action('after_setup_theme', 'pg_radio_features');
add_action('wp_enqueue_scripts', 'pg_radio_scripts');
