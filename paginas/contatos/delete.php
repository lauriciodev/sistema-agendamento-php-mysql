

<?php
$myId = $_GET["idcontato"];
echo "<p>$myId</p>";
  $sql = "DELETE from tbcontatos where idcontato = '{$myId}'";

$rs = mysqli_query($conexao,$sql) or die("deu erro!" . mysqli_error($conexao));

echo " contato deletado com sucesso !";

?>


