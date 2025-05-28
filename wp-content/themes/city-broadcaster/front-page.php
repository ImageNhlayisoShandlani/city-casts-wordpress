<?php

get_header();
?>

<section class="page-slide">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost:10058/wp-content/uploads/2025/02/TOUCHDOWN_1-1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://localhost:10058/wp-content/uploads/2025/02/top-20.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://localhost:10058/wp-content/uploads/2025/02/msizi-2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="container-fluid" id="home-shows">
    <div class="row shows-wrap">
        <?php
        $shows = new WP_Query([
            'post_type' => 'show',
            'post_per_page' => 2
        ]);

        while ($shows->have_posts()) {
            $shows->the_post();

        ?>

            <div class="single-shows col-md-6 on-air">
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
        <?php
        }

        wp_reset_query();
        ?>

        <!-- <div class="single-shows col-md-6">
            <img src="/wp-content/uploads/2025/05/photo-6.jpg" alt="" class="show-image" loading="lazy">
            <div class="show-information">
                <div class="text">
                    <h2 class="show-title"><i class="fa-solid fa-microphone"></i> <span>Afternoon Stroll</span></h2>
                    <p><i class="fa-solid fa-clock"></i> <span>06:00 - 11:59</span> </p>
                    <p class="show-small">
                        "
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                        "
                    </p>
                </div>
                <button class="play-button">
                    <i class="fa-solid fa-play"></i> <span>Listen Live</span>
                </button>
            </div>
        </div> -->


    </div>
</section>
<?php
get_footer();
?>