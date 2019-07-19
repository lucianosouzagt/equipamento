<h2>Relatorio</h2>
<br><br>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>CODIGO</th>
			<th>NOME</th>
			<th>PREÇO</th>
			<th>QTD.</th>
			<th>QTD. MIN.</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($list as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['cod']; ?></td>
			<td><?php echo $item['name']; ?></td>
			<td>R$ <?php echo number_format($item['price'], 2,',','.'); ?></td>
			<td><?php echo $item['quantity']; ?></td>
			<td><?php echo $item['min_quantity']; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<script type="text/javascript">
	window.print();
</script>