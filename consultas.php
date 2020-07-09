<!DOCTYPE html>
<html>
<head>
	<title>Atletic - WEB</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta lang="es">
	<script type="text/javascript" src="script.js"></script>

</head>
<body>
	<?php
	include 'header.html';
	?>
	<content>
		<div class="consultas-menu-box">
			<h2 class="btn-menu-consultas1" onclick="showConsulta(1)">Ver Atletas</h2>
			<h2 class="btn-menu-consultas2" onclick="showConsulta(2)">Ver Disciplinas</h2>
			
		</div>

		<?php
		include 'consultaAtletas.php';
		?>
		<?php
		include 'consultaDisciplinas.php';
		?>
	</content>
	
		
	
	<?php
	include 'footer.html';
	?>

</body>
</html>