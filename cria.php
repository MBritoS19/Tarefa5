<?php
session_start();
require_once 'produto.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: novo.php");
    exit();
}

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$urlImagem = $_POST['urlImagem'];
$urlCompra = $_POST['urlCompra'];

$produto = new Produto($nome, $descricao, $valor, $urlImagem, $urlCompra);

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}

$_SESSION['produtos'][] = serialize($produto);

header("Location: mostra.php");
exit();
