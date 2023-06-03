<?php   
    $titulo = $_POST['titulofilme'];
    $diretor = $_POST['diretorfilme'];
    $duracao = $_POST['duracaofilme'];
    $sinopse = $_POST['sinopsefilme'];
    $clasindicativa = $_POST['clasindicativa'];
    $anolancamento = $_POST['anolancamento'];
    $genero = $_POST['generofilme'];
    $imagemprincipal = $_POST['imagemprincipal'];
    $imageminterna = $_POST['imageminterna']; ?>
    
<body>
    <section>
        <div >
            <div>
                <h3>Titulo
                    <?php echo $titulo ?>
                </h3>
            </div>
            <div>
                <h3>Diretor
                    <?php echo $diretor ?>
                </h3>
            </div>
            <div>
                <h3>Duração
                    <?php echo $duracao ?>
                </h3>
            </div>
            <div>
                <h3>Sinopse
                    <?php echo $sinopse ?>
                </h3>
            </div>
            <div>
                <h3>Classificação Indicativa
                    <?php echo $clasindicativa ?>
                </h3>
            </div>
            <div>
                <h3>Ano de Lançamento
                    <?php echo $anolancamento ?>
                </h3>
            </div>
            <div>
                <h3>Gênero
                    <?php echo $genero ?>
                </h3>
            </div>
            <div>
                <h3>Imagem Principal
                    <?php echo $imagemprincipal ?>
                </h3>
            </div>
            <div>
                <h3>Imagem Interna
                    <?php echo $imageminterna ?>
                </h3>
            </div>
            
        </div>
        </br>
        </br>
        <nav>
            <ul>
                <li><a href="lista_filmes" input type="button"> Listar Filmes</a></li>
            </ul>
        </nav>

    </section>
</body>