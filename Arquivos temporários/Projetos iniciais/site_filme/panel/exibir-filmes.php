<?php

$titulo = $_POST['titulofilme'];
$duracao = $_POST['duracaofilme'];
$clasindicativa = $_POST['clasindicativa'];
$genero = $_POST['generofilme'];
$sinopse = $_POST['sinopsefilme'];
$diretor = $_POST['diretorfilme'];

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="filmes-salvo">
            <div class="titulo">
                <h3>titulo:
                    <?php echo $titulo ?>
                </h3>
            </div>
            <div class="duracao">
                <h3>Duração:
                    <?php echo $duracao ?>
                </h3>
            </div>
            <div class="clasindicativa">
                <h3>classificação indicativa:
                    <?php echo $clasindicativa ?>
                </h3>
            </div>
            <div class="genero">
                <h3>Genêro:
                    <?php echo $genero ?>
                </h3>
            </div>
            <div class="sinopse">
                <h3>Sinopse:
                    <?php echo $sinopse ?>
                </h3>
            </div>
            <div class="Diretor">
                <h3>Diretor:
                    <?php echo $diretor ?>
                </h3>
            </div>
        </div>
        </br>
        </br>
        <nav>
            <ul>
                <li><a href="filmes-lista.php" input type="button"> Listar Filmes</a></li>
            </ul>
        </nav>

    </section>