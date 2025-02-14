<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php
        if ($wp_query->have_posts()):
            while ($wp_query->have_posts()):
                $wp_query->the_post();
                ?>
                <div class="swiper-slide">
                    <?php get_template_part('components/card-projeto') ?>
                </div>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class="swiper-pagination"></div>
</div>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        centeredSlides: false,
        slidesPerGroupSkip: 1,
        spaceBetween: 20,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            577: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
            993: {
                slidesPerView: 3,
                slidesPerGroup: 3,
            }
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>