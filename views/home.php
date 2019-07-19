<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover">
		<thead class="thead-light">
			<tr>
				<th>BP</th>
				<th>SERIAL</th>
				<th>MARCA</th>
				<th>MODELO</th>
				<th>FUNCIONARIO</th>
				<th>DATA EMB.</th>
				<th>SOLICITANTE</th>

			</tr>
		</thead>
		<tbody>
		<?php foreach($list as $item): ?>
			<tr>
				<td><?php echo $item['bp']; ?></td>
				<td><?php echo $item['sn']; ?></td>
				<td><?php echo $item['marca']; ?></td>
				<td><?php echo $item['modelo']; ?></td>
				<td><?php echo $item['name']; ?></td>
				<td><?php echo $item['data']; ?></td>
				<td><?php echo $item['solicitante']; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>