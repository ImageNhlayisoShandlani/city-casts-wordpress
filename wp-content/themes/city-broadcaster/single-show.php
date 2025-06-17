<style>
    #shows .single-shows{
        flex-wrap: wrap;
        height: fit-content !important;
        overflow: scroll;
    }

    .single-shows a{
        text-decoration: none;
    }

    #shows .single-shows img{
        width: 100%;
        margin-bottom: 2rem;
    }

    .show-information{
        width: 100% !important;
        margin-bottom: 1rem;
    }

    .presenter-socials{
        justify-content: space-between !important;
    }
</style>

<?php

get_header();
//page_header(get_the_title());
$now = current_time('H:i:s');
?>


<section class="page-header__bread">
    <div>
        <h3> <?php the_title() ?> </h3>
        <p>
            <a href=" <?php echo get_home_url() ?> "> Home </a> - <a href="/shows">Shows</a> - <?php echo the_title() ?>
        </p>
    </div>
</section>

<section class="container-fluid" id="shows">
    <div class="row" id="shows__heading">
        <div class="col-md-6">
            <span><?php the_title(); ?></span>
            <h2>
                Check out all our shows lineup below
            </h2>
        </div>
        <div class="col-md-6">
            <div class="presenter-socials">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="row">

        <?php

        while (have_posts()) {
            the_post();
            $now = current_time('H:i:s');
            $start_time = get_field('start_time');
            $end_time = get_field('end_time');

        ?>

            <div class="single-shows col-md-12 on-air">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="show-image" loading="lazy">
                <div class="show-information">
                    <div class="text">
                        <h2 class="show-title"><i class="fa-solid fa-microphone"></i> <span><?php the_title(); ?></span>
                            <?php
                            if ($start_time <= $now and $end_time >= $now) {

                            ?>
                                <span class="on-air">On Air</span>
                        </h2>

                    <?php
                            }
                    ?>

                    <p><i class="fa-solid fa-clock"></i> <span><?php echo get_field('start_time') . ' - ' .  get_field('end_time'); ?></span> </p>
                    <p class="show-small">
                        "<?php the_content() ?>"
                    </p>
                    </div>
                    <?php
                    if ($start_time <= $now and $end_time >= $now) {

                    ?>
                        <button class="play-button">

                            <i class="fa-solid fa-play"></i> <span>Listen Live</span>
                        </button>

                    <?php
                    }
                    ?>

                </div>
            </div>
            <hr>
        <?php

        }
        ?>


    </div>
</section>



<?php

get_footer();
