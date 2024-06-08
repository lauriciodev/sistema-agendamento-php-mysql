<?php
include("db/conexao.php");

?>

<!DOCTYPE html>

<html>
<head>
<title>Sharknager Task Manager</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.1">
<link rel="stylesheet" href="css/index.css">
<link rel="icon" type="image/png" href="img/favicon.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="header__container p-3">

<img src="img/logo.png" id="logo" alt="logo"/>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
 	</button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     
<a class="nav-item nav-link"  href="index.php?menuop=home">Home</a>
<a class="nav-item nav-link"  href="index.php?menuop=contato">Contato</a>
<a class="nav-item nav-link"  href="index.php?menuop=tarefas">Tarefas</a>
<a class="nav-item nav-link"  href="index.php?menuop=eventos">Eventos</a>

		</div>
  </div>

</nav>
</div>
<main class="px-3">

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

case "delete-contato":
		include("paginas/contatos/delete.php");
	break;

case "insert-contato":
	include("paginas/contatos/cadastro.php");
	break;

case "create-contato":
include("paginas/contatos/form-cadastro.php");
	break;

	case "form-edit-contato":
		include("paginas/contatos/form-edit.php");
	 break;

	case "edit-contato":
		include("paginas/contatos/edit.php");
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
