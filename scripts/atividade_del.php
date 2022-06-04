<?php
include 'conexao.php';
$id=$_GET['id'];

$deletar = "DELETE FROM atividades where id_atividade = $id";
$del = mysqli_query($conexao, $deletar);
$retorno = "Atividade deletada.";
header("Location: ../?pagina=atividades_del_ok&&retorno=" . $retorno);