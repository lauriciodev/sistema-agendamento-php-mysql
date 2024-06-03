<?php
include("db/conexao.php");

?>

<!DOCTYPE html>

<html>
<head>
<title>Agendamento</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.1">
</head>
<body>
<h2>Sistema de agendamento</h2>
<nav>
<a href="index.php?menuop=home">Home</a>
<a href="index.php?menuop=contato">Contato</a>
<a href="index.php?menuop=tarefas">Tarefas</a>
<a href="index.php?menuop=eventos">Eventos</a>
</nav>
<main>

<hr>


<?php

$menuop = (isset($_GET["menuop"]))?$_GET["menuop"] : "home";

switch($menuop){
case "home":
include("paginas/home/index.php");
	break;

case "contato":
include("paginas/contatos/index.php");
	break;

case "tarefas":
include("paginas/tarefas/index.php");
	break;

case "eventos":
include("paginas/eventos/index.php");
	break;

default:
include("paginas/home/index.php");


}

?>

</main>
</body>
</html>
