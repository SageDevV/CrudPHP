<?php
$conexao = new PDO('sqlite:dw.db');
$query = "SELECT * FROM produto";
$result = $conexao->query($query);
$result = $result->fetchAll();
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/unifebe.png">

  <title>DW2020 - Produtos</title>
  <!-- Principal CSS do Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Estilos customizados para esse template -->
  <link href="css/navbar-top-fixed.css" rel="stylesheet">
  <!-- Stick footer -->
  <link href="css/sticky-footer.css" rel="stylesheet">
</head>

<body>
  <?php require_once 'nav.php' ?>
  <main role="main" class="container">
    <p class="lead">Aqui vai os produtos</p>
    <a class="btn btn-primary btn-lg mb-4" href="novo_produto.php">Adicionar Produto</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Categoria</th>
          <th scope="col">Nome</th>
          <th style="width: 10%" scope="col">Alterar</th>
          <th style="width: 10%" scope="col">Remover</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($result as $r) {
        ?>
          <tr>
            <th scope="row"><?php echo $r['id'] ?></th>
            <td><?php echo $r['categoria'] ?></td>
            <td><?php echo $r['nome'] ?></td>
            <td><a href="editar_produto.php?id=<?php echo $r['id'] ?>" class="btn btn-warning">Alterar</a></td>
            <td><a href="remover_produto.php?id=<?php echo $r['id'] ?>" class="btn btn-danger">Remover</a></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </main>
  <?php require_once 'footer.php' ?>
  <script src="js/jquery-3.5.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>