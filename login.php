<?php

    include('conexao.php');

    if(isset($_POST['email']) && isset($_POST['senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $stmt = $pdo->prepare("SELECT ativo FROM tbuser WHERE email = :email AND senha = :senha");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt ->execute();

        $row = $stmt ->fetch(PDO::FETCH_BOTH);

        // print_r($row);die;

        if($row['ativo'] == 1){
            header('Location:cadastrar_filme.php');
        } else{
            header('Location:index.php');
        }
    }

?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Cineblack - Login</title>
        <link rel="stylesheet" href="logincadastro.css">

    </head>
    <body> 
        <div class="container">
            <div class="content first-content">
                    
                <div class="first-column">
                    <h2 class="title"> Seja bem vindo a Cineblack!</h2>
                    <p class="desc">Entrando pela primeira vez?    Clique no botão!</p>
                    <a href="cadastro.php"> <button class="btn">Cadastra-se</button> </a>
                </div>
                
                <div class="second-column">
                    <h2 class="title2">Login</h2>
                    <form class="form" method="POST" action="login.php">
                        
                        <input type="email" name="email" placeholder="Email">    
                        <input type="password" name="senha" placeholder="Password">
                                                
                        <button class="btn-second">Entrar</button>
                        <a class="atest" href="#">Esqueceu a senha?</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>