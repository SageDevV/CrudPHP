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
  <title>DW2020 - Listagem de Produtos</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/navbar-top-fixed.css" rel="stylesheet">
  <link href="css/sticky-footer.css" rel="stylesheet">
</head>

<body>
  <?php require_once 'nav.php' ?>
  <main role="main" class="container-fluid">
    <div class="row p-3">
      <div class="col-12 col-md-2 col-xl-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-tudo-tab" data-toggle="pill" href="#v-pills-tudo" role="tab" aria-controls="v-pills-tudo" aria-selected="true">Tudo</a>
        </div>
      </div>
      <div class="col-12 col-md-10 col-xl-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-tudo" role="tabpanel" aria-labelledby="v-pills-tudo-tab">
            <div class="card-deck">
              <?php
              foreach ($result as $r) {
              ?>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Id - <?php echo $r['id'] ?> </h5>
                    <p class="card-text text-justify">Categoria: <?php echo $r['categoria'] ?></p>
                    <p class="card-text text-justify">Produto: <?php echo $r['nome'] ?></p>
                    <p class="card-text text-justify">Descrição: <?php echo $r['descricao'] ?></p>
                    <p class="card-text text-justify">Valor: R$<?php echo $r['preco'] ?></p>
                    <a href="detalhe.php" class="btn btn-primary stretched-link">Adquirir</a>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-frutas" role="tabpanel" aria-labelledby="v-pills-frutas-tab">frutas</div>
          <div class="tab-pane fade" id="v-pills-verduras" role="tabpanel" aria-labelledby="v-pills-verduras-tab">verduras</div>
        </div>
      </div>
    </div>
  </main>
  <?php require_once 'footer.php' ?>
  <script src="js/jquery-3.5.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>