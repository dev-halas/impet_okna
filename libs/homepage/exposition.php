<?php 
    $expoText = get_field('home_expo_text');
    $expoLink = get_field('home_expo_link');
?>
<div class="exposition" id="ekspozycja">
    <div class="exposition--inner animate fadeIn d-200">
        <h1 class="title">Ekspozycja</h1>
        <div class="exposition--content">
            <span class="exposition--textVertical">NASZE EKSPOZYCJE</span>
            <?php echo $expoText; ?>
            <a href="<?php echo $expoLink['url']; ?>" class="button--black">
                <span><?php echo $expoLink['title']; ?></span>
            </a>
        </div>
    </div>
    <div class="exposition--img">
        <img src="<?php echo THEME_URL; ?>_dev/img/expo.png" alt="">
    </div>
    <?php get_template_part('/libs/svg-map'); ?>
</div>