<?php
include 'conexao.php';
include 'password.php';

$id=$_POST['id_tutor'];
$t_nome=$_POST['t_nome'];
$t_status=$_POST['t_status'];
$t_funcao=$_POST['t_funcao'];
$t_email=$_POST['t_email'];
$t_tel=$_POST['t_tel'];

$sql = "UPDATE tutores SET t_nome = '$t_nome', t_status = '$t_status',t_funcao = '$t_funcao',t_email = '$t_email',t_tel = '$t_tel', t_update = now() WHERE id_tutor = '$id'";
$atualizar = mysqli_query($conexao, $sql);

$retorno = "Usuario atualizado com sucesso!";
header("Location: ../?pagina=tutores_edit_ok&&id=" . $id. "&&retorno=" . $retorno);
?>