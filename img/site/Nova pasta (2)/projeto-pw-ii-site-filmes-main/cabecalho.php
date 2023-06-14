<html>

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/geral.css">
    <?php echo $arquivo_css; ?>
    
    <!-- FONTES IMPORTADAS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP BANNER -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FUNÇÕES JAVASCRIPT -->
    <script src="js/funcoes.js"></script>

    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
    <title><?php echo $titulo_pagina; ?></title>
</head>

<body>
    <div class="header">
        <div class="logo"><img src="img/site/logobranco.png"></div>
        <a href="index.php">Home</a>
        <a href="lista_filmes.php">Todos os filmes</a>
        <a href="contato.php">Contato</a>
        <a href="login.php">Login</a>
        <img src="img/site/ico_busca.png" id="ico_busca" class="icone_busca" onclick="abrir_busca()">
    </div>

    <div id="div_busca" class="oculta">
        <b>O que você está procurando?</b>
        <form method="POST" action="lista_filmes.php">
            <input type="text" name="busca" placeholder="Digite..."> <br>
            <input type="submit" value="Buscar">
        </form>
    </div>

    <div class="conteudo">