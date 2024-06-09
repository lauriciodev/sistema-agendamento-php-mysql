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

$sql = "select * from tbcontatos";
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
