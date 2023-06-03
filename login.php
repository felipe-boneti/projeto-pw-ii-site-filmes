<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login.php" method="post">
        <input type="text" name="txUsuario" placeholder="E-mail"/>
        <input type="password" name="txSenha" placeholder="Senha" />
        <input type="submit" value="Login" />
    </form>

    <?php

    $user = $_POST['txUsuario'];
    $pass = $_POST['txSenha'];

    include("conexao.php");

    $stmt = $pdo->prepare("select * from tbUsuario where emailUsuario='$user' and senhaUsuario='$pass'");	
    $stmt ->execute();
    
    $row = $stmt ->fetch(PDO::FETCH_BOTH);
            
    if($row==""){
        echo "Usuário e/ou senha inválido (s)";
    }
    else{
        echo "Usuário logado";
    }
?>
    
</body>
</html>
