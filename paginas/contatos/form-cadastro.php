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
    // Aqui você pode definir a lógica de validação do telefone conforme necessário
    if (strlen($telefone) < 10) {
        $erros[] = "Insira um telefone válido";
    }

    // Exibindo erros, se houver
    if (!empty($erros)) {
        foreach($erros as $erro) {
            echo "<li>$erro</li>";
        }
    } else {
        echo "Dados corretos";
        // Aqui você pode prosseguir para inserir os dados no banco de dados, por exemplo
    }
}

?>

<header>
    <h2 class="text-center text-white">Novo contato</h2>
</header>

<div class="container-lg border border-light bg-dark p-4">

    <form action="index.php?menuop=insert-contato" method="POST">

        <div class="d-flex p-2 text-white gap-2 w-100 align-itens-center justify-content-center">

            <div class="form-group w-100">
                <label for="nome">Nome</label>
                <input type="text" id="Nome" class="form-control" name="nomecontato" placeholder="Jhon Doe">
            </div>

            <div class="form-group w-100">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="emailcontato" placeholder="exemplo@gmail.com">
            </div>

        </div>

        <div class="d-flex p-2 text-white gap-2 w-100 align-itens-center justify-content-center">

            <div class="form-group w-100">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="enderecocontato" placeholder="Av. sn centro nº 00">
            </div>

            <div class="form-group w-100">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefonecontato" placeholder="(00) 00000-0000">
            </div>

        </div>

        <div class="d-flex p-2 text-white gap-2 w-100 align-itens-center justify-content-center">

            <div class="form-group w-100">
                <label for="sexo">Sexo</label>
                <select name="sexocontato" class="form-select form-select-sm custom-select" id="sexo">
                    <option value="m">M</option>
                    <option value="f">F</option>
                    <option value="o">O</option>
                </select>
            </div>

            <div class="form-group w-100">
                <label for="datanasc">Data de Nascimento</label>
                <input type="date" class="form-control" name="datanascicontato" id="datanasc" placeholder="Data de nascimento">
            </div>

        </div>

        <button type="submit" name="bt_enviar" class="btn btn-success">Criar novo contato</button>

        <a href="index.php?menuop=contato" class="btn btn-danger">Cancelar</a>

    </form>
</div>

