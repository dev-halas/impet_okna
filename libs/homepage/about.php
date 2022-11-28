<?php 
    $krotoszynText = get_field('krotoszyn_text');
    $miliczText = get_field('milicz_text');
    $krotoszynImg = get_field('krotoszyn_img');
    $miliczImg = get_field('milicz_img');
    $aboutLink = get_field('about_link');
?>

<section class="about" id="about">
    <img src="<?php echo THEME_URL; ?>_dev/img/bg-pattern.png" alt="" class="about--cropp">
    <div class="about--inner container animate fadeIn d-200">
        <div class="about--content">
            <h1 class="title">Nasza firma</h1>
            <div class="about--text --active">
                <?php echo $krotoszynText; ?>
            </div>
            <div class="about--text">
                <?php echo $miliczText; ?>
            </div>
            <a href="<?php echo $aboutLink['url']; ?>" class="button--white"><span><?php echo $aboutLink['title']; ?><span></a>
        </div>
        <div class="about--slider">
            <img src="<?php echo $krotoszynImg['url']; ?>" alt="" class="--active">
            <img src="<?php echo $miliczImg['url']; ?>" alt="">
            <div class="about--slider--buttons">
                <button class="sliderButton --active">Krotoszyn - siedziba</button>
                <button class="sliderButton">Milicz - siedziba</button>
            </div>
        </div>
    </div>
    <svg class="about--frame" xmlns="http://www.w3.org/2000/svg" width="1882.087" height="868.982"
        viewBox="0 0 1882.087 868.982">
        <g id="Path_12" data-name="Path 12" transform="translate(0 10)" fill="none" opacity="0.5">
            <path d="M0,114.14,1882.088-10V858.982L0,734.841Z" stroke="none" />
            <path
                d="M 1881.087524414062 -8.931884765625 L 1 115.076416015625 L 1 733.9051513671875 L 1881.087524414062 857.9136962890625 L 1881.087524414062 -8.931884765625 M 1882.087524414062 -10.00006103515625 L 1882.087524414062 858.9818725585938 L 0 734.8413696289062 L 0 114.1401977539062 L 1882.087524414062 -10.00006103515625 Z"
                stroke="none" fill="#fff" />
        </g>
    </svg>

</section>