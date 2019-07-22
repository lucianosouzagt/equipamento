<div class="table-responsive">
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th>BP</th>
				<th>SERIAL</th>
				<th>MARCA</th>
				<th>MODELO</th>
				<th>AÇÔES</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($list as $item): ?>
			<tr>
				<td><?php echo $item['bp']; ?></td>
				<td><?php echo $item['sn']; ?></td>
				<td><?php echo $item['marca']; ?></td>
				<td><?php echo $item['modelo']; ?></td>
				<td>
					<a class="btn btn-info btn-sm btn-block " href="<?php echo BASE_URL; ?>emprestimo/embarque/<?php echo $item['id']; ?>">Selecionar</a> 
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>