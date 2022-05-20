<?php
include 'conexao.php';
$id=$_GET['id'];

$sql = "UPDATE tutores SET t_status = '0' WHERE id_tutor = '$id'";
$deletar = "DELETE FROM tutores where id_tutor = $id";
$retorno = "Usuário deletado/inativado com sucesso.";
try{
$fila = mysqli_query($conexao, $deletar);
header("Location: ../?pagina=tutores_del_ok&&retorno=" . $retorno);
}catch(Exception $e){
    $atualizar = mysqli_query($conexao, $sql);
    header("Location: ../?pagina=tutores_del_ok&&retorno=" . $retorno);
}
