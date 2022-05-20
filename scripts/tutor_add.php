<?php
include 'conexao.php';
include 'password.php';

$t_status = $_POST['t_status'];
$t_nome = $_POST['t_nome'];
$t_funcao = $_POST['t_funcao'];
$t_tel = $_POST['t_tel'];
$t_email = $_POST['t_email'];
$t_user = $_POST['t_user'];
$t_senha = $_POST['t_senha'];

$sqlbuscaruser = "SELECT t_user FROM tutores WHERE t_user = '$t_user'";
$buscaruser = mysqli_query($conexao, $sqlbuscaruser);
$totaluser = mysqli_num_rows($buscaruser);

if ($totaluser > 0) {
    $retorno = "O usuário: " . $t_user . " já existe cadastrado.";
    header("Location: ../?pagina=tutores_add_erro&&retorno=" . $retorno);
} else {
    $sql = "INSERT INTO tutores (t_status, t_nome, t_funcao, t_tel, t_email, t_user, t_senha, t_create, t_update) values ('$t_status', '$t_nome', '$t_funcao', '$t_tel', '$t_email', '$t_user', sha1('$t_senha'), now(), now())";
    $inserir = mysqli_query($conexao, $sql);
    $retorno = "Usuário: " . $t_user . " cadastrado com sucesso!";
    header("Location: ../?pagina=tutores_add_ok&&retorno=" . $retorno);
}
