<?php
$id = $_GET['id'];

$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$conexao = new PDO('sqlite:dw.db');
$query = "UPDATE produto SET nome = '$nome', categoria = '$categoria', preco = '$preco', descricao = '$descricao' WHERE id = $id";
$conexao->exec($query);
header('Location: produto.php');
