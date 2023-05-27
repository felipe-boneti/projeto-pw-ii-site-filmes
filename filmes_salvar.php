<?php  
    include("conexao.php");
    
    $titulo = $_POST['titulofilme'];
    $diretor = $_POST['diretorfilme'];
    $duracao = $_POST['duracaofilme'];
    $sinopse = $_POST['sinopsefilme'];
    $clasindicativa = $_POST['clasindicativa'];
    $anolancamento = $_POST['anolancamento'];
    $genero = $_POST['generofilme'];
    $imagemprincipal = $_POST['imagemprincipal'];
    $imageminterna = $_POST['imageminterna'];
    
    // echo   "insert into tbfilme values(null,'$titulo','$diretor,'$duracao','$sinopse','$clasindicativa','$anolancamento',$genero,'$imagemprincipal', '$imageminterna')"; die;

    $stmt = $pdo->prepare("insert into tbfilme values(null,'$titulo','$diretor','$duracao','$sinopse','$clasindicativa','$anolancamento',$genero,'$imagemprincipal', '$imageminterna')");	    
	$stmt ->execute();    

    // header("location:filme_salvo.php");    

?>