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
			<h1 class="atletas-main-text">disciplinas</h1>
		</div>
		<div class="menu-atletas-box">
			<img class="icon-disciplina"  src="images/atletas/icons/masicon.png" onclick="showDisciplina('adddisciplina')">
			<img class="icon-disciplina"  src="images/atletas/icons/editicon.png" onclick="showDisciplina('editdisciplina')">
			
			
		</div>
		

		<?php
		include 'adddisciplina.html';
		?>
		
		<?php
		include 'editdisciplina.php';
		?>
		
	</content>
	
		
	
	<?php
	include 'footer.html';
	?>

</body>
</html>