<?php
    include('conexao.php');

    $titulo_pagina = 'Cineblack - Filmes';
    $arquivo_css = '<link rel="stylesheet" type="text/css" href="css/filme.css">';

    if(!isset($_GET['id'])){header('Location:index.php');}
    $idFilme = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM tbfilme LEFT JOIN tbgenero ON tbfilme.idGenero = tbgenero.idGenero WHERE idFilme = $idFilme");
    $stmt ->execute();
    $row = $stmt ->fetch(PDO::FETCH_BOTH);

    if($row == ''){header('Location:index.php');}

    include('cabecalho.php');
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
            <div><b>Ano: </b><?php echo $row['anoLancamento']; ?></div>
            <div><b>Diretor: </b><?php echo $row['diretor']; ?></div>
            <div><b>Duração: </b><?php echo $row['duracao']; ?></div>
            <div><b>Gênero: </b><?php echo $row['genero']; ?></div>
        </div>
    </div>

    <iframe width="1000" height="562,50" src="<?php echo $row['linkTrailer']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<?php
    include('rodape.php');
?>