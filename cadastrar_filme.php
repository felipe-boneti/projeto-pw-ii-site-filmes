<?php
  include('conexao.php');

  if(isset($_POST['titulo'])){

    $titulo = $_POST['titulo'];
    $diretor = $_POST['diretor'];
    $duracao = $_POST['duracao'];
    $sinopse = $_POST['sinopse'];
    $classificacao = $_POST['classificacao'];
    $anoLancamento = $_POST['anoLancamento'];
    $idGenero = $_POST['idGenero'];
    $poster = $_POST['poster'];
    $linkTrailer = $_POST['linkTrailer'];

    $stmt = $pdo->prepare("INSERT INTO tbfilme VALUES(null, :titulo, :diretor, :duracao, :sinopse, :classificacao, :anoLancamento, :idGenero, :poster, :linkTrailer)");

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':diretor', $diretor);
    $stmt->bindParam(':duracao', $duracao);
    $stmt->bindParam(':sinopse', $sinopse);
    $stmt->bindParam(':classificacao', $classificacao);
    $stmt->bindParam(':anoLancamento', $anoLancamento);
    $stmt->bindParam(':idGenero', $idGenero);
    $stmt->bindParam(':poster', $poster);
    $stmt->bindParam(':linkTrailer', $linkTrailer);

    if ($stmt->execute()) {
      // Inserção bem-sucedida
      echo "<script> alert('Registro inserido com sucesso!');</script>";
    } else {
      // Ocorreu um erro na inserção
      echo "<script> alert('Erro ao inserir o registro!');</script>";
    }

    
  }

  $stmt = $pdo->prepare("SELECT * FROM tbgenero");
  $stmt ->execute();

  $titulo_pagina = 'Cineblack - Cadastrar filme';
  $arquivo_css = '<link rel="stylesheet" type="text/css" href="css/cadastar_filme.css">';

  include('cabecalho.php');
?>

<form method="POST" action="cadastrar_filme.php" class="cad_filme">

  <label for="titulo">Título:</label>
  <input type="text" id="titulo" name="titulo" required>

  <label for="diretor">Diretor:</label>
  <input type="text" id="diretor" name="diretor" required>

  <label for="duracao">Duração:</label>
  <input type="text" id="duracao" name="duracao" required>

  <label for="sinopse">Sinopse:</label>
  <input type="text" id="sinopse" name="sinopse" required>
  
  <label for="classificacao">Classificação:</label>
  <select name="classificacao">
    <option value="0">Livre</option>
    <option value="10">10 anos</option>
    <option value="12">12 anos</option>
    <option value="14">14 anos</option>
    <option value="16">16 anos</option>
    <option value="18">18 anos</option>
  </select>

  <label for="anoLancamento">Ano de lançamento:</label>
  <input type="text" id="anoLancamento" name="anoLancamento" required>

  <label for="idGenero">Gênero:</label>
  <select id="idGenero" name="idGenero">
    <?php
      while($genero = $stmt ->fetch(PDO::FETCH_BOTH)){
    ?>

    <option value="<?= $genero['idGenero']; ?>"><?= $genero['genero']; ?></option>

    <?php
        }
    ?>
  </select>

  <label for="poster">Poster:</label>
  <input type="text" id="poster" name="poster" required>

  <label for="linkTrailer">Link trailer:</label>
  <input type="text" id="linkTrailer" name="linkTrailer" required>

  <input type="submit" value="Cadastrar">

</form>

<?php
  include('rodape.php');
?>