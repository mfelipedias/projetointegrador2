<?php
include 'conexao.php';
include 'password.php';
$id_aluno = $_POST['id_aluno'];
$a_status = $_POST['a_status'];
$a_nome = $_POST['a_nome'];
$a_data = $_POST['a_data'];
$a_condicao = $_POST['a_condicao'];
$a_obs = $_POST['a_obs'];
$a_resp = $_POST['a_resp'];
$a_tel = $_POST['a_tel'];
$a_email = $_POST['a_email'];

$sql = "UPDATE alunos SET a_status='$a_status', a_data='$a_data', a_condicao='$a_condicao', a_obs='$a_obs', a_resp='$a_resp', a_tel='$a_tel', a_email='$a_email', a_update=now() WHERE id_aluno='$id_aluno'";
$inserir = mysqli_query($conexao, $sql);
$retorno = "Aluno: " . $a_nome . " atualizado com sucesso!";
header("Location: ../?pagina=alunos_edit_ok&&retorno=" . $retorno . "&&id=" . $id_aluno);
