<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (is_search()): ?>
    <meta name="robots" content="noindex, nofollow" />
    <?php endif; ?>

    <?php wp_head(); ?>
    <title>
        <?php
        echo bloginfo('name');
        echo ' - ';
        bloginfo('description');
        ?>
    </title>

    <meta charset="<?php bloginfo('charset'); ?>" />

    <!-- Stylesheets-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo THEME_URL; ?>public/main.css">
</head>


<body <?php body_class(); ?>>
    <?php
    $headerLogo = get_field('header_logo', 'options');
    $headerPhone = get_field('header_phone', 'options');
    $headerMail = get_field('header_mail', 'options');
    $facebookLink = get_field('facebook_url', 'options');
    ?>
    <div class="scrollUp--id" id="scrollUp"></div>
    <header class="header">
        <nav class="headerInner">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="headerLogo">
                <img src="<?php echo $headerLogo['url']; ?>" alt="" class="headerLogo--img">
            </a>
            <div class="headerContact">
                <a href="tel: <?php echo $headerPhone; ?>" class="headerContact--item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="circle-phone-flip"
                            d="M12,24A12,12,0,1,1,24,12,12.013,12.013,0,0,1,12,24ZM12,2A10,10,0,1,0,22,12,10.011,10.011,0,0,0,12,2ZM6,15.827,7.378,17.2a2.743,2.743,0,0,0,1.957.8C12.969,18,18,13.248,18,9.334a2.747,2.747,0,0,0-.8-1.957L15.828,6,13.116,8.711l1.775,1.775a7.46,7.46,0,0,1-4.4,4.4L8.713,13.114,6,15.826Z"
                            transform="translate(24 24) rotate(180)" fill="#fff" />
                    </svg>
                    <span><?php echo $headerPhone; ?></span>
                </a>
                <a href="mailto: <?php echo $headerMail; ?>" class="headerContact--item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.999" viewBox="0 0 24 23.999">
                        <path id="at"
                            d="M12,0a12,12,0,1,0,7.092,21.681l-1.184-1.612A10,10,0,1,1,22,12v2a2,2,0,0,1-4,0V12a6.021,6.021,0,1,0-1.48,3.933A3.986,3.986,0,0,0,24,14V12A12.013,12.013,0,0,0,12,0Zm0,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Z"
                            transform="translate(24 -0.001) rotate(90)" fill="#fff" />
                    </svg>
                    <span><?php echo $headerMail; ?></span>
                </a>
            </div>
            <a href="<?php echo esc_url($facebookLink); ?>" target="_blank" class="facebook--ico">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12.82"
                    height="24.689" viewBox="0 0 12.82 24.689">
                    <defs>
                        <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#cb9933" />
                            <stop offset="1" stop-color="#edea63" />
                        </linearGradient>
                    </defs>
                    <path id="f_1_"
                        d="M45.612,24.689V13.428h3.778l.567-4.39H45.612v-2.8c0-1.271.351-2.137,2.175-2.137H50.11V.172A31.5,31.5,0,0,0,46.725,0C43.374,0,41.08,2.045,41.08,5.8V9.038H37.29v4.39h3.79V24.689Z"
                        transform="translate(-37.29)" fill="url(#linear-gradient)" />
                </svg>
            </a>
            <div class="headerLinks">
                <?php wp_nav_menu(['theme_location' => 'main_nav']); ?>
            </div>
        </nav>
    </header>
    <div class="rightBar">
        <button class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <span></span>
    </div>