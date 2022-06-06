<?php
$pesquisa = $_POST['pesquisa'];

$filtro = "SELECT * FROM `atividades` WHERE at_nome LIKE '%$pesquisa%' ORDER BY at_nome ASC";

header("Location: ../?pagina=atividades&&filtro=" . $filtro);
