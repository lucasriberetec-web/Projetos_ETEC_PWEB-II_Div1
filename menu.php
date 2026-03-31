<?php
/*Dentro do Delphi alt+F11 - codigo uses umodulo*/
require './controle/conexao.php';/*passa a usar a classe conexão*/
/*isso é como a query do Delphi ou Lazarus*/
$pdo = Conexao::conectar();/*conecto ao banco de dados*/
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);/*tratar erros de atributos e sql*/
$sql = "select * from categorias;";/*é igual a propriedade SQL da query do Delphi ou Lazarus*/
$prp = $pdo->prepare($sql);
$prp->execute();/*executa a instrução sql que acessará a tabela do banco de dados (Delphi ou Lazarus Open ou ExecSQL)*/
while ($data = $prp->fetch(PDO::FETCH_ASSOC))
    {
        echo $data['catnome'].'<br>';
    }
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">LogoDaLojinha</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Inicial</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="subcategorias.html">Subcategorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>