<?php
    $titulo_pagina = 'Cineblack - Filmes';
    $arquivo_css = '<link rel="stylesheet" type="text/css" href="css/lista_filmes.css">';

    include('cabecalho.php');

    if(isset($_POST['busca'])){
        echo '<div class="titulo">Resultados para <b>'.$_POST['busca'].'</b>:</div>';
    } else{
        echo '<div class="titulo"><b>Todos os filmes</b></div>';
    }
?>



<?php
    include('rodape.php');
?>