<?php
session_start();
include 'produto.php';
include 'navbar.php';

// if (!isset($_SESSION['produtos']) || empty($_SESSION['produtos'])) {
//     echo "<p class='text-center'>Nenhum produto cadastrado!</p>";
//     echo '<br><a href="novo.php" class="btn btn-primary">Cadastrar novo produto</a>';
//     exit();
// }
?>

<!DOCTYPE html> 
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body  style="background-color: rgb(71, 88, 155);">
    <div class="container mt-5">
        <h1 style="text-align: center;">Lista de Produtos</h1>
        <div class="row">
        <?php
            foreach ($_SESSION['produtos'] as $produtoSerializado) {
                $produto = unserialize($produtoSerializado); // Desserializando o produto
                echo '<div class="col-md-4">';
                $produto->exibirInformacoes();
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>