
<div id="consultaAtletasContainer" class="consultaAtletasContainer">
	<h2 class="ctaDisTit">atletas</h2>
	<img src="images/consulta/hamburguesa.png" id="iconConsulta" onclick="showFiltroBox()" class="iconConsulta">
	<?php
					
		$servername = 'localhost';
		$username = 'root';
		$password = 'password';
		$dbname = 'proyectophpbios';
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if (!$conn) {
			die('No se pudo conectar al servidor.');
		}
		else{
			$sqlsentencia = "SELECT NombreDisciplina FROM proyectophpbios.disciplina ORDER BY NombreDisciplina ASC;";
			$resultado = mysqli_query($conn,$sqlsentencia);
			$listaDeDisciplinasOrdenada = array();
			while ($row = mysqli_fetch_array($resultado)) {
				
				array_push($listaDeDisciplinasOrdenada, $row["NombreDisciplina"]);

			}
			if (isset($_GET['verAtletas'])) {
				if ($_GET['verAtletas']==1) {
				?>
					<script type="text/javascript">
						
						showConsulta(1);
								
					</script>
				<?php
				}
			}
			
		}
		?>
	<div class="filtrosBox" id="filtrosBox">
		<form method="GET" action="profiltrar.php" id="formFiltros" class="formFiltros">
			<table>
				
				<tr>
					<td><label for="checkNac">Nacionalidad:</label></td>
					<td><input type="checkbox" onclick="activateInput()" name="checkNac" value="checkNac" id="checkNac"></td>
					<td><select name="nacionalidadFiltro" id="nacionalidadFiltro" disabled="true">
						<option>Alemania</option>
						<option>Paises Bajos</option>
						<option>Suecia</option>
					</select></td>
				</tr>
				<tr>
					<td><label for="checkDis">Disciplina:</label></td>
					<td><input type="checkbox" onclick="activateInput()" name="checkDis" value="checkDis" id="checkDis"></td>
					<td><select name="disciplinaFiltro" id="disciplinaFiltro" disabled="true">
						<?php 
							for ($i=0; $i < count($listaDeDisciplinasOrdenada); $i++) { 
								echo("<option>$listaDeDisciplinasOrdenada[$i]</option>");
							}
						?>
					</select></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="enviarFiltros" value="Enviar" id="enviarFiltros">
						<input type="button" onclick="cleanFiltros()" name="limpiarFiltros" value="Limpiar" id="limpiarFiltros"></td>
					
				</tr>
			</table>
		</form>
	</div>
	<div class="boxTableDis">
		<table class="ctaDisTable">
			
			<tr>
				<th class="celdaimpar">N° Competidor <img onclick="ordenar(1)" src="images/consulta/arrow.png" id="arrowID" class="flechaOrdenar"></th>

				<th class="celdaimpar">Nombre <img onclick="ordenar(2)" src="images/consulta/arrowup.png" id="arrowNom" class="flechaOrdenar"></th>

				<th class="celdaimpar">Edad <img onclick="ordenar(3)" src="images/consulta/arrowup.png" id="arrowEdad" class="flechaOrdenar"></th>

				<th class="celdaimpar">Nacionalidad <img onclick="ordenar(4)" src="images/consulta/arrowup.png" id="arrowNac" class="flechaOrdenar"></th>

				<th class="celdaimpar">Disciplina <img onclick="ordenar(5)" src="images/consulta/arrowup.png" id="arrowDis" class="flechaOrdenar"></th>

			</tr>
			<?php
					
				$servername = 'localhost';
				$username = 'root';
				$password = 'password';
				$dbname = 'proyectophpbios';
				$conn = mysqli_connect($servername,$username,$password,$dbname);
				if (!$conn) {
					die('No se pudo conectar al servidor.');
				}
				else{
					if (!isset($_SESSION['filtrado'])) {
						$_SESSION['filtrado']=0;
					
					}
					if ($_SESSION['filtrado']==1) {
						?>
							<script type="text/javascript">
							
								showConsulta(1);
								
							</script>
						<?php
						$listaDeAtIDSession = $_SESSION['filR1AtID'];
						$listaDeAtNomSession = $_SESSION['filR2AtNom'];
						$listaDeAtNacSession = $_SESSION['filR3AtNac'];
						$edadactualSession = $_SESSION['filR4AtEdad'];
						$listaDeDisNomSession = $_SESSION['filR5DisNom'];
						
						for ($i=0; $i < count($listaDeAtIDSession); $i++) { 	
							if ($i%2==1) {
								echo("
									<tr>
									<td class=\"celdaimpar\">$listaDeAtIDSession[$i]</td>
									<td class=\"celdaimpar\">$listaDeAtNomSession[$i]</td>
									<td class=\"celdaimpar\">$edadactualSession[$i]</td>
									<td class=\"celdaimpar\">$listaDeAtNacSession[$i]</td>
									<td class=\"celdaimpar\">$listaDeDisNomSession[$i]</td>
									</tr>



								");
							}else{
								echo("
									<tr>
									<td class=\"celdapar\">$listaDeAtIDSession[$i]</td>
									<td class=\"celdapar\">$listaDeAtNomSession[$i]</td>
									<td class=\"celdapar\">$edadactualSession[$i]</td>
									<td class=\"celdapar\">$listaDeAtNacSession[$i]</td>
									<td class=\"celdapar\">$listaDeDisNomSession[$i]</td>
									</tr>



								");
							}
						}
						$_SESSION['filtrado']=0;
					}else{
					
						$sqlsent2 = "SELECT * FROM proyectophpbios.atleta ORDER BY idAtleta; ";
						if (isset($_GET['or'])) {
							
						
							if ($_GET['or']==1) {
								?>
								<script type="text/javascript">
									showArrowDown();
									showConsulta(1);
									
								</script>
								<?php

								$sqlsent2 = "SELECT * FROM proyectophpbios.atleta ORDER BY idAtleta; ";

							}else if ($_GET['or']==2) {
								?>
								<script type="text/javascript">
									showArrowDown();
									showConsulta(1);
									
								</script>
								<?php
								$sqlsent2 = "SELECT * FROM proyectophpbios.atleta ORDER BY NombreAtleta; ";
							}else if ($_GET['or']==3) {
								?>
								<script type="text/javascript">
									showArrowDown();
									showConsulta(1);
									
								</script>
								<?php
								$sqlsent2 = "SELECT * FROM proyectophpbios.atleta ORDER BY FechaNacAtleta DESC ; ";
							}else if ($_GET['or']==4) {
								?>
								<script type="text/javascript">
									showArrowDown();
									showConsulta(1);
									
								</script>
								<?php
								$sqlsent2 = "SELECT * FROM proyectophpbios.atleta ORDER BY OrigenAtleta; ";
							}else if ($_GET['or']==5) {

								?>
								<script type="text/javascript">
									showArrowDown();
									showConsulta(1);
									
								</script>
								<?php
								$sqlsent2 = "SELECT atleta.*, disciplina.NombreDisciplina FROM atleta INNER JOIN disciplina ON atleta.idDisciplina=disciplina.idDisciplina ORDER BY disciplina.NombreDisciplina;";
							}
						}
							


							
							$resultado2 = mysqli_query($conn,$sqlsent2);
							$listaDeAtID = array();
							$listaDeAtNom = array();
							$listaDeAtFcha = array();
							$listaDeAtNac = array();
							$listaDeAtIDDis = array();
							$edadactual = array();
							while ($row2 = mysqli_fetch_array($resultado2)) {
								
								array_push($listaDeAtID, $row2["idAtleta"]);
								array_push($listaDeAtNom, $row2["NombreAtleta"]);
								array_push($listaDeAtFcha, $row2["FechaNacAtleta"]);
								array_push($listaDeAtNac, $row2["OrigenAtleta"]);
								array_push($listaDeAtIDDis, $row2["idDisciplina"]);
							}

							for ($i=0; $i < count($listaDeAtID); $i++) { 
							$sqlsentdia = "select DATEDIFF(CURDATE(),'$listaDeAtFcha[$i]' ) / 365.25 as edadactual;";
							$resultadodia = mysqli_query($conn,$sqlsentdia);
							
							
								while ($row = mysqli_fetch_array($resultadodia)) {
									array_push($edadactual, floor($row["edadactual"]));
								}
							}
							$listaDeDiscPorAtleta = array();
							for ($i=0; $i < count($listaDeAtID); $i++) { 
								$sqlsentdna = "SELECT NombreDisciplina FROM proyectophpbios.disciplina WHERE idDisciplina = $listaDeAtIDDis[$i]; ";
								$resultadodna = mysqli_query($conn,$sqlsentdna);
								
								while ($row = mysqli_fetch_array($resultadodna)) {
									array_push($listaDeDiscPorAtleta, $row["NombreDisciplina"]);
									
								}
							}
							for ($i=0; $i < count($listaDeAtID); $i++) { 	
								if ($i%2==1) {
									echo("
											<tr>
											<td class=\"celdaimpar\">$listaDeAtID[$i]</td>
											<td class=\"celdaimpar\">$listaDeAtNom[$i]</td>
											<td class=\"celdaimpar\">$edadactual[$i]</td>
											<td class=\"celdaimpar\">$listaDeAtNac[$i]</td>
											<td class=\"celdaimpar\">$listaDeDiscPorAtleta[$i]</td>
											</tr>



										");
								}else{
									echo("
											<tr>
											<td class=\"celdapar\">$listaDeAtID[$i]</td>
											<td class=\"celdapar\">$listaDeAtNom[$i]</td>
											<td class=\"celdapar\">$edadactual[$i]</td>
											<td class=\"celdapar\">$listaDeAtNac[$i]</td>
											<td class=\"celdapar\">$listaDeDiscPorAtleta[$i]</td>
											</tr>



										");
								}
							}
							
						}

						mysqli_close($conn);
				}

				
			?>

		</table>
	</div>
</div>
