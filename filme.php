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
    $row['sinopse'] = 'Luffy e sua equipe assistem a um show onde a cantora Uta não é outra senão a filha de Shanks.';

    // ===============================================================================================================
?>

    <div class="div_filme">
        <div class="div1">
            <img class="poster" src="img/filmes/<?php echo $row['poster']; ?>">
        </div>

        <div class="div2">
            <div class="titulo"><?php echo $row['titulo']; ?></div>
            <div class="sinopse"><?php echo $row['sinopse']; ?></div>
        </div>

        <div class="div3">
            <table class="info">
                <tr>
                    <td><b>Ano:</b><?php echo $row['ano']; ?></td>
                </tr>

                <tr>
                    <td><b>Diretor:</b><?php echo $row['diretor']; ?></td>
                </tr>

                <tr>
                    <td><b>Duração:</b><?php echo $row['duracao']; ?></td>
                </tr>

                <tr>
                    <td><b>Gênero:</b><?php echo $row['genero']; ?></td>
                </tr>
            </table>
        </div>
        
    </div>

<?php
    include('rodape.php');
?>