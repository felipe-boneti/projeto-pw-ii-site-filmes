<?php

    include('conexao.php');

    if(isset($_POST['id'])){

        $id = $_POST['id'];

        $titulo = $_POST['titulo'];
        $sinopse = $_POST['sinopse'];
        $genero1 = $_POST['genero1'];
        $genero2 = $_POST['genero2'];
        $genero3 = $_POST['genero3'];
        $duracao = $_POST['duracao'];
        $diretor = $_POST['diretor'];
        $ano = $_POST['ano'];
        $plataformas = $_POST['plataformas'];

        $query = "UPDATE tb_filmes SET";
        $query .= "(titulo=$titulo,sinopse=$sinopse,genero1=$genero1,genero2=$genero2,genero3=$genero3,duracao=$duracao,diretor=$diretor,ano=$ano,plataformas=$plataformas)";
        $query .= " WHERE id=$id;";

        $stmt = $pdo->prepare($query);
        $stmt ->execute();
    } 
    
    header('editar_filme.php');

?>