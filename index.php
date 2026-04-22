<?php
require './controle/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql = 
"select 
    proid,
    pronome,
    prodescricao,
    provalorcusto,
    provalorvenda,
    proquantidade,
    prosubid,
    proativo,
    subnome,
    subcatid,
    subativo,
    catnome,
    catativo
from 
    produtos,subcategorias,categorias
where 
    prosubid = subid
and
    subcatid = catid";
$prp = $pdo->prepare($sql);
$prp->execute();
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <title>O Lojinha</title>
</head>
<body>
  <header>
    <?php require('menu.php'); ?>
  </header>
  <main>
    <div class="container-fluid">
      <div class="form-group mt-3">
        <input type="text" name="busca" id="busca" class="form-control" />
      </div>
      <div class="row mt-2">
        <?php while ($i<=10){ ?>
        <div class="col mt-2">
          <div class="card" style="width: 18rem">
            <img src="<?php echo $imagem; ?>" class="card-img-top img-fluid" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?php echo $titulo.' - '.$i; ?></h5>
              <p class="card-text">
                <?php echo $resumo; ?>
              <p class="text-danger"><b>R$ <?php echo $valor; ?></b></p>
              </p>
              <a href="detalhesproduto.php?id=<?php echo $i; ?>" class="btn btn-outline-dark">Mostrar Produto</a>
            </div>
          </div>
        </div>
        <?php $i++; } ?>
      </div>
    </div>
  </main>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>