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