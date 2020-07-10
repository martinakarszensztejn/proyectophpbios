
<div id="consultaAtletasContainer" class="consultaAtletasContainer">
	<table class="ctaDisTable">
		<h2 class="ctaDisTit">atletas</h2>
		<tr>
			<th class="celdaimpar">N° Competidor</th>
			<th class="celdaimpar">Nombre</th>
			<th class="celdaimpar">Edad</th>
			<th class="celdaimpar">Nacionalidad</th>
			<th class="celdaimpar">Disciplina</th>
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
				
				
				


				$sqlsent2 = "SELECT * FROM proyectophpbios.atleta ORDER BY idAtleta; ";
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
								<th class=\"celdaimpar\">$listaDeAtID[$i]</th>
								<th class=\"celdaimpar\">$listaDeAtNom[$i]</th>
								<th class=\"celdaimpar\">$edadactual[$i]</th>
								<th class=\"celdaimpar\">$listaDeAtNac[$i]</th>
								<th class=\"celdaimpar\">$listaDeDiscPorAtleta[$i]</th>
								</tr>



							");
					}else{
						echo("
								<tr>
								<th class=\"celdapar\">$listaDeAtID[$i]</th>
								<th class=\"celdapar\">$listaDeAtNom[$i]</th>
								<th class=\"celdapar\">$edadactual[$i]</th>
								<th class=\"celdapar\">$listaDeAtNac[$i]</th>
								<th class=\"celdapar\">$listaDeDiscPorAtleta[$i]</th>
								</tr>



							");
					}
				}
					
				}

				mysqli_close($conn);
			
		?>

	</table>
</div>
