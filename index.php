<?php
    $titulo_pagina = 'Cineblack - Início';
    $arquivo_css = '<link rel="stylesheet" type="text/css" href="css/index.css">';

    include('cabecalho.php');
?>
    <div id="carouselExampleIndicators" class="carousel slide">
        <!-- Botões de navegação inferiores -->
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        
        <!-- Banners do carrosel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/site/ban_lastchance.png" class="d-block w-100" alt="Last Chance U">
            </div>
            <div class="carousel-item">
                <img src="img/site/ban_corra.png" class="d-block w-100" alt="Corra">
            </div>
            <div class="carousel-item">
                <img src="img/site/ban_blues.png" class="d-block w-100" alt="Blues">
            </div>
        </div>

        <!-- Botões de navegação (esquerda e direita) -->
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

<?php
    include('rodape.php');
?>