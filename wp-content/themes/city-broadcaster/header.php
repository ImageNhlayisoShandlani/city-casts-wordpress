<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if (is_front_page()) echo "active"; ?>" aria-current="page" href="<?php echo home_url();?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(is_post_type_archive('show')) echo "active";?>" href=" <?php echo site_url('/shows'); ?>">Shows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Watch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">About Us</a>
                    </li>
                </ul>
                <div class="right-header">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                    <button class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>