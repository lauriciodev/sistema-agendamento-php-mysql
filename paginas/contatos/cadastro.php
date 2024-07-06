<h3>Enviando dados</h3>
<?php

// Validações e sanitizações

if(isset($_POST['bt_enviar'])){
    $nome = $_POST['nomecontato'];
    $endereco = $_POST['enderecocontato'];
    $email = $_POST['emailcontato'];
    $telefone = $_POST['telefonecontato'];
    $sexo = $_POST['sexocontato'];
    $datanasc = $_POST['datanascicontato'];

    $erros = [];

    // Sanitização
    $nome = filter_input(INPUT_POST, 'nomecontato', FILTER_SANITIZE_SPECIAL_CHARS);
    $endereco = filter_input(INPUT_POST, 'enderecocontato', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'emailcontato', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefonecontato', FILTER_SANITIZE_NUMBER_INT);
    $sexo = filter_input(INPUT_POST, 'sexocontato', FILTER_SANITIZE_SPECIAL_CHARS);

    // Validação de e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Insira um email válido";
    }

    // Validação de telefone
    if (strlen($telefone) < 10) {
        $erros[] = "Insira um telefone válido";
    }

    // Exibindo erros, se houver
    if (!empty($erros)) {
        foreach($erros as $erro) {
            echo "<li class='text-white'>$erro</li>";
        }
    } else {
        echo "Dados corretos";
        $nome = mysqli_real_escape_string($conexao, $_POST["nomecontato"]);
$email = mysqli_real_escape_string($conexao,$_POST["emailcontato"]);
$endereco =mysqli_real_escape_string($conexao, $_POST["enderecocontato"]);
$telefone = mysqli_real_escape_string($conexao,$_POST["telefonecontato"]);
$sexo = mysqli_real_escape_string($conexao,$_POST["sexocontato"]);
$datanasc = mysqli_real_escape_string($conexao,$_POST["datanascicontato"]);
 
 
$sql =  "INSERT INTO `tbcontatos` (
  `nomecontato`, 
  `emailcontato`, 
  `telefonecontato`, 
  `sexocontato`, 
  `datanascicontato`,
  `falgfavoritocontato`,
  `enderecocontato`
) VALUES (
  '{$nome}', 
  '{$email}',
  '{$telefone}',   
  '{$sexo}', 
  '{$datanasc}',
    '1',
  '{$endereco}'
   )";

mysqli_query($conexao, $sql) or die("erro ao execultar a consulta" . mysqli_error($conexao));


echo "O registro foi inserido com sucesso";

    }
}

?>


