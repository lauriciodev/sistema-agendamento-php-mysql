<?php
$idcontato = $_GET['idcontato'];

$sql = "select * from tbcontatos where idcontato = '$idcontato'";
$rs = mysqli_query($conexao, $sql) or die("erro" . mysqli_error($conexao));

while($dados = mysqli_fetch_assoc($rs)){

?>


<div class="main d-flex gap-3 align-items-center justify-content-center flex-column">

<h2 class="text-white mb-2" >Informações do contato</h2>
<div class="col-12 d-flex align-items-center justify-content-center">
<div class="w-25">
<img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1hfIQwWxRw-oBZ-xwjsmA5n1CyrwaYnM7JA&s" alt="img user">
</div>
     <div class="text-white border border-light p-3">
  <p><i class="ri-file-user-fill"></i> 
  <?= $dados["nomecontato"]; ?></p>
  <p><i class="ri-mail-fill"></i> 
  <?= $dados["emailcontato"]; ?></p>
  <p><i class="ri-map-pin-fill"></i> 
  <?= $dados["enderecocontato"]; ?></p>
  <p><i class="ri-phone-fill"></i> 
  <?= $dados["telefonecontato"]; ?></p>
  <p><i class="ri-cake-fill"></i>
  <?= $dados["datanascicontato"]; ?></p>
 
</div>
</div>
<div class="text-left w-50">
<a href="index.php?menuop=contato" class="btn btn-primary btn-sm"><i class="ri-home-2-fill"></i></a>
<a href="index.php?menuop=form-edit-contato&idcontato=<?= $dados=['idcontato']; ?>"  class="btn btn-warning btn-sm"><i class="ri-edit-box-fill"></i></a>
<a href="index.php?menuop=delete-contato&idcontato=<?= $dados=["idcontato"]; ?>"  class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></a>


</div>

</div>


<?php
}
?>
