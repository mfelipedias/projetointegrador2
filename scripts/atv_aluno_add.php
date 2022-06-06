<?php
include 'conexao.php';
include 'password.php';

$atv_atividade = $_POST['atv_atividade'];
$atv_aluno = $_POST['atv_aluno'];
$atv_tutor = $_POST['atv_tutor'];
$atv_nota = $_POST['atv_nota'];
$atv_obs = $_POST['atv_obs'];

$sql = "INSERT INTO atv_aluno (atv_atividade, atv_aluno, atv_tutor, atv_nota, atv_obs, atv_create, atv_update) values ('$atv_atividade', '$atv_aluno', '$atv_tutor', '$atv_nota', '$atv_obs', now(), now())";
$inserir = mysqli_query($conexao, $sql);
$retorno = "Atividade cadastrada com sucesso!";
header("Location: ../?pagina=atv_aluno_add&&id=" . $atv_aluno . "&&retorno=" . $retorno);