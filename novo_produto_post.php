<?php 
$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$conexao = new PDO('sqlite:dw.db');
$query = "INSERT INTO produto (nome, categoria, preco, descricao) values ('$nome', '$categoria', '$preco', '$descricao')"; 
$conexao->exec($query); 
header('Location: produto.php');
