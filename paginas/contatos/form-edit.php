<?php
$myId = $_GET["idcontato"];
?>

<h2> editando id <?=  $myId?> </h2>
<?php
$sql = "select * from tbcontatos where idcontato = $myId ";
$rs = mysqli_query($conexao, $sql) or die("erro ao execultar" . mysqli_error());

while($dados = mysqli_fetch_assoc($rs)){ ?>

<form action="index.php?menuop=editar-contato"  method="POST">

<input type="text" hidden value=<?= $myId ?> name="idcontato">

<div>
<input type="text" name="nomecontato"value=<?=$dados["nomecontato"]?>  placeholder="Nome">
</div>  


  <div>
<input type="email" name="emailcontato" value=<?=$dados["emailcontato"]?> placeholder="Email">
</div>  

  <div>
<input type="text" name="enderecocontato" value=<?=$dados["enderecocontato"]?> placeholder="Endereço">
</div>  


  <div>
<input type="telefone" name="telefonecontato" value=<?=$dados["telefonecontato"]?>   placeholder="Telefone">
</div>  


<div>
    <label for="sexo">Sexo</label>
    <select name="sexocontato" id="sexo">
    <option value="m" <?php echo ($dados["sexocontato"] == "m") ? "selected" : ""; ?>>M</option>
        <option value="f" <?php echo ($dados["sexocontato"] == "f") ? "selected" : ""; ?>>F</option>
        <option value="o" <?php echo ($dados["sexocontato"] == "o") ? "selected" : ""; ?>>O</option>
    </select>
</div>


 <div>
 <input type="date" name="datanascicontato" value=<?= $dados["datanascicontato"]?> placeholder="Data de nascimento">
</div>  

<button type="submit">Atualizar</button>
</form>

<?php } ?>
