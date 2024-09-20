<?php
session_start();
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color: rgb(71, 88, 155);">
    <div class="container">
        <h1>Cadastrar Novo Produto</h1>
        <form action="cria.php" method="post">
            <div class="form-group">
                <label for="nome">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" id="valor" name="valor" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="urlImagem">URL da Imagem:</label>
                <input type="url" id="urlImagem" name="urlImagem" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="urlCompra">URL de Compra:</label>
                <input type="url" id="urlCompra" name="urlCompra" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
        </form>
    </div>
</body>

</html>