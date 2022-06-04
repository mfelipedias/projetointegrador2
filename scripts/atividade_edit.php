<?php
include 'conexao.php';
include 'password.php';
$id_atividade = $_POST['id_atividade'];
$at_nome = $_POST['at_nome'];
$at_notamax = $_POST['at_notamax'];
$at_notamin = $_POST['at_notamin'];
$at_descricao = $_POST['at_descricao'];

$sql = "UPDATE atividades SET at_nome='$at_nome', at_notamax='$at_notamax', at_notamin='$at_notamin', at_notamin='$at_notamin', at_descricao='$at_descricao', at_update=now() WHERE id_atividade='$id_atividade'";
$inserir = mysqli_query($conexao, $sql);
$retorno = "Atvidade: " . $at_nome . " alterada com sucesso!";
header("Location: ../?pagina=atividades_edit_ok&&retorno=" . $retorno);
