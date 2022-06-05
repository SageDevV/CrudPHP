<?php
$id = $_GET['id'];
$conexao = new PDO('sqlite:dw.db');
$query = "SELECT * FROM produto where id = $id";
$result = $conexao->query($query);
$categoria = $result->fetch();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/unifebe.png">
    <title>DW2020 - Adicionar Categoria</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
</head>

<body>
    <?php require_once 'nav.php' ?>
    <main role="main" class="container">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Adicionar novo produto</h4>
            <form class="needs-validation" action="editar_produto_update.php?id=<?php echo $id; ?>" method="post">
                <div class="mb-3">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" id="categoria" placeholder="" value="" name="categoria" required>
                    <div class="invalid-feedback">
                        Por favor, escolha uma categoria válida.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="" value="" name="nome" required>
                    <div class="invalid-feedback">
                        É obrigatório inserir um nome válido.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="preco" placeholder="" value="" name="preco" required>
                    <div class="invalid-feedback">
                        É obrigatório inserir um preço válido.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" placeholder="" value="" name="descricao" required>
                    <div class="invalid-feedback">
                        É obrigatório inserir uma descrição válida.
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar produto</button>
            </form>
        </div>
        </div>
    </main>
    <?php require_once 'footer.php' ?>
    <script src="js/jquery-3.5.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        $('#customFile').on('change', function() {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(cleanFileName);
        })
    </script>
</body>

</html>