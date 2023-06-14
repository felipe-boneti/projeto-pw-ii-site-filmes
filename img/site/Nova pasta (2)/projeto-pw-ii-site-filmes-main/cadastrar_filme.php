<form action="filmes_salvar.php" method="post">

  <label for="">Título:</label>
  <input type="text" id="titulo" name="titulofilme" required>

  <label for="">Diretor:</label>
  <input type="text" id="diretor" name="diretorfilme" required>

  <label for="">Duração:</label>
  <input type="text" id="duracao" name="duracaofilme" required>

  <label for="">Sinopse:</label>
  <input type="text" id="sinopse" name="sinopsefilme" required>

  <label for="">Classificação Indicativa:</label>
  <input type="text" id="clasindicativa" name="clasindicativa" required>

  <label for="">Ano de Lançamento:</label>
  <input type="text" id="anoLancamento" name="anolancamento" required>

  <label for="">Gênero:</label>
  <input type="number" id="genero" name="generofilme" required>
</br>
</br>

  <label for="">Imagem Principal:</label>
  <input type="text" id="imagemprincipal" name="imagemprincipal" required>

  <label for="">Imagem Interna:</label>
  <input type="text" id="imageminterna" name="imageminterna" required>



  <input type="submit" value="Cadastrar" action="exibir-filmes.php">

    <nav>
            <ul>
                <li><a href="lista_filmes.php" input type="button"> Listar Filmes</a></li>
            </ul>    
    </nav>

</form>
 