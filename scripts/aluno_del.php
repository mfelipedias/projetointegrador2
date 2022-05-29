<?php
include 'conexao.php';
$id=$_GET['id'];

$sql = "UPDATE alunos SET a_status = '0' WHERE id_aluno = '$id'";
$deletar = "DELETE FROM alunos where id_aluno = $id";
$retorno = "Usuário deletado/inativado com sucesso.";
try{
$fila = mysqli_query($conexao, $deletar);
header("Location: ../?pagina=alunos_del_ok&&retorno=" . $retorno);
}catch(Exception $e){
    $atualizar = mysqli_query($conexao, $sql);
    header("Location: ../?pagina=alunos_del_ok&&retorno=" . $retorno);
}
