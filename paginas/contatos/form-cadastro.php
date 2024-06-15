<header>
<h2 class="text-center text-white">Novo contato</h2>
</header>

<div class="container-lg border  border-ligth bg-dark p-4">

<form  action="index.php?menuop=insert-contato"  method="POST">

   <div class="d-flex p-2 text-white gap-2  w-100 align-itens-center justify-contennt-center">

  <div class="form-group w-100">
   <label  for="nome">Nome</label>
    <input type="text" id="Nome" class="form-control" name="nomecontato" placeholder="Jhon Doe">
  </div>


  <div class="form-group w-100">
    <label for="email">Email</label>
    <input class="form-control" type="email" name="emailcontato" placeholder="exemplo@gmail.com">
  </div>

</div>


<div class="d-flex p-2  text-white gap-2  w-100 align-itens-center justify-contennt-center">
  <div class="form-group w-100">
<label for=="endereco">Endereço</label>
    <input type="text" class="form-control" id="endereco" name="enderecocontato" placeholder="Av. sn centro n·00">
  </div>


  <div class="form-group w-100">
    <label for="telefone">Telefone</label>
    <input type="telefone"
class="form-control" name="telefonecontato" placeholder="(00) 00000-0000">
  </div>

</div>


  <div class="d-flex p-2 text-white gap-2  w-100 align-itens-center justify-contennt-center">
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


  <button type="submit" class="btn btn-success">Criar novo contato</button>

  <a href="index.php?menuop=contato" class="btn btn-danger">Cancelar</a>

</form>
