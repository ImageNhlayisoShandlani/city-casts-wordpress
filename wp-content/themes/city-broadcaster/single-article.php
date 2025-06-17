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
            <a href=" <?php echo get_home_url() ?> "> Home </a> - <a href="/articles">Articles</a> - <?php echo the_title() ?>
        </p>
    </div>
</section>

<section class="container-fluid" id="shows">
    <div class="row" id="shows__heading">
        <div class="col-md-6">
            <span> <h3 style="color: inherit;"><?php the_title(); ?></h3></span>
        </div>
        <div class="col-md-6">
            <?php the_excerpt();?>
        </div>
    </div>

    <div class="row">

        <?php

        while (have_posts()) {
            the_post();

        ?>

            <div class="single-shows col-md-12 on-air">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="show-image" loading="lazy">
                <div class="show-information">
                    <div class="text">

                    <p><i class="fa-solid fa-calendar-days"></i> <span><?php the_date()?></span> </p>
                    <p class="show-small">
                        <?php the_content() ?>
                    </p>
                    </div>

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
