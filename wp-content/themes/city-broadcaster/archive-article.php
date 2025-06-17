<?php

get_header();
page_header("Articles");
$now = current_time('H:i:s');
?>


<section class="container-fluid" id="shows">
    <div class="row" id="shows__heading">
        <div class="col-md-6">
            <span>Latest News</span>
            <h2>
                Never miss any update from across the world
            </h2>
        </div>
        <div class="col-md-6">
            <p>From in-depth interviews to exclusive stories, these segments are crafted to entertain, inform, and inspire. Tune in now to enjoy the best we have to offer!</p>
        </div>
    </div>

    <div class="row">

        <?php

        while (have_posts()) {
            the_post();

        ?>

            <a href="<?php the_permalink(); ?>" class="col-md-6 single-news" style="text-decoration: none;">
                <div class="top-news">
                    <img src="<?php the_post_thumbnail(); ?>" alt="" loading="lazy">
                    <div>
                        <h5>22</h5>
                        <p style="color: black;">Dec</p>
                    </div>
                </div>
                <h4><?php the_title(); ?></h4>
                <p class="news-write-up"><?php echo get_the_excerpt(); ?></p>

                <button class="play-button"><span>Read More</span> <i class="fa-regular fa-circle-right"></i></button>
            </a>
        <?php

        }
        ?>


    </div>
</section>



<?php

get_footer();
