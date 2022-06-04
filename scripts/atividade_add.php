<?php
include 'conexao.php';
include 'password.php';

$at_nome = $_POST['at_nome'];
$at_notamax = $_POST['at_notamax'];
$at_notamin = $_POST['at_notamin'];
$at_descricao = $_POST['at_descricao'];

$sqlbuscar = "SELECT at_nome FROM atividades WHERE at_nome = '$at_nome'";
$buscar = mysqli_query($conexao, $sqlbuscar);
$total = mysqli_num_rows($buscar);

if ($total > 0) {
    $retorno = "A atividade:" . $at_nome . " já existe cadastrada.";
    header("Location: ../?pagina=atividades_add_erro&&retorno=" . $retorno);
} else {
    $sql = "INSERT INTO atividades (at_nome, at_notamax, at_notamin, at_descricao, at_create, at_update) values ('$at_nome', '$at_notamax', '$at_notamin', '$at_descricao', now(), now())";
    $inserir = mysqli_query($conexao, $sql);
    $retorno = "Atividade: " . $at_nome . " cadastrada com sucesso!";
    header("Location: ../?pagina=atividades_add_ok&&retorno=" . $retorno);
}