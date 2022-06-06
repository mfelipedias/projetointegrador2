<?php
$pesquisa = $_POST['pesquisa'];
$id = $_POST['id'];

if($pesquisa=='Todos'){
    $filtro = "SELECT * FROM `atv_aluno` INNER JOIN `alunos` ON atv_aluno=id_aluno INNER JOIN `tutores` ON atv_tutor=id_tutor INNER JOIN  `atividades` ON atv_atividade=id_atividade WHERE atv_aluno=$id ORDER BY atv_create ASC";
    //echo $filtro;
    header("Location: ../?pagina=alunos_view&&id=" . $id . "&&filtro=" . $filtro);
}else{
    $filtro = "SELECT * FROM `atv_aluno` INNER JOIN `alunos` ON atv_aluno=id_aluno INNER JOIN `tutores` ON atv_tutor=id_tutor INNER JOIN  `atividades` ON atv_atividade=id_atividade WHERE atv_aluno=$id AND atv_atividade = $pesquisa ORDER BY atv_create ASC";
    //echo $filtro;
    header("Location: ../?pagina=alunos_view&&id=" . $id . "&&filtro=" . $filtro);
}

