<?php include "../includes/cabecalho.php";?>
<form name="formulario-pacientes" method="post" action="pacientes-inserir.php">

<p>
<label>Nome:</label>
<input name="nome">

</p>
<p>
<label>Telefone:</label>
<input name="telefone">
</p>
<p>
<label>Data de nascimento:</label>
<input name="data_nascimento" type="date">
</p>
<label>Convênio</label>
<input name= "convenio" type="checkbox" value="sim">
</p>
<label>Diagnóstico:</label>
<textarea name="diagnostico"></textarea>
</p>
<p>
<button type="submit">Salvar</button>
</p>
</form>



<?php include"../includes/rodape.php";?>