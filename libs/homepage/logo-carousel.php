<?php 
    $logos = get_field('home_logos');
?>

<?php if( $logos ): ?>
<div class="carousel">
    <h1 class="title">Nasi dostawcy</h1>
    <div class="swiper logoCarousel">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper logoCarousel--wrapper">
        <!-- Slides -->
        <?php foreach( $logos as $logo ): ?>
            <div class="swiper-slide carousel--item">
                <img src="<?php echo $logo['url']; ?>" alt="partner_logo-<?php echo $logo['alt']; ?>">
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>
<?php endif ?>
