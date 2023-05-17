<html>

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/geral.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/funcoes.js"></script>

    <link rel="shortcut icon" href="ico/icone.png" type="image/x-icon">
    
    <?php echo $arquivo_css; ?>
    <title><?php echo $titulo_pagina; ?></title>
</head>

<body>
    <div class="header">
        <img src="img/logobranco.png" class="logo">
        <a href="index.php">Home</a>
        <a href="filmes.php">Filmes</a>
        <a href="contato.php">Contato</a>
        <img src="img/ico_busca.png" class="icone_busca" onclick="abrir_busca()">
    </div>

    <div id="div_busca" class="oculta">

    </div>