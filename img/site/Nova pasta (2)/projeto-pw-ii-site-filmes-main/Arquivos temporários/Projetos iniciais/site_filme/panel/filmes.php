
<?php include['cabecalho.php']?>
<form action="filmes-salvar.php" method="post">

  <label for="">:</label>
  <input type="text" id="titulo" name="titulofilme" required>

  <label for="">:</label>
  <input type="text" id="duracao" name="duracaofilme" required>

  <label for="">:</label>
  <input type="text" id="clasindicativa" name="clasindicativa" required>

  <label for="">:</label>
  <input type="text" id="genero" name="generofilme" required>

  <label for="">:</label>
  <input type="text" id="sinopse" name="sinopsefilme" required>

  <label for="">:</label>
  <input type="text" id="diretor" name="diretorfilme" required>

  <input type="submit" value="Cadastrar" action="exibir-filmes.php">

    <nav>
            <ul>
                <li><a href="filmes-lista.php" input type="button"> Listar Filmes</a></li>
            </ul>    
    </nav>

</form>
 