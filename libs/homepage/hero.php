<?php 
    $heroSmallTitle = get_field('home_hero_small');
    $heroTitle = get_field('home_hero_title');
    $heroLink = get_field('home_hero_link');
    $heroImg = get_field('home_hero_img');
?>

<div class="hero">
    <div class="heroInner" style="
            background: url('<?php echo $heroImg['url']; ?>'); 
            background-repeat: no-repeat; 
            background-size: cover;">

        <div class="heroContent animate showIn">
            <span class="hero--subtitle"><?php echo $heroSmallTitle; ?></span>
            <h1 class="hero--title"><?php echo $heroTitle; ?></h1>
            <a href="<?php echo $heroLink['url']; ?>" class="button--white">
                <span><?php echo $heroLink['title']; ?></span>
            </a>
            <span class="heroLine"></span>
        </div>
        
    </div>
</div>

