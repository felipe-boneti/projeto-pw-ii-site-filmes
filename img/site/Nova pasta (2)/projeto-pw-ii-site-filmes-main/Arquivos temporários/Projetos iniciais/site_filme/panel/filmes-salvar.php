<?php  
    $titulo = $_POST['titulofilme'];
    $duracao = $_POST['duracaofilme'];
    $clasindicativa = $_POST['clasindicativa'];
    $genero = $_POST['generofilme'];
    $sinopse = $_POST['sinopsefilme'];
    $diretor = $_POST['diretorfilme'];
        
    include("conexao-filme.php");

    $stmt = $pdo->prepare("insert into tbcontato values(null,'$titulo','$duracao','$clasindicativa','$genero','$sinopse','$diretor')");	    
	$stmt ->execute();    

    header("location:filmes.php");    
?>