<?php
get_header();

$wp_query = new WP_Query(
    array(
        'post_type' => 'projeto',
        'posts_per_page' => 5,
    )
);
?>

<div class="index-main container" id="home">
    <div class="row">
        <div class="col-md-7">
            <div class="d-flex flex-column gap-3">
                <h1 class="page-title">
                    Teste de desenvolvimento
                    <span>Wordpress</span>
                </h1>
                <p class="page-text">
                    Bem-vindo ao nosso desafio de codificação React! Este teste avalia suas habilidades em desenvolver
                    aplicações web interativas com React. Sua tarefa é construir uma aplicação que interaja com APIs
                    externas e
                    exiba dados de forma clara e eficiente. Estamos ansiosos para ver sua criatividade e qualidade de
                    código
                    em
                    prática.
                </p>
                <a href="/#contato" class="btn btn-primary">
                    Entrar em contato
                </a>
            </div>
        </div>
        <div class="col-md">
            <img class="img-fluid" src="<?= get_template_directory_uri() . '/assets/image_1.jpeg' ?>" alt="">
        </div>
    </div>
</div>

<div class="index-projetos container" id="projetos">
    <h1 class="page-title text-center">
        Projetos
    </h1>
    <?php get_template_part('components/swiper-projetos'); ?>
    <div class="d-flex justify-content-center mt-4">
        <a class="btn btn-primary" href="<?= get_post_type_archive_link('projeto'); ?>">
            Veja mais
        </a>
    </div>
</div>

<div class="index-contato container my-5" id="contato">
    <h1 class="page-title text-center mb-4">
        Entre em contato e <span>receba atendimento</span>
    </h1>
    <p class="page-text mb-5">
        Por favor, preencha o formulário abaixo com suas informações e a sua mensagem. Nossa equipe entrará em contato
        com você o mais breve possível.
    </p>
    <?= do_shortcode('[contact-form-7 id="af2ed81" title="Contact form 1"]') ?>
</div>

<?php get_footer(); ?>