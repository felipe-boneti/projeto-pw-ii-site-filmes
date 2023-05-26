<?php

    header('Content-type: text/html; charset=utf-8');
    include('conexao.php');

    $generos = array();

    $query = 'SELECT * FROM tbGenero ORDER BY nome';
    $stmt = $pdo->prepare($query);
    $stmt -> execute();

    echo '<script> var generos = [] </script>';

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<script> generos.push("' . $row['nome'] . '"); </script>';
    }

?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        
    </body>

    <script>

    </script>
</html>