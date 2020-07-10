<div class="consultaDisciplinasContainer" id="consultaDisciplinasContainer">
	<table class="ctaDisTable">
		<h2 class="ctaDisTit">disciplinas</h2>
		<tr>
			<th class="celdaimpar">Identificador</th><th class="celdaimpar">Nombre</th>
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
				$sqlsent = "SELECT * FROM proyectophpbios.disciplina ORDER BY idDisciplina; ";
				$resultado = mysqli_query($conn,$sqlsent);
				$listaDeDiscNom = array();
				$listaDeDiscID = array();
				while ($row = mysqli_fetch_array($resultado)) {
					array_push($listaDeDiscNom, $row["NombreDisciplina"]);
					array_push($listaDeDiscID, $row["idDisciplina"]);
				}
				for ($i=0; $i < count($listaDeDiscID); $i++) { 
					if ($i%2==1) {
						echo("<tr>
								<td class=\"celdaimpar\">
									$listaDeDiscID[$i]
								</td>
								<td class=\"celdaimpar\">
									$listaDeDiscNom[$i]
								</td>
							</tr>"

						);
					}else{
						echo("<tr>
								<td  class=\"celdapar\">
									$listaDeDiscID[$i]
								</td>
								<td  class=\"celdapar\">
									$listaDeDiscNom[$i]
								</td>
							</tr>"

						);
					}
				
					
				}

				mysqli_close($conn);
			}
		?>

	</table>
</div>
