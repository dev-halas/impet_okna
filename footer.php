<div id="map" class="animate fadeInBottomLow d-200"></div>
<div class="orderForm">
    <div class="formHeader">
        <h2>Formularz pomiaru</h2>
        <div class="formExit">
            <svg xmlns="http://www.w3.org/2000/svg" width="29.734" height="29.736" viewBox="0 0 29.734 29.736">
                <path id="close"
                    d="M4.317,33.419a1.062,1.062,0,0,0,1.5,0L18.871,20.367,31.928,33.419a1.063,1.063,0,0,0,1.5-1.5L20.374,18.865,33.425,5.808a1.063,1.063,0,0,0-1.5-1.5L18.871,17.362,5.815,4.31a1.062,1.062,0,0,0-1.5,1.5L17.369,18.865,4.317,31.921a1.062,1.062,0,0,0,0,1.5Z"
                    transform="translate(-4.008 -3.994)" fill="#2d2d2d" />
            </svg>
        </div>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="80" title="Zamów pomiar"]'); ?>
</div>
<div class="orderForm">
    <div class="formHeader">
        <h2>Projekt do wyceny</h2>
        <div class="formExit">
            <svg xmlns="http://www.w3.org/2000/svg" width="29.734" height="29.736" viewBox="0 0 29.734 29.736">
                <path id="close"
                    d="M4.317,33.419a1.062,1.062,0,0,0,1.5,0L18.871,20.367,31.928,33.419a1.063,1.063,0,0,0,1.5-1.5L20.374,18.865,33.425,5.808a1.063,1.063,0,0,0-1.5-1.5L18.871,17.362,5.815,4.31a1.062,1.062,0,0,0-1.5,1.5L17.369,18.865,4.317,31.921a1.062,1.062,0,0,0,0,1.5Z"
                    transform="translate(-4.008 -3.994)" fill="#2d2d2d" />
            </svg>
        </div>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="81" title="Projekt do wyceny"]'); ?>
</div>

<a href="#scrollUp" class="footerScrollUp">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33.894" height="33.894"
        viewBox="0 0 33.894 33.894">
        <defs>
            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#edea63" />
                <stop offset="1" stop-color="#cb9933" />
            </linearGradient>
        </defs>
        <g id="arrow-right" transform="translate(0 33.894) rotate(-90)">
            <path id="Path_6690" data-name="Path 6690"
                d="M16.947,0A16.947,16.947,0,1,0,33.894,16.947,16.947,16.947,0,0,0,16.947,0Zm0,32.2A15.252,15.252,0,1,1,32.2,16.947,15.252,15.252,0,0,1,16.947,32.2Zm0,0"
                fill="url(#linear-gradient)" />
            <path id="Path_6691" data-name="Path 6691"
                d="M172.067,128.209a.847.847,0,1,0-1.116,1.276l6.05,5.293-6.05,5.293a.847.847,0,1,0,1.116,1.276l6.779-5.931a.848.848,0,0,0,0-1.276Zm0,0"
                transform="translate(-157.104 -117.832)" fill="url(#linear-gradient)" />
        </g>
    </svg>
</a>

<footer class="footer animate fadeInBottomLow d-200" id="kontakt">
    <?php wp_footer(); ?>

    <?php
    $facebookLink = get_field('facebook_url', 'options');
    $footerLogo = get_field('footer_logo', 'options');
    $footerAdress = get_field('footer_adress', 'options');
    $footerQuestions = get_field('footer_questions', 'options');
    $headerPhone = get_field('header_phone', 'options');
    $headerMail = get_field('header_mail', 'options');
    ?>
    <div class="footerTitle">
        <h1 class="title">Kontakt</h1>
    </div>

    <div class="footerInner">
        <div class="footerLogo">
            <img src="<?php echo $footerLogo['url']; ?>" alt="LOGO">
            <a href="<?php echo esc_url($facebookLink); ?>" target="_blank" class="footerFacebook--ico">
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
                <span>facebook</span>
            </a>
        </div>
        <div class="footerContact">
            <div class="footerContact--item">
                <?php echo $footerAdress; ?>
            </div>

            <div class="footerContact--item">
                <h2>Masz pytanie?</h2>
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

        </div>

        <div class="footerCTA">
            <div class="footerCTA--links">
                <button class="footerButton">zamów pomiar</button>
                <button class="footerButton">wyślij projekt do wyceny</a>
            </div>
        </div>

    </div>

</footer>
</body>
<!-- Javascript-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="<?php echo THEME_URL; ?>public/bundle.js"></script>
<script src="<?php echo THEME_URL; ?>public/map.js"></script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSPaL8-8q4GI_Uk8QvIb_fRHxVX3LpMEY&callback=initMap"></script>