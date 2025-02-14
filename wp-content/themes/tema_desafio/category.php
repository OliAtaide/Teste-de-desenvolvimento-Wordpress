<?php
get_header();

$cat_id = get_queried_object_id();

$wp_query = new WP_Query(
    array(
        'post_type' => 'projeto',
        'posts_per_page' => 9,
        'cat' => $cat_id,
    )
);
?>

<div class="container archive">
    <h1 class="page-title text-center mb-4">
        Projetos
    </h1>
    <div class="d-flex flex-wrap align-items-center gap-3 justify-content-center mb-3">
        <strong>
            FILTRAR:
        </strong>
        <?php
        $categories = get_categories();
        foreach ($categories as $category):
            $id = $category->term_id;
            ?>
            <a class="btn <?= $id == $cat_id ? 'btn-primary' : 'border-primary' ?> py-2" type=""
                href="<?= $id == $cat_id ? get_post_type_archive_link('projeto') : get_category_link($id); ?>">
                <?= $category->name ?>
            </a>
            <?php
        endforeach;
        ?>
    </div>
    <?php get_template_part('components/row-projetos'); ?>
</div>

<?php
get_footer();
?>