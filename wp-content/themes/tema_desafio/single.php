<?php get_header(); ?>

<div class="container single-projeto py-5">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            $cat = get_the_category()[0];
            $post_id = get_the_ID();
            ?>
            <h1 class="post-title text-center">
                <?= the_title(); ?>
            </h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= get_category_link($cat->cat_ID) ?>"><?= $cat->cat_name; ?></a></li>
                    <li class="breadcrumb-item" aria-current="page">
                        <?= get_the_author(); ?>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <?= the_date(); ?>
                    </li>
                </ol>
            </nav>
            <img class="img-fluid w-100" src="<?= the_post_thumbnail_url(); ?>" alt="">
            <div class="post-text">
                <?= the_content(); ?>
            </div>
            <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
    <?php
    $wp_query = new WP_Query(
        array(
            'post_type' => 'projeto',
            'cat' => $cat->cat_ID,
            'posts_per_page' => 5,
            'post__not_in' => array($post_id),
        )
    );
    ?>
    <h1 class="page-title text-center">
        Outros projetos de <span><?= $cat->cat_name; ?></span>
    </h1>
    <?php get_template_part('components/swiper-projetos'); ?>
    <div class="d-flex justify-content-center ">
        <a class="btn btn-primary" href="<?= get_category_link($cat->cat_ID) ?>">
            Veja mais
        </a>
    </div>
</div>

<?php get_footer(); ?>