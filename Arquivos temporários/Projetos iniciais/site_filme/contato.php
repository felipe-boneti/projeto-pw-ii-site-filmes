<?php include('cabecalho.php'); ?>

</br>
</br>
</br>

<div class="main-cadastro">
<div class="left-cadastro">
<h1>Faça seu cadastro<br> E entre no mundo black da séries!</h1>
<img src="imgform/cineform.svg" class="left-cadastro-img" alt="Casal Assistindo Filme">

</div>
<div class="right-cadastro">


<form action="contato-salvar.php" method="post">
  <div class="card-cadastro">
    <h1>Cadastro</h1>
      <div class="textfield">
            <label for="Txnome">Nome</label>
            <input type="text" id="nome" name="nome" required>
      </div>
      <div class="textfield">
            <label for="Txemail">Email</label>
            <input type="text" id="email" name="email" required>
      </div>
      <div class="textfield">
            <label for="Txemail">Assunto</label>
            <input type="text" id="assunto" name="assunto" required>
      </div>
      <div class="textfield">
            <label for="Txmensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
      </div>

      <div class="btnforms">
      <div class="btn-enviar">
      <a href="exibirContatos.php" input type="button" class="textform"> Enviar</a>
      <!--
      <input type="submit" value="Enviar" action="exibirContatos.php">
      -->
      </div>

      <div class="btn-Listar">
      <a href="contato-lista.php" input type="button" class="textform"> Listar Contatos</a>
      <!--
      <input type="text" value="Listar Contatos" action="contato-lista.php">
      -->
      </div>
      </div>
        <!-- <nav>
            <ul>
                <li><a href="contato-lista.php" input type="button"> Listar Contatos</a></li>
            </ul>
        </nav> -->
</form>
</div>
</div>


<div>

</div>