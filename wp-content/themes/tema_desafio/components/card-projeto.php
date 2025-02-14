<div class="card card-projeto mb-5">
    <div class="card-body">
        <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php
        $cat = get_the_category()[0];
        ?>
        <div class="badge">
            <a href="<?= get_category_link($cat->cat_ID) ?>"><?= $cat->cat_name; ?></a>
        </div>
        <h5 class="card-title">
            <?php the_title(); ?>
        </h5>
        <div class="card-text">
            <?php the_excerpt() ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn border-primary mx-auto">
            Leia mais
        </a>
    </div>
</div>