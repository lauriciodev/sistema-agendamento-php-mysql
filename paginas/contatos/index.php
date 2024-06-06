
<header>
<h2>Pagina de contato</h2>
</header>

<a href="index.php?menuop=cadastro-contato">Novo</a>
<table border="colapse">
<thead>
<tr>
  <th>Id</th> 
  <th>Nome</th>
  <th>Email</th>
  <th>Endereço</th>
  <th>Telefone</th>
  <th>Sexo</th>
  <th>Data nasc</th>

</tr>
</thead>

<tbody>
 
<?php

$sql = "select * from tbcontatos";
$rs = mysqli_query($conexao, $sql) or die("Erro ao execultar" . mysqli_connect_error($conexao));

while($dados = mysqli_fetch_assoc($rs)){

?>


<tr>
 
 <td><?= $dados["idcontato"]?></td>
 <td><?= $dados["nomecontato"]?></td>
 <td><?= $dados["emailcontato"]?></td>
 <td><?= $dados["enderecocontato"]?></td>
 <td><?= $dados["telefonecontato"]?></td>
 <td><?= $dados["sexocontato"]?></td>
 <td><?= $dados["datanascicontato"]?></td>
 <td>
 <a href="index.php?menuop=form-edit-contato&idcontato=<?=$dados["idcontato"]?>">Editar</a>
 </td>

</tr>

<?php
}
?>

</tbody>

</table>
