<?php

    include('conexao.php');

    if(isset($_POST['email']) && isset($_POST['pass1']) && isset($_POST['pass2'])){
        if($_POST['pass1'] == $_POST['pass2']){
            $email = $_POST['email'];
            $senha = $_POST['pass1'];
            
            $stmt = $pdo->prepare("INSERT INTO tbuser VALUES(null, :email, :senha, 1)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            
            if($stmt ->execute()){
                header('Location:login.php');
            } else{
                header('Location:cadastro.php');
            }
        }else{
            echo '<script>alert("As senhas não conferem!");</script>';
        }
            
    }

?>

<html>
<head>
    <meta charset="UTF-8">
    
    <title>Cineblack - Cadastro</title>
    <link rel="stylesheet" href="logincadastro.css">

</head>
<body> 
    <div class="container1">
        <div class="content first-content">
                <div class="first-column">
                    <h2 class="title"> Entre para o mundo Cineblack!</h2>
                    <p class="desc">Já possui uma conta? clique no botão!</p>
                    <a href="login.php"> <button class="btn">Entre</button> </a>
                </div>
                <div class="second-column">
                    <h2 class="title2">Crie sua conta</h2>
                    <form class="form" action="cadastro.php" method="POST">
                            <!-- <input type="text" placeholder="  Nome">   -->
                            <input type="email" name="email" placeholder="Email">    
                            <input type="password" name="pass1" placeholder="Password">  
                            <input type="password" name="pass2" placeholder="Password">
                                               
                        <button class="btn-second">Cadastrar</button>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>