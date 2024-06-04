<h3>Enviando dados</h3>

<?php
$nomeContato = mysqli_real_escape_string($conexao, $_POST["nomecontato"]);
$emailContato = mysqli_real_escape_string($conexao,$_POST["emailcontato"]);
$telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefonecontato"]);
$sexoContato = mysqli_real_escape_string($conexao,$_POST["sexocontato"]);
$datanasciContato = mysqli_real_escape_string($conexao,$_POST["datanascicontato"]);


$sql =  "INSERT INTO `tbcontatos` (
  `nomecontato`, 
    `emailcontato`, 
  `telefonecontato`, 
  `sexocontato`, 
  `datanascicontato`,
  `falgfavoritocontato`
) VALUES (
    '{$nomeContato}', 
    '{$emailContato}', 
    '${telefoneContato}', 
    '${sexoContato}', 
    '${datanasciContato}',
      '1'
)";

mysqli_query($conexao, $sql) or die("erro ao execultar a consulta" . mysqli_error($conexao));


echo "O registro foi inserido com sucesso";

?>
