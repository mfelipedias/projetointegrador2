<?php
$pesquisa = $_POST['pesquisa'];

$filtro = "SELECT * FROM `alunos` WHERE a_nome LIKE '%$pesquisa%' ORDER BY a_nome ASC";

header("Location: ../?pagina=alunos&&filtro=" . $filtro);
