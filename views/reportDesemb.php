<?php
require 'vendor/autoload.php';
ob_start();
?>
<style type="text/css">
	table{
		width: 100%
	}
	th{
		text-align: left;
	}
</style>
<h2>Relatorio Equipamento Disponivel</h2>
<br><br>
<table class="table table-striped table-hover">
	<thead class="thead-light">
			<tr>
				<th>BP</th>
				<th>SERIAL</th>
				<th>MARCA</th>
				<th>MODELO</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($list as $item): ?>
			<tr>
				<td><?php echo $item['bp']; ?></td>
				<td><?php echo $item['sn']; ?></td>
				<td><?php echo $item['marca']; ?></td>
				<td><?php echo $item['modelo']; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
</table>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output('equipamento.pdf','I');
/*
* I = Abre no Navegador
* D = Força o Donwload
* F = Salva no Servidor
*/
?>