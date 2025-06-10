<?php

get_header();
page_header("Shows");

?>


<section class="container-fluid" id="shows">
    <div class="row" id="shows__heading">
        <div class="col-md-6">
            <span>Shows Lineup</span>
            <h2>
                Check out all our shows lineup below
            </h2>
        </div>
        <div class="col-md-6">
            <p>From in-depth interviews to exclusive stories, these segments are crafted to entertain, inform, and inspire. Tune in now to enjoy the best we have to offer!</p>
        </div>
    </div>

    <div class="row">
        <div class="single-shows col-md-12 on-air">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="show-image" loading="lazy">
            <div class="show-information">
                <div class="text">
                    <h2 class="show-title"><i class="fa-solid fa-microphone"></i> <span><?php the_title(); ?></span></h2>
                    <p><i class="fa-solid fa-clock"></i> <span><?php the_field('time') ?></span> </p>
                    <p class="show-small">
                        "<?php the_excerpt(); ?>"
                    </p>
                </div>
                <button class="play-button">
                    <i class="fa-solid fa-play"></i> <span>Listen Live</span>
                </button>
            </div>
        </div>

        <hr>
        <div class="single-shows col-md-12 on-air">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="show-image" loading="lazy">
            <div class="show-information">
                <div class="text">
                    <h2 class="show-title"><i class="fa-solid fa-microphone"></i> <span><?php the_title(); ?></span></h2>
                    <p><i class="fa-solid fa-clock"></i> <span><?php the_field('time') ?></span> </p>
                    <p class="show-small">
                        "<?php the_excerpt(); ?>"
                    </p>
                </div>
                <button class="play-button">
                    <i class="fa-solid fa-play"></i> <span>Listen Live</span>
                </button>
            </div>
        </div>
    </div>
</section>



<?php

get_footer();
