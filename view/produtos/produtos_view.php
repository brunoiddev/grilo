<h1>produtos view</h1>

<a href="produto_new.html">novo produto</a>
<br>
<br>

<table>
	<thead>
		<tr>
			<th>id</th>
			<th>cod</th>
			<th>desc</th>
		</tr>
		
	</thead>
	<tbody>
		<?php for($i=0; $i<sizeof($data); $i++) { ?>
		<tr>
			<td><?=$data[$i]->id?></td>
			<td><a href="produto.html?id=<?=$data[$i]->id?>"><?=$data[$i]->codigo?></a></td>
			<td><?=$data[$i]->descricao?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>