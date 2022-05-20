<?php
include 'conexao.php';
include 'password.php';

$id=$_POST['id_tutor'];
$t_senha=$_POST['t_senha'];


$sql = "UPDATE tutores SET t_senha = sha1('$t_senha'), t_update = now() WHERE id_tutor = '$id'";
$atualizar = mysqli_query($conexao, $sql);

$retorno = "Senha alterada com sucesso!";
header("Location: ../?pagina=tutores_edit_ok&&id=" . $id. "&&retorno=" . $retorno);
?>