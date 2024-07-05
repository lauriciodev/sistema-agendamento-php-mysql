<header>
  <h2 class="text-center text-white">Pagina de contato</h2>
</header>


<a href="index.php?menuop=create-contato" class="btn btn-dark border border-ligth float__button">Novo</a>

<div class="container-lg d-flex align-itens-center flex-column gap-2" style="height: 400px;">
  <table class="table table text-center table-bordered table-dark table-striped">
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
$quantidade  = 10;

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
        <td scope="row" class="d-flex gap-2 align-item-center justify-content-center">
          <a class="bg-dark border border-white px-1 rounded"
            href="index.php?menuop=form-edit-contato&idcontato=<?=$dados["idcontato"]?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" color="yellow" height="12" fill="currentColor"
              class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path
                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
              <path fill-rule="evenodd"
                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
            </svg>
          </a>

          <a class="bg-dark border border-white px-1 rounded"
            href="index.php?menuop=delete-contato&idcontato=<?=$dados["idcontato"]?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" color="red" height="12" fill="currentColor"
              class="bi bi-trash" viewBox="0 0 16 16">
              <path
                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
              <path
                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
            </svg><i class="bi bi-trash"></i>
          </a>
        </td>
      </tr>

      <?php
}
  ?>

    </tbody>

  </table>

  <ul class="pagination mx-auto">
    <?php 
$sql_total = "SELECT idcontato FROM tbcontatos";
$qtd_query = mysqli_query($conexao, $sql_total) or  die ("erro ao execultatr query " . mysqli_error($conexao));
  $num_rows = mysqli_num_rows($qtd_query);
  $qtd_paginas =   ceil($num_rows / $quantidade);



  echo "
  <li class='page-item'>
  <a  class='page-link' href=\"?menuop=contato&pagina=1 \">Primeira Página</a> 
  </li>
  ";

  if($pagina > 6){
?>
    <li class='page-item'>
      <a class="page-link" href="?menuop=contato&pagina=<?php echo $pagina - 1  ?>">
        << </a>
    </li>

    <?php
  }
  
  for($i = 1; $i< $qtd_paginas; $i++){
   

   if($i>=($pagina -5) && $i <= ($pagina + 5)){ 
  if($i == $pagina){

    echo "
    <li class='page-item'>
    <p class='page-link active' > $i</p>
    </li>
    ";

  }else{
     echo "
     <li class='page-item'>
     <a class='page-link' href=\"?menuop=contato&pagina=$i \">$i</a> 
     </li>"
     ;
  }
  }
  }

  if($pagina < ($qtd_paginas - 5)){
?>
    <li class="page-item">
      <a class="page-link" href="?menuop=contato&pagina=<?php echo $pagina + 1  ?>">>> </a>
    </li>
    <?php
  }    
echo "
<li class='page-item'>
<a class='page-link' href=\"?menuop=contato&pagina=$qtd_paginas \">Ultima Página</a> 
</li>
";
?>

    </>
  </ul>