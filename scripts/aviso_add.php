<?php
include 'conexao.php';
include 'password.php';

$av_tutor = $_POST['av_tutor'];
$av_titulo = $_POST['av_titulo'];
$av_conteudo = $_POST['av_conteudo'];

$sql = "INSERT INTO avisos (av_titulo, av_conteudo, av_tutor, av_create, av_update) values ('$av_titulo', '$av_conteudo', '$av_tutor', now(), now())";
$inserir = mysqli_query($conexao, $sql);
$retorno = "Aviso postado!";
header("Location: ../?pagina=aviso_add_ok&&retorno=" . $retorno);
