<?php
    include('conexao.php');

    $titulo_pagina = 'Cineblack - Filmes';
    $arquivo_css = '<link rel="stylesheet" type="text/css" href="css/lista_filmes.css">';

    include('cabecalho.php');



    if(isset($_POST['busca'])){
        $busca = $_POST['busca'];
        $filtro = "WHERE titulo LIKE '%$busca%'";

        echo '<div class="titulo">Resultados para <b>'.$busca.'</b>:</div> <br>';
    } else{
        $filtro = '';

        echo '<div class="titulo"><b>Todos os filmes</b></div> <br>';
    }

    $stmt = $pdo->prepare("SELECT idFilme, titulo, poster FROM tbfilme $filtro ORDER BY titulo");
    $stmt ->execute();

    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
?>
    <a href="filme.php?id=<?= $row['idFilme']; ?>">
        <div class="filme_lista">
            <img src="img/filmes/<?= $row['poster']; ?>">
            <b><?= $row['titulo']; ?></b>
        </div>
    </a>

<?php
    }
?>



<?php
    include('rodape.php');
?>