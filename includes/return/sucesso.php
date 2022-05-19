<?php include './scripts/conexao.php';
$retorno = $_GET['retorno']; ?>

<div class="row mx-auto">
    <!-- COLUNA PESQUISA E TABELA -->
    <div class="col" style="min-width: 400px; max-width: 1366px; width: 100%">
        <div class="alert alert-success" role="alert">
            <?php echo $retorno ?>
        </div>
    </div>
</div>