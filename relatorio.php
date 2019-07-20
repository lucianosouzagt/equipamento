<?php
ob_start();
?>

<h1>Relarotio</h1>

<table class="table table-striped">
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
		<tr>
			<td>1809</td>
			<td>PE0254TMW</td>
			<td>LENOVO</td>
			<td>V310</td>
			<td>Carlor Servulo</td>
			<td>19/07/2019</td>
			<td>Monique Marinho</td>
		</tr>
	</tbody>
</table>
<?php

$html = ob_get_contents();
ob_end_clean();

require 'vendor/autoload.php';

$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output('relatorio'.time().'.pdf', 'I');


?>

