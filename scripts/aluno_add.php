<?php
include 'conexao.php';
include 'password.php';

$a_status = $_POST['a_status'];
$a_nome = $_POST['a_nome'];
$a_data = $_POST['a_data'];
$a_condicao = $_POST['a_condicao'];
$a_obs = $_POST['a_obs'];
$a_resp = $_POST['a_resp'];
$a_tel = $_POST['a_tel'];
$a_email = $_POST['a_email'];

$sqlbuscar = "SELECT a_nome FROM alunos WHERE a_nome = '$a_nome'";
$buscar = mysqli_query($conexao, $sqlbuscar);
$total = mysqli_num_rows($buscar);

if ($total > 0) {
    $retorno = "O aluno:" . $a_nome . " já existe cadastrado.";
    header("Location: ../?pagina=alunos_add_erro&&retorno=" . $retorno);
} else {
    $sql = "INSERT INTO alunos (a_status, a_nome, a_data, a_condicao, a_obs, a_resp, a_tel, a_email, a_create, a_update) values ('$a_status', '$a_nome', '$a_data', '$a_condicao', '$a_obs', '$a_resp', '$a_tel','$a_email', now(), now())";
    $inserir = mysqli_query($conexao, $sql);
    $retorno = "Aluno: " . $a_nome . " cadastrado com sucesso!";
    header("Location: ../?pagina=alunos_add_ok&&retorno=" . $retorno);
}
