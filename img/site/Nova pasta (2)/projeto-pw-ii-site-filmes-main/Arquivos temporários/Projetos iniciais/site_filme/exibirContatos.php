<?php include('cabecalho.php'); ?>
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


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
        <div class="contato">
            <div class="nome">
                <h3>Nome:
                    <?php echo $nome ?>
                </h3>
            </div>
            <div class="email">
                <h3>Email:
                    <?php echo $email ?>
                </h3>
            </div>
            <div class="email">
                <h3>Mensagem:
                    <?php echo $mensagem ?>
                </h3>
            </div>
        </div>
        </br>
        </br>
        <nav>
            <ul>
                <li><a href="contato-lista.php" input type="button"> Listar Contatos</a></li>
            </ul>
        </nav>

    </section>

    <?php include('rodape.php'); ?>