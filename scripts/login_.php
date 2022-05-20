<?php
include 'conexao.php';
include 'password.php';
session_start();
$user = $_POST['t_usuario'];
$senha = $_POST['t_senha'];
$erro1 = "<b>Erro:</b> Usuário não encontrado.";
$erro2 = "<b>Erro:</b> Senha incorreta.";

$sql = "SELECT * FROM tutores WHERE t_user = '$user'";

$buscar = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($buscar);

if ($total == 0) {
    header("Location: ../login.php?retorno=" . $erro1);
} else {
    while ($array = mysqli_fetch_array($buscar)) {
        $id_tutores = $array['id_tutores'];
        $t_nome = $array['t_nome'];
        $t_senha = $array['t_senha'];
        $t_status = $array['t_status'];
        $t_funcao = $array['t_funcao'];
        $senhacod = sha1($senha);

        if ($total > 0) {
            if ($senhacod == $t_senha) {
                if ($t_status == 1) {
                    $_SESSION['id_tutores'] = $id_usuario;
                    $_SESSION['t_nome'] = $t_nome;
                    $_SESSION['t_senha'] = $t_senha;
                    $_SESSION['t_funcao'] = $t_funcao;
                    $_SESSION['t_status'] = $t_status;
                    $_SESSION['t_usuario'] = $user;

                    header("Location: ../index.php?pagina=inicio");
                } else {
                    header("Location: ../login.php?retorno=" . $erro1);
                }
            } else {;
                header("Location: ../login.php?retorno=" . $erro2);
            }
        } else {

            header("Location: ../login.php?retorno=" . $erro1);
        }
    }
}
