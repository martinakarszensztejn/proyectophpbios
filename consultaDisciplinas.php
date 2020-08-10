<div class="consultaDisciplinasContainer" id="consultaDisciplinasContainer">
	<h2 class="ctaDisTit">disciplinas</h2>
	
	


	<div class="boxTableDis">
		<table class="ctaDisTable">
			
			
			<tr>
				<th class="celdaimpar">Identificador <img onclick="ordenarDis(1)" src="images/consulta/arrow.png" id="arrowDisID" class="flechaOrdenar"></th>
				<th class="celdaimpar">Nombre <img onclick="ordenarDis(2)" src="images/consulta/arrowup.png" id="arrowDisNom" class="flechaOrdenar"></th>
			</tr>
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
					$sqlsent = "SELECT * FROM proyectophpbios.disciplina ORDER BY idDisciplina; ";
					if (isset($_GET['ddmarta'])) {
						if ($_GET['ddmarta']==1) {
						?>
						<script type="text/javascript">
							showArrowDown();
							showConsulta(2);
							
						</script>
						<?php

						$sqlsent = "SELECT * FROM proyectophpbios.disciplina ORDER BY idDisciplina; ";

					}else if ($_GET['ddmarta']==2) {
						?>
						<script type="text/javascript">
							showArrowDown();
							showConsulta(2);
							
						</script>
						<?php
						$sqlsent = "SELECT * FROM proyectophpbios.disciplina ORDER BY NombreDisciplina;";
					}
					}
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
</div>
