<h1>produtos view</h1>

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
			<td><?=$data[$i]->codigo?></td>
			<td><?=$data[$i]->descricao?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>