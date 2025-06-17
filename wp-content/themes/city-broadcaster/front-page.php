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
        $count = 0;
        $now = current_time('H:i:s');
        $currentShow = new WP_Query([
            'post_type' => 'show',
            'posts_per_page' => 1,
            'meta_query' => [
                'relation' => 'AND',
                [
                    'key' => 'start_time',
                    'compare' => '<=',
                    'value' => $now,
                    'type' => 'TIME'
                ],
                [
                    'key' => 'end_time',
                    'compare' => '>',
                    'value' => $now,
                    'type' => 'TIME'
                ]
            ],
        ]);

        
        while ($currentShow->have_posts()) {
            $currentShow->the_post();
            $count++;
        ?>

            <a href="<?php the_permalink();?>" class="single-shows col-md-6 on-air">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="show-image" loading="lazy">
                <div class="show-information">
                    <div class="text">
                        <h2 class="show-title"><i class="fa-solid fa-microphone"></i> <span><?php the_title(); ?></span>

                            <?php

                            if ($count == 1) {
                            ?>
                                <span class="on-air">On Air</span>
                        </h2>
                    <?php

                            }
                    ?>

                    <p><i class="fa-solid fa-clock"></i> <span><?php echo get_field('start_time') . ' - ' .  get_field('end_time'); ?></span> </p>
                    <p class="show-small">
                        "<?php the_excerpt(); ?>"
                    </p>
                    </div>
                    <?php
                    if ($count == 1) {
                    ?>
                        <button class="play-button">




                            <i class="fa-solid fa-play"></i> <span>Listen Live</span>


                        </button>
                    <?php
                    }
                    ?>
                </div>
            </a>
        <?php
        }

        wp_reset_query();
        $nextShow = new WP_Query([
            'post_type' => 'show',
            'posts_per_page' => 1,
            'meta_key' => 'start_time',
            'orderby' => 'meta_value',
            'order' => 'ASC',
            'meta_query' =>
            [
                'key' => 'start_time',
                'compare' => '>=',
                'value' => $now,
                'type' => 'TIME'
            ],

        ]);
        while ($nextShow->have_posts()) {
            $nextShow->the_post();
            //$count++;
        ?>

           <a href="<?php the_permalink();?> "class="single-shows col-md-6 on-air">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="show-image" loading="lazy">
                <div class="show-information">
                    <div class="text">
                        <h2 class="show-title"><i class="fa-solid fa-microphone"></i> <span><?php the_title(); ?></span>

                            <?php

                            if ($count == 1) {
                            ?>
                                <!-- <span class="on-air">On Air</span> -->
                        </h2>
                    <?php

                            }
                    ?>

                    <p><i class="fa-solid fa-clock"></i> <span><?php echo get_field('start_time') . ' - ' .  get_field('end_time'); ?></span> </p>
                    <p class="show-small">
                        "<?php the_excerpt(); ?>"
                    </p>
                    </div>
                    <?php
                    if ($count == 1) {
                    ?>
                        <!-- <button class="play-button">




                         <i class="fa-solid fa-play"></i> <span>Listen Live</span>




                        </button> -->


                    <?php
                    }
                    ?>
                </div>
            </a>
        <?php
        }
        wp_reset_query();
        $count = 0;
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

<section class="container-fluid" id="presenters">
    <div class="row heading--sub-heading">
        <div class="col-md-12">
            <p>Our Presenters</p>
            <h3>Meet the team that brings joy to your day to day life</h3>
        </div>

    </div>

    <div class="row presenter-wrap">
        <div class="col-md-3 single-presenter">
            <div class="presenter--image">
                <div>

                </div>
                <!-- <img src="http://localhost:10058/wp-content/uploads/2025/02/msizi-2.png" alt="" loading="lazy"> -->
            </div>

            <h4>Image Shandlani</h4>
            <p>Afternoon Drive</p>
            <div class="presenter-socials">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>

        <div class="col-md-3 single-presenter">
            <div class="presenter--image">
                <div>

                </div>
                <!-- <img src="http://localhost:10058/wp-content/uploads/2025/02/msizi-2.png" alt="" loading="lazy"> -->
            </div>

            <h4>Image Shandlani</h4>
            <p>Afternoon Drive</p>
            <div class="presenter-socials">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>

        <div class="col-md-3 single-presenter">
            <div class="presenter--image">
                <div>

                </div>
                <!-- <img src="http://localhost:10058/wp-content/uploads/2025/02/msizi-2.png" alt="" loading="lazy"> -->
            </div>

            <h4>Image Shandlani</h4>
            <p>Afternoon Drive</p>
            <div class="presenter-socials">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>

        <div class="col-md-3 single-presenter">
            <div class="presenter--image">
                <div>

                </div>
                <!-- <img src="http://localhost:10058/wp-content/uploads/2025/02/msizi-2.png" alt="" loading="lazy"> -->
            </div>

            <h4>Image Shandlani</h4>
            <p>Afternoon Drive</p>
            <div class="presenter-socials">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid" id="home-subscribe">
    <div class="row">
        <div class="col-md-12">
            <p class="heading-paragraph__color">Our Newsletter</p>
            <h3>Catch Up on What You’ve Missed</h3>
            <p>Dive into our full episode library and catch up on all the exciting conversations, inspiring stories, and trending topics you’ve missed.</p>
            <button class="play-button">
                Subscribe
            </button>
        </div>
    </div>
</section>




<section class="container-fluid" id="news">
    <div class="row heading--sub-heading">
        <div class="col-md-12">
            <p>Latest News</p>
            <h3>Catch up on whats happening around you</h3>
        </div>

    </div>

    <div class="row">

    <?php
    $latestNews = new WP_Query([
        'post_type' => 'article',
        'posts_per_page' => 3
    ]);

    while($latestNews->have_posts()){
        $latestNews->the_post();


        ?>

        <a href="<?php the_permalink();?>" class="col-md-4 single-news" style="text-decoration: none;">
            <div class="top-news">
                <img src="<?php the_post_thumbnail();?>" alt="" loading="lazy">
                <div>
                    <h5>22</h5>
                    <p style="color: black;">Dec</p>
                </div>
            </div>
            <h4><?php the_title(); ?></h4>
            <p class="news-write-up"><?php echo get_the_excerpt();?></p>

            <button class="play-button"><span>Read More</span> <i class="fa-regular fa-circle-right"></i></button>
        </a>

        <?php
    }

    wp_reset_query();
    ?>


    </div>
</section>

<?php
get_footer();
?>