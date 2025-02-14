<?php
get_header();

$wp_query = new WP_Query(
    array(
        'post_type' => 'projeto',
        'posts_per_page' => 9,
    )
);
?>

<div class="container archive">
    <h1 class="page-title text-center mb-4">
        Projetos
    </h1>
    <div class="d-flex align-items-center flex-wrap gap-3 justify-content-center mb-3">
        <strong>
            FILTRAR:
        </strong>
        <?php
        $categories = get_categories();
        foreach ($categories as $category): ?>
            <a class="btn border-primary py-2" type="" href="<?= get_category_link($category->term_id) ?>">
                <?= $category->name ?>
            </a>
            <?php
        endforeach;
        ?>
    </div>
    <?php get_template_part('components/row-projetos'); ?>
    <div class="d-flex justify-content-center mb-5">
        <a class="btn btn-primary" href="<?= get_post_type_archive_link('projeto'); ?>">
            Veja mais
        </a>
    </div>
</div>

<?php
get_footer();
?>