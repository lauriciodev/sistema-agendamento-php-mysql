<?php
include("db/conexao.php");

?>

<!DOCTYPE html>

<html>

<head>
  <title>Sharknager Task Manager</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.1">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">

</head>

<body>
  <header id="header__container"
    class="d-flex container-fluid py-2 px-5  align-itens-center justify-content-between border-bottom border-ligth bg-dark fixed-top">
    <img src="img/logo.png" class="align-self-start" id="logo" alt="logo" />
    <nav class="navbar navbar-expand-lg navbar-light w-50">
      <form class="form-inline my-2 my-lg-0 w-50">
        <input class="form-control mr-sm-2 flex-grow-1" type="search" placeholder="Pesquisar" aria-label="Search">
      </form>
    </nav>


  </header>
  <div class="container__main vh-100 pt-5 d-flex align-itens-center">

    <!-- Sidebar -->
    <div class="col-lg-1 h-100  pt-5 bg-dark">
      <div class="sidebar">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php?menuop=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?menuop=contato">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?menuop=tarefas">Tarefas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?menuop=eventos">Eventos</a>
          </li>
        </ul>
      </div>
    </div>


    <main class="col-lg-10 p-5 ">
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

?> </main>
  </div>

  <footer>
    <div class="bg-dark fixed-bottom border-top border-ligth text-white text-center">
      <p>Desenvolvido por Lauricio De Sousa</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>