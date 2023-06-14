<?php
    $titulo_pagina = 'Cineblack - Filmes';
    $arquivo_css = '<link rel="stylesheet" type="text/css" href="css/filme.css">';

    include('cabecalho.php');

    // TEMPORARIO ====================================================================================================

    $row['titulo'] = 'One Piece Film RED';
    $row['poster'] = 'op_red.png';
    $row['ano'] = '2022';
    $row['diretor'] = 'Gorō Taniguchi';
    $row['duracao'] = '115 min';
    $row['genero'] = 'Animação';
    $row['sinopse'] = 'Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.';
    $row['link_trailer'] = 'https://www.youtube.com/embed/NDDU-_MwKHI';
    $row['classificacao'] = '0';

    // ===============================================================================================================
?>

    <div class="div_filme">
        <div class="div1">
            <img class="poster" src="img/filmes/<?php echo $row['poster']; ?>">
        </div>

        <div class="div2">
            <div class="titulo"><?php echo $row['titulo']; ?><img src="img/site/<?php echo $row['classificacao'] ?>.png"></div>
            <div class="sinopse"><?php echo $row['sinopse']; ?></div>
        </div>

        <div class="div3">
            <div><b>Ano: </b><?php echo $row['ano']; ?></div>
            <div><b>Diretor: </b><?php echo $row['diretor']; ?></div>
            <div><b>Duração: </b><?php echo $row['duracao']; ?></div>
            <div><b>Gênero: </b><?php echo $row['genero']; ?></div>
        </div>
    </div>

    <iframe width="1000" height="562,50" src="<?php echo $row['link_trailer']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<?php
    include('rodape.php');
?>