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
		<div class="atletas-main-text-box">
			<h1 class="atletas-main-text">atletas</h1>
		</div>
		<div class="menu-atletas-box">
			<img class="icon-atleta" id="icon-atleta-1" src="images/atletas/icons/masicon.png" onclick="showAtleta('addatleta')">
			<img class="icon-atleta" id="icon-atleta-2" src="images/atletas/icons/editicon.png" onclick="showAtleta('editatleta')">
			<img class="icon-atleta" id="icon-atleta-3"src="images/atletas/icons/borraricon.png" onclick="showAtleta('delatleta')">
			
		</div>
		

		<?php
		include 'addatleta.html';
		?>
		
		<?php
		include 'editatleta.html';
		?>
		<?php
		include 'delatleta.html';
		?>
	</content>
	
		
	
	<?php
	include 'footer.html';
	?>

</body>
</html>