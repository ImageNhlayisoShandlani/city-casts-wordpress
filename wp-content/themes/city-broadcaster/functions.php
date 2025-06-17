<?php

function pg_radio_scripts()
{
    wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('bootstrapCSS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('videojs-css', '//vjs.zencdn.net/8.22.0/video-js.css');
    wp_enqueue_script('bootstrapJS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js');
    wp_enqueue_style('fontAwesomeCSS', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
    wp_enqueue_script('fontAwesomeJS', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js');
    wp_enqueue_script('videojs-js', '//vjs.zencdn.net/8.22.0/video.min.js',  [], null, true);

    //href="https://vjs.zencdn.net/8.22.0/video-js.css"
}

function pg_videojs_force_init() {
    ?>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        if (typeof videojs !== 'undefined') {
          videojs('my-video', {
            liveui: true
          });
        }
      });
    </script>
    <?php
}
add_action('wp_footer', 'pg_videojs_force_init');
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
                <a href=" <?php echo get_home_url() ?> "> Home </a> - <?php echo $title; ?>
            </p>
        </div>
    </section>

<?php
}

function adjestedCoreQWueries($query)
{
    if (!is_admin() and is_post_type_archive('show') and $query->is_main_query()) {
        $query->set('meta_key', 'start_time');
        $query->set('orderby', 'meta_value');
        $query->set('order', 'ASC');
    }
}

add_action('pre_get_posts', 'adjestedCoreQWueries');
add_action('after_setup_theme', 'pg_radio_features');
add_action('wp_enqueue_scripts', 'pg_radio_scripts');
