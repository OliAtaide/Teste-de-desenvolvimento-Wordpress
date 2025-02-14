<div class="row row-projetos">
    <?php
    if ($wp_query->have_posts()):
        while ($wp_query->have_posts()):
            $wp_query->the_post();
            ?>
            <div class="col-md-4">
                <?php get_template_part('components/card-projeto') ?>
            </div>
            <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>