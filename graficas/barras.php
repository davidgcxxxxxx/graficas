<?php 
require_once "php/conexion.php"; 
$conexion=conexion();
?>
<div id="graficaBarras"></div>



<script type="text/javascript">
	var data = [
	{
		x: ['giraffes', 'orangutans', 'monkeys'],
		y: [20, 14, 23],
		type: 'bar'
	}
	];

	Plotly.newPlot('graficaBarras', data);
</script>