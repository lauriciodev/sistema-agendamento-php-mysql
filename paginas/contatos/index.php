
<header>
<h2 class="text-center">Pagina de contato</h2>
</header>

<div class="container-lg d-flex flex-column gap-2">


<a href="index.php?menuop=create-contato" class="btn btn-primary align-self-end">Novo</a>
<table class="table" border="colapse">
<thead>
<tr>
  <th scope="col">Id</th> 
  <th scope="col">Nome</th>
  <th scope="col">Email</th>
  <th scope="col">Endereço</th>
  <th scope="col">Telefone</th>
  <th scope="col">Sexo</th>
  <th scope="col">Data nasc</th>

</tr>
</thead>

<tbody>
 
<?php

$sql = "select * from tbcontatos";
$rs = mysqli_query($conexao, $sql) or die("Erro ao execultar" . mysqli_connect_error($conexao));

while($dados = mysqli_fetch_assoc($rs)){

?>


<tr>
 
 <td scope="row"><?= $dados["idcontato"]?></td>
 <td scope="row"><?= $dados["nomecontato"]?></td>
 <td scope="row"><?= $dados["emailcontato"]?></td>
 <td scope="row"><?= $dados["enderecocontato"]?></td>
 <td scope="row"><?= $dados["telefonecontato"]?></td>
 <td scope="row"><?= $dados["sexocontato"]?></td>
 <td scope="row"><?= $dados["datanascicontato"]?></td>
 <td scope="row">
 <a href="index.php?menuop=form-edit-contato&idcontato=<?=$dados["idcontato"]?>">Editar</a>
 </td>

<td scope="row">
 <a href="index.php?menuop=delete-contato&idcontato=<?=$dados["idcontato"]?>">Deletar</a>
 </td>


</tr>

<?php
}
?>

</tbody>

</table>

</div>
