<h1>Novo produto</h1>

<form action="" method="post" name="form_new">
	<p>código:</p>
	<input type="text" name="codigo"/>
	<p>descrição</p>
	<input type="text" name="descricao"/>
	<p>categoria</p>
	<select name="categoria_id">
		<?php foreach($data['categorias'] as $cat) {?>
			<option value="<?=$cat['id']?>"><?=$cat['categoria']?></option>
		<?php } ?>
	</select>
	<p>modelo</p>
	<select name="modelo_id">
		<?php foreach($data['modelos'] as $mod) {?>
			<option value="<?=$mod['id']?>"><?=$mod['modelo']?></option>
		<?php } ?>
	</select>
	<p>tensão</p>
	<input type="text" name="tensao"/>
	<p>potência</p>
	<input type="text" name="potencia"/>
	<p>cor</p>
	<input type="text" name="cor"/>
	<p>bocal</p>
	<input type="text" name="bocal"/>
	<p>lumens</p>
	<input type="text" name="lumens"/>
	<p>qtd caixa</p>
	<input type="text" name="qtd_caixa"/>
	<p>preço unitário</p>
	<input type="text" name="preco_unitario"/>
	<p>preço caixa</p>
	<input type="text" name="preco_caixa"/>
	<p>preço master</p>
	<input type="text" name="preco_master"/>
	<p>parentesco</p>
	<input type="text" name="parent_id"/>
	<br><br>
	<input type="submit" value="enviar"/>
	<br><br>
	<br><br>
</form>