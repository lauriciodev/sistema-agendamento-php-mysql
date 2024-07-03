<header>
  <h2 class="text-center text-white">Pagina de contato</h2>
</header>


<a href="index.php?menuop=create-contato" class="btn btn-dark border border-ligth float__button">Novo</a>

<div class="container-lg d-flex flex-column gap-2 overflow-auto" style="max-height: 385px;">
  <table class="table table text-center table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Endereço</th>
        <th scope="col">Telefone</th>
        <th scope="col">Sexo</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>

    <tbody>

<?php


// fazendo paginação;
$quantidade  = 9;

$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;

//calculo de valor da pagina;

$inicio = ($quantidade * $pagina) - $quantidade;



$texto_pesquisa = (isset($_POST["texto_pesquisa"])) ? $_POST["texto_pesquisa"] : "" ;
echo "<p> $texto_pesquisa</p>";

$sql = "select * from tbcontatos 
  where 
idcontato = '{$texto_pesquisa}' or
nomecontato LIKE '%{$texto_pesquisa}%'
ORDER BY nomecontato DESC
LIMIT $inicio, $quantidade 
";
$rs = mysqli_query($conexao, $sql) or die("Erro ao execultar" . mysqli_connect_error($conexao));

while($dados = mysqli_fetch_assoc($rs)){

?>


      <tr>

        <td scope="row"><?= $dados["nomecontato"]?></td>
        <td scope="row"><?= $dados["emailcontato"]?></td>
        <td scope="row"><?= $dados["enderecocontato"]?></td>
        <td scope="row"><?= $dados["telefonecontato"]?></td>
        <td scope="row"><?= $dados["sexocontato"]?></td>
        <td scope="row"><?= $dados["datanascicontato"]?></td>
        <td scope="row" class="d-flex gap-2">
          <a href="index.php?menuop=form-edit-contato&idcontato=<?=$dados["idcontato"]?>">Editar</a>

          <a href="index.php?menuop=delete-contato&idcontato=<?=$dados["idcontato"]?>">Deletar</a>
        </td>
      </tr>

      <?php
}
?>

    </tbody>

  </table>


</div>
<div class="d-flex align-item-center justify-content-between custom-rounded bg-light w-50 text-dark m-auto p-1">
<?php 
$sql_total = "SELECT idcontato FROM tbcontatos";
$qtd_query = mysqli_query($conexao, $sql_total) or die(mysql_error($conexao));
  $num_rows = mysqli_num_rows($qtd_query);
  $qtd_paginas =   ceil($num_rows / $quantidade);



  echo "<a href=\"?menuop=contato&pagina=1 \">Primeira Página</a> ";

  if($pagina > 6){
?>

<a href="?menuop=contato&pagina=<?php echo $pagina - 1  ?>"> << </a>

<?php
  }
  
  for($i = 1; $i< $qtd_paginas; $i++){
   

   if($i>=($pagina -5) && $i <= ($pagina + 5)){ 
  if($i == $pagina){
      echo "<p > $i</p>";
  }else{
     echo "<a href=\"?menuop=contato&pagina=$i \">$i</a>";
  }
  }
  }

  if($pagina < ($qtd_paginas - 5)){
?>

<a href="?menuop=contato&pagina=<?php echo $pagina + 1  ?>">>> </a>

<?php
  }    
echo "<a href=\"?menuop=contato&pagina=$qtd_paginas \">Ultima Página</a> ";
  
?>

</div>
