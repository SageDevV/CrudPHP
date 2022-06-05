<?php 
$nome = $_POST ['nome'];

$conexao = new PDO('sqlite:dw.db'); 
$query = "INSERT INTO categoria (nome) VALUES ('$nome')"; 
$conexao->exec($query); 

header('Location: categoria.php');
