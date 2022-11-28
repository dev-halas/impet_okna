<div class="categories" id="categories">
    <h1 class="title">Oferta</h1>
    <?php if (have_rows('home_categories')): ?>
    <div class="categories--inner animate fadeIn d-200">
        <?php while (have_rows('home_categories')):

            the_row();
            $title = get_sub_field('category_title');
            $img = get_sub_field('category_img');
            $link = get_sub_field('category_link');
            ?>

        <a href="<?php echo $link['url']; ?>" class="categories--item">
            <img class="categories--bg" src="<?php echo $img[
                'url'
            ]; ?>" alt="<?php echo $title; ?>">
            <div class="categories--itemTitle"><?php echo $title; ?></div>
        </a>

        <?php
        endwhile; ?>
    </div>
    <?php endif; ?>
</div>