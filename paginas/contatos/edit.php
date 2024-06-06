<h3>Atualizando dados</h3>

<?php
$idContato = mysqli_real_escape_string($conexao, $_POST["idcontato"]);
$nomeContato = mysqli_real_escape_string($conexao, $_POST["nomecontato"]);
$emailContato = mysqli_real_escape_string($conexao,$_POST["emailcontato"]);
$enderecoContato =mysqli_real_escape_string($conexao, $_POST["enderecocontato"]);
$telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefonecontato"]);
$sexoContato = mysqli_real_escape_string($conexao,$_POST["sexocontato"]);
$datanasciContato = mysqli_real_escape_string($conexao,$_POST["datanascicontato"]);

$sql =  "UPDATE `tbcontatos` 
 SET `nomecontato` = `{$nomeContato}`, 
  `emailcontato` =  `{$emailContato}`, 
  `telefonecontato` = `{$telefoneContato}`, 
  `sexocontato` =  `{$sexoContato}`, 
  `datanascicontato` = `{$datanasciContato}`,
  `enderecocontato` = `{$enderecoContato}`

 where `idcontato` = `{$idContato}`";


mysqli_query($conexao, $sql) or die("erro ao execultar a consulta" . mysqli_error($conexao));


echo "Registro atualizado com sucesso";

?>