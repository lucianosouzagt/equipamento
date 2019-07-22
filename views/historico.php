<?php
require 'vendor/autoload.php';
ob_start();
?>
<style type="text/css">
	th{
		text-align: left;
	}
</style>
<h2>Relatorio</h2>
<br><br>
<div class="table-responsive">
	<table class="table table-striped" width="800px">
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
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output('historico.pdf','I');
/*
* I = Abre no Navegador
* D = Força o Donwload
* F = Salva no Servidor
*/
?>