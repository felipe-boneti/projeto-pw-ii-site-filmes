<?php

    include('conexao.php');

    if(isset($_POST['titulo'])){

        $titulo = $_POST['titulo'];
        $sinopse = $_POST['sinopse'];
        $genero1 = $_POST['genero1'];
        $genero2 = $_POST['genero2'];
        $genero3 = $_POST['genero3'];
        $duracao = $_POST['duracao'];
        $diretor = $_POST['diretor'];
        $ano = $_POST['ano'];
        $plataformas = $_POST['plataformas'];

        $query = "INSERT INTO tb_filmes VALUES";
        $query .= "(null,$titulo,$sinopse,$genero1,$genero2,$genero3,$duracao,$diretor,$ano,$plataformas)";

        $stmt = $pdo->prepare($query);
        $stmt ->execute();

    } 
    
    header('cadastrar_filme.php');

?>