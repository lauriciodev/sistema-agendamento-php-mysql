<?php
include("config.php");

//conectando com banco de dados;

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("erro de conexão com o banco de dados " . mysqli_connect_error())

?>
