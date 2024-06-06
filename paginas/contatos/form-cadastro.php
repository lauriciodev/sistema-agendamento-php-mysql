<h2>Novo contato</h2>
<hr>
<form action="index.php?menuop=inserir-contato" method="POST">

  <div>
<input type="text" name="nomecontato"  placeholder="Nome">
</div>  


  <div>
<input type="email" name="emailcontato"  placeholder="Email">
</div>  

  <div>
<input type="text" name="enderecocontato"  placeholder="Endereço">
</div>  


  <div>
<input type="telefone" name="telefonecontato"  placeholder="Telefone">
</div>  


 <div>
<label for="sexo">Sexo</label>
<select name="sexocontato" id="sexo">
<option value="m">M</option>
<option value="f">F</option>
<option value="o">O</option>
</select>
</div>  

 <div>
<input type="date" name="datanascicontato"  placeholder="Data de nascimento">
</div>  

<button type="submit">Criar novo contato</button>


</form>
