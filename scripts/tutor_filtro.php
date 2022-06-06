<?php
$pesquisa = $_POST['pesquisa'];

$filtro = "SELECT * FROM `tutores` WHERE t_nome LIKE '%$pesquisa%' ORDER BY t_nome ASC";

header("Location: ../?pagina=tutores&&filtro=" . $filtro);
