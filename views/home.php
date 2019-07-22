<br>
<div class="table-responsive">
	<h4>Equipamentos Embarcado</h4>
	<table class="table table-bordered ">
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
			<tr class="tr">
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
<br>
<div class="table-responsive">
	<h4>Equipamentos Disponivel</h4>
	<table class="table table-bordered ">
		<thead class="thead-light">
			<tr>
				<th>BP</th>
				<th>SERIAL</th>
				<th>MARCA</th>
				<th>MODELO</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($list1 as $item1): ?>
			<tr>
				<td><?php echo $item1['bp']; ?></td>
				<td><?php echo $item1['sn']; ?></td>
				<td><?php echo $item1['marca']; ?></td>
				<td><?php echo $item1['modelo']; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>