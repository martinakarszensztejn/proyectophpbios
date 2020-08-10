<?php

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'proyectophpbios';
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if (!$conn) {
		die('No se pudo conectar al servidor.');
	}
	else{
		$sqlsent88 = "SELECT * FROM proyectophpbios.disciplina ORDER BY idDisciplina ASC";
		$resultado88 = mysqli_query($conn,$sqlsent88);
		$listaDeDisID88 = array();
		$listaDeDisNom88 = array();
	
		while ($row2 = mysqli_fetch_array($resultado88)) {
			
			array_push($listaDeDisID88, $row2["idDisciplina"]);
			array_push($listaDeDisNom88, $row2["NombreDisciplina"]);
		}
	
		$ERROR = "";
		if (isset($_SESSION['erMess'])) {
			if ($_SESSION['erMess']==1) {
				?>
				<script type="text/javascript">
					window.alert("Estimado Usuario: Ese ID no existe. Vuelva a ingresar un ID.");
				</script>
				<?php
				$_SESSION['erMess']=0;
			}
			

			
		}
	}
	mysqli_close($conn);
?>
<div class="editatleta" id="editatleta">
	
	<table>
		<form id="formeditatletaww" action="proeditatletaww.php" method="post">
		<tr>
			<th colspan="2" class="addatleta-tit-sec">
				<?php echo("<h2>Editar Atleta</h2>"); ?>
			</th>
		</tr>
		<tr>
			
			<td>
				<label for="nombreatleta">N° de Competidor:<sup>*</sup></label>
			</td>
			<td>
				<?php
					if (!isset($_SESSION['rec2EditAtID'])) {
						echo("<input type=\"number\" min=\"0\" max=\"9999\" id=\"id2editAtleta\" name=\"idAtletaEdit\">");
					}else{
						
						echo("<input type=\"number\" min=\"0\" max=\"9999\" value=\"");
echo($_SESSION['rec2EditAtID']);echo("\" readonly id=\"id2editAtleta\" name=\"idAtletaEdit\">");

					}
				?>
				
			</td>
			
		</tr>
		<tr>
			<td>
				<label for="nombreatleta">Nombre Corregido:<sup>*</sup></label>
			</td>
			<td>
				
				<?php
					if (!isset($_SESSION['rec2EditAtID'])) {
						echo("<input id=\"nombreatletaeditww\" disabled=\"true\" type=\"text\" name=\"nombreatleta\" placeholder=\"Nombre\">");
					}else{
						
						echo("<input id=\"nombreatletaeditww\" type=\"text\" value=\"");
echo($_SESSION['rec2EditAtNom']);echo("\" name=\"nombreatleta\" placeholder=\"Nombre\">");
					}
				?>
			</td>
			
		</tr>
		<tr>
			<td>
				<label for="fchanacatleta">Fecha de Nacimiento Corregida:<sup>*</sup></label>
			</td>
			<td>
				<?php
					if (!isset($_SESSION['rec2EditAtID'])) {
						echo("<input id=\"fchanacatletaeditww\" disabled=\"true\" type=\"date\" min=\"1901-08-17\" max=\"2002-07-31\" name=\"fchanacatleta\">");
					}else{
						
						echo("<input id=\"fchanacatletaeditww\" type=\"date\" min=\"1901-08-17\" max=\"2002-07-31\" value=\"");
echo($_SESSION['rec2EditAtFcha']);echo("\" name=\"fchanacatleta\">");
					}
				?>
				
			</td>
		</tr>
		<tr>
			<td>
				<label for="nacionalidad">Nacionalidad Corregida:<sup>*</sup></label>
			</td>
			<td>

				
				<?php
					if (!isset($_SESSION['rec2EditAtID'])) {
						echo("
							<select name=\"nacionalidad\" disabled=\"true\">
								<option>Alemania</option>
								<option>Paises Bajos</option>
								<option>Suecia</option>
							</select>");
					}else{
						echo("<select name=\"nacionalidad\">");
						$nacion = $_SESSION['rec2EditAtNac'];
						
						if ($nacion=="Alemania") {
							echo("<option selected=\"true\">Alemania</option>
								<option>Paises Bajos</option>
								<option>Suecia</option>");
						}else if ($nacion=="Paises Bajos") {
							echo("<option>Alemania</option>
								<option selected=\"true\">Paises Bajos</option>
								<option>Suecia</option>");
						}else{
							echo("<option>Alemania</option>
								<option>Paises Bajos</option>
								<option selected=\"true\">Suecia</option>");
						}
						

							
					}
				?>
			</td>
		</tr>

		<tr>
			<td>
				
				<label for="disciplina">Disciplina Corregida:<sup>*</sup></label>
			</td>
			<td>
				<?php
					if (!isset($_SESSION['rec2EditAtID'])) {
						echo("<select name=\"disciplina\" disabled=\"true\">");
						
							for ($i=0; $i < count($listaDeDisID88); $i++) { 
									echo"<option>ID: $listaDeDisID88[$i] - $listaDeDisNom88[$i]</option>";
							}
							
						echo("</select>");
					}else{
						$disciplina88 = $_SESSION['rec2EditDisNom'];
						

						echo("<select name=\"disciplina\">");
						
							for ($i=0; $i < count($listaDeDisID88); $i++) { 
								if ($disciplina88==$listaDeDisNom88[$i]) {
									echo"<option selected=\"true\">ID: $listaDeDisID88[$i] - $listaDeDisNom88[$i]</option>";
									
									
							
								}else{
									
									echo"<option>ID: $listaDeDisID88[$i] - $listaDeDisNom88[$i]</option>";
								}
									
							}
								
							
						echo("</select>");
					}
				?>
				
			</td>
		</tr>
		<tr>
			<td style="text-align: right;">
				<?php
					if (!isset($_SESSION['rec2EditAtID'])) {
						
						echo("<input type=\"button\" onclick=\"selectIDtoEdit();\" name=\"btnSel2EditAtleta\" id=\"btnSel2EditAtleta\"  value=\"Seleccionar\">");
						echo("<input type=\"button\" disabled=\"true\" onclick=\"editAtletaww();\" name=\"btnAddAtleta\" id=\"btnAddAtleta\" value=\"Enviar\">");
						
					}else{
						
						echo("
						<input type=\"button\" onclick=\"editAtletaww();\" name=\"btnAddAtleta\" id=\"btnAddAtleta\" value=\"Enviar\">");
						echo("<input type=\"button\" disabled=\"true\" onclick=\"selectIDtoEdit();\" name=\"btnSel2EditAtleta\" id=\"btnSel2EditAtleta\" value=\"Seleccionar\">");
					}
				?>
				

			</td>
			<td>
				<?php
				if (!isset($_SESSION['rec2EditAtID'])) {
					
					echo("<input type=\"button\"  disabled=\"true\" onclick=\"unselectEditAtleta();\" name=\"btnUnSelEditAtleta\" id=\"btnUnSelEditAtleta\" value=\"Quitar Selección\">");
				}else{
					
					echo("<input type=\"button\" onclick=\"unselectEditAtleta();\" name=\"btnUnSelEditAtleta\" id=\"btnUnSelEditAtleta\" value=\"Quitar Selección\">");
					unset($_SESSION['rec2EditAtID']);
				}
				?>
			</td>

		</tr>
		
		
		</form>		
	</table>
	
</div>
	
