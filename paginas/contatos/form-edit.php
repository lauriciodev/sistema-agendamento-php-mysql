<?php 
$myId = $_GET['idcontato'];
?>

<header>
<h2 class="text-center text-white"> Editando Contato</h2>
<header>

<?php
$sql = "select * from tbcontatos where idcontato = $myId ";
$rs = mysqli_query($conexao, $sql) or die("erro ao execultar" . mysqli_error($conexao));

while($dados = mysqli_fetch_assoc($rs)){ ?>
<div class="d-flex p2 text-white gap-2 w-100 align-itens-center justify-cotent-center">

<div class="container-lg border  border-ligth bg-dark p-4">


<form action="index.php?menuop=edit-contato" method="POST">

  <input type="text" hidden value=<?= $myId ?> name="idcontato">
<div class="d-flex p-2  text-white gap-2  w-100 align-itens-center justify-contennt-center">
 
  <div class="form-group w-100">
   <label  for="nome">Nome</label>
   <input type="text" id="Nome" class="form-control" value=<?=$dados['nomecontato']?> name="nomecontato" placeholder="Jhon Doe">
  </div>


  <div class="form-group w-100">
    <label for="email">Email</label>
    <input class="form-control" value=<?=$dados['emailcontato']?> type="email" name="emailcontato" placeholder="exemplo@gmail.com">
  </div>

</div>


<div class="d-flex p-2  text-white gap-2  w-100 align-itens-center justify-contennt-center">
  <div class="form-group w-100">
<label for=="endereco">Endereço</label>
<input type="text" class="form-control" value=<?=$dados['enderecocontato']?> id="endereco" name="enderecocontato" placeholder="Av. sn centro n·00">
  </div>


  <div class="form-group w-100">
    <label for="telefone">Telefone</label>
    <input type="telefone"
    class="form-control" value=<?=$dados['telefonecontato']?> name="telefonecontato" placeholder="(00) 00000-0000">
  </div>

</div>


  <div class="d-flex p-2 text-white gap-2  w-100 align-itens-center justify-contennt-center">
  <div class="form-group w-100">
    <label for="sexo">Sexo</label>
    <select name="sexocontato" class="form-select form-select-sm custom-select" id="sexo">
  <option value="m" <?php echo ($dados["sexocontato"] == "m") ? "selected" : ""; ?>>M</option>
      <option value="f" <?php echo ($dados["sexocontato"] == "f") ? "selected" : ""; ?>>F</option>
      <option value="o" <?php echo ($dados["sexocontato"] == "o") ? "selected" : ""; ?>>O</option>
    </select>
  </div>

  <div class="form-group w-100">
    <label for="datanasc">Data de Nascimento</label>
    <input type="date" class="form-control" value=<?=$dados['datanascicontato']?> name="datanascicontato" id="datanasc" placeholder="Data de nascimento">
  </div>
</div>


  <button type="submit" class="btn btn-success">Salvar</button>

  <a href="index.php?menuop=contato" class="btn btn-danger">Cancelar</a>


</form>
</div>
<?php } ?>
