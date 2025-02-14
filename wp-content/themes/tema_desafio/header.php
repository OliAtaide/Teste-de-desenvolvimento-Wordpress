<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container container-fluid">
                <a class="navbar-brand" href="<?php echo get_home_url() ?>">
                    <img src="<?= get_template_directory_uri() . '/assets/logo.svg' ?>" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse gap-3" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/#projetos">Projetos</a>
                        </li>
                    </ul>
                    <div class="btn btn-search p-2">
                        <i class="bi bi-search"></i>
                    </div>
                    <a class="btn btn-primary py-2" href="/#contato">
                        Contato
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main>