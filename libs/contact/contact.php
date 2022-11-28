<?php 
    $siedzibaText = get_field('siedziba_text');
    $siedzibaGodziny = get_field('siedziba_godziny');
    $oddzialText = get_field('oddzial_text');
    $oddzialGodziny = get_field('oddzial_godziny');
?>


<div class="contactPage" style="background: url(<?php echo THEME_URL; ?>_dev/img/dot-bg.png); background-repeat: no-repeat; background-position: 50% 130%; background-color: #2d2d2d;">
    <img src="<?php echo THEME_URL; ?>_dev/img/contact-bg.jpg" alt="" class="contactBG">
    <img src="<?php echo THEME_URL; ?>_dev/img/map-contact.png" alt="" class="map animate fadeIn d-400">
    <div class="container">
        <h1 class="contactTitle">Kontakt</h1>
        <div class="contactGrid">
            <div class="contact--col animate fadeIn">
                <?php echo $siedzibaText; ?>
            </div>
            <div class="contact--col animate fadeIn d-800 mb40">
                <div class="contactClock">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41.421" height="41.421" viewBox="0 0 41.421 41.421">
                        <defs>
                            <linearGradient id="linear-gradient" x1="1" y1="0.5" x2="0" y2="0.5" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#edea63"/>
                            <stop offset="1" stop-color="#cb9933"/>
                            </linearGradient>
                        </defs>
                        <path id="plus" d="M20.71,0a20.71,20.71,0,1,0,20.71,20.71A20.733,20.733,0,0,0,20.71,0Zm9.061,22.436H22.436v7.335a1.726,1.726,0,0,1-3.452,0V22.436H11.65a1.726,1.726,0,0,1,0-3.452h7.335V11.65a1.726,1.726,0,0,1,3.452,0v7.335h7.335a1.726,1.726,0,0,1,0,3.452Zm0,0" fill="url(#linear-gradient)"/>
                    </svg>
                    <span>godziny otwarcia</span>
                </div>
                <div class="clockOpen">
                    <?php echo $siedzibaGodziny; ?>
                </div>
            </div>
            <div class="contact--col animate fadeIn">
                <?php echo $oddzialText; ?>
            </div>
            <div class="contact--col animate fadeIn d-800">
                <div class="contactClock">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41.421" height="41.421" viewBox="0 0 41.421 41.421">
                        <defs>
                            <linearGradient id="linear-gradient" x1="1" y1="0.5" x2="0" y2="0.5" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#edea63"/>
                            <stop offset="1" stop-color="#cb9933"/>
                            </linearGradient>
                        </defs>
                        <path id="plus" d="M20.71,0a20.71,20.71,0,1,0,20.71,20.71A20.733,20.733,0,0,0,20.71,0Zm9.061,22.436H22.436v7.335a1.726,1.726,0,0,1-3.452,0V22.436H11.65a1.726,1.726,0,0,1,0-3.452h7.335V11.65a1.726,1.726,0,0,1,3.452,0v7.335h7.335a1.726,1.726,0,0,1,0,3.452Zm0,0" fill="url(#linear-gradient)"/>
                    </svg>
                    <span>gordziny otwarcia</span>
                </div>
                <div class="clockOpen">
                    <?php echo $oddzialGodziny; ?>
                </div>
            </div>
        </div>
        <h1 class="titleGold">
            Dzień dobry
        </h1>
        <div class="form animate fadeIn d-400">
            <?php echo do_shortcode('[contact-form-7 id="80" title="Zamów pomiar"]'); ?>
        </div>
    </div>
</div>