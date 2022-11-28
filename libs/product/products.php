<div class="products">
    <?php if (have_rows('products')): ?>
    <div class="product--items container">
        <?php while (have_rows('products')): the_row(); ?>

            <?php if( get_row_layout() == 'product_left' ): 
                $imgLeft = get_sub_field('product_left_img');
                $titleLeft = get_sub_field('product_left_title');
                $textLeft = get_sub_field('product_left_text');
                $logosLeft = get_sub_field('product_left_logos');
                $showLogos = get_sub_field('product_left_show_logos');
            ?>
                <div class="product--item left--img animate fadeIn d-400" id="<?php echo $titleLeft;?>">
                    <div class="product--img">
                        <img src="<?php echo esc_url($imgLeft['url']); ?>" alt="<?php echo $imgLeft['alt'];?>">
                    </div>
                    <div class="product--text">
                        <h1 class="title"><?php echo $titleLeft;?></h1>
                        <?php echo $textLeft; ?>

                        <?php if ( $showLogos ): ?>
                            <div class="product--more">
                                <svg width="41.421" height="41.421" viewBox="0 0 41.421 41.421">
                                    <defs>
                                        <linearGradient id="linear-gradient" x1="1" y1="0.5" x2="0" y2="0.5" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#edea63"/>
                                        <stop offset="1" stop-color="#cb9933"/>
                                        </linearGradient>
                                    </defs>
                                    <path id="plus" d="M20.71,0a20.71,20.71,0,1,0,20.71,20.71A20.733,20.733,0,0,0,20.71,0Zm9.061,22.436H22.436v7.335a1.726,1.726,0,0,1-3.452,0V22.436H11.65a1.726,1.726,0,0,1,0-3.452h7.335V11.65a1.726,1.726,0,0,1,3.452,0v7.335h7.335a1.726,1.726,0,0,1,0,3.452Zm0,0" fill="url(#linear-gradient)"/>
                                </svg>
                                <span>pokaz producentów</span>
                            </div>
                        <?php else: ?>
                            <div class="product--more">
                                
                            </div>
                        <?php endif; ?>
        
                    </div>
                    <div class="product--producers">
                        <span class="close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29.734" height="29.736" viewBox="0 0 29.734 29.736">
                                <path id="close" d="M4.317,33.419a1.062,1.062,0,0,0,1.5,0L18.871,20.367,31.928,33.419a1.063,1.063,0,0,0,1.5-1.5L20.374,18.865,33.425,5.808a1.063,1.063,0,0,0-1.5-1.5L18.871,17.362,5.815,4.31a1.062,1.062,0,0,0-1.5,1.5L17.369,18.865,4.317,31.921a1.062,1.062,0,0,0,0,1.5Z" transform="translate(-4.008 -3.994)" fill="#2d2d2d"/>
                            </svg>
                        </span>
                        <?php if( have_rows('product_left_logos') ): ?>
                        <div class="product--producerLogos">
                            <?php while ( have_rows('product_left_logos') ) : the_row(); 

                                $producerLogo = get_sub_field('product_left_logo');
                                $link = get_sub_field('product_left_link');

                            ?>

                                <a href="<?php echo $link ?>" target="_blank" class="product--producer">
                                    <img src="<?php echo esc_url($producerLogo['url']); ?>" alt="">
                                </a>

                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php elseif( get_row_layout() == 'product_right' ): 
                $imgRight = get_sub_field('product_right_img');
                $titleRight = get_sub_field('product_right_title');
                $textRight = get_sub_field('product_right_text');
                $logosRight = get_sub_field('product_right_logos');
            ?>
                <div class="product--item right--img animate fadeIn d-400" id="<?php echo $titleRight;?>">
                    <div class="product--text">
                        <h1 class="title"><?php echo $titleRight;?></h1>
                        <?php echo $textRight;?>
                        <div class="product--more">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41.421" height="41.421" viewBox="0 0 41.421 41.421">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="1" y1="0.5" x2="0" y2="0.5" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#edea63"/>
                                    <stop offset="1" stop-color="#cb9933"/>
                                    </linearGradient>
                                </defs>
                                <path id="plus" d="M20.71,0a20.71,20.71,0,1,0,20.71,20.71A20.733,20.733,0,0,0,20.71,0Zm9.061,22.436H22.436v7.335a1.726,1.726,0,0,1-3.452,0V22.436H11.65a1.726,1.726,0,0,1,0-3.452h7.335V11.65a1.726,1.726,0,0,1,3.452,0v7.335h7.335a1.726,1.726,0,0,1,0,3.452Zm0,0" fill="url(#linear-gradient)"/>
                            </svg>
                            <span>pokaz producentów</span>
                        </div>
                    </div>
                    <div class="product--img">
                        <img src="<?php echo esc_url($imgRight['url']); ?>" alt="<?php echo $imgRight['alt']; ?>">
                    </div>
                    <div class="product--producers">
                        
                            <span class="close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.734" height="29.736" viewBox="0 0 29.734 29.736">
                                    <path id="close" d="M4.317,33.419a1.062,1.062,0,0,0,1.5,0L18.871,20.367,31.928,33.419a1.063,1.063,0,0,0,1.5-1.5L20.374,18.865,33.425,5.808a1.063,1.063,0,0,0-1.5-1.5L18.871,17.362,5.815,4.31a1.062,1.062,0,0,0-1.5,1.5L17.369,18.865,4.317,31.921a1.062,1.062,0,0,0,0,1.5Z" transform="translate(-4.008 -3.994)" fill="#2d2d2d"/>
                                </svg>
                            </span>
                        
                        <?php if( have_rows('product_right_logos') ): ?>
                        <div class="product--producerLogos">
                            <?php while ( have_rows('product_right_logos') ) : the_row(); 

                                $producerLogo = get_sub_field('product_right_logo');
                                $link = get_sub_field('product_right_link');

                            ?>

                                <a href="<?php echo $link ?>" target="_blank" class="product--producer">
                                    <img src="<?php echo esc_url($producerLogo['url']); ?>" alt="">
                                </a>

                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
    
    <?php endif; ?>
</div>