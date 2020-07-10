<div class="editatleta" id="editatleta">
	
	<table>
		<form id="formeditatletaww" action="proeditatletaww.php" method="post">
		<tr>
			<th colspan="2" class="addatleta-tit-sec"><h2>Editar Atleta</h2></th>
		</tr>
		<tr>
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
						
						$sqlsent2 = "SELECT idAtleta,NombreAtleta FROM proyectophpbios.atleta ORDER BY idAtleta; ";
						$resultado2 = mysqli_query($conn,$sqlsent2);

						$listaDeAtletasID = array();
						$listaDeAtletasNom = array();

						while ($row = mysqli_fetch_array($resultado2)) {
							array_push($listaDeAtletasID, $row["idAtleta"]);
							array_push($listaDeAtletasNom, $row["NombreAtleta"]);
							
						}

						mysqli_close($conn);
					}
					?>
			<td>
				<label for="nombreatleta">N° de Competidor:<sup>*</sup></label>
			</td>
			<td>

				<select name="idAtletaEdit" class="idAtletaEditSelect">
					<?php
						for ($i=0; $i < count($listaDeAtletasID); $i++) { 
							echo("<option>N°: $listaDeAtletasID[$i] - $listaDeAtletasNom[$i]</option>");
						}
					?>
				</select>
			</td>
			
		</tr>
		<tr>
			<td>
				<label for="nombreatleta">Nombre Corregido:<sup>*</sup></label>
			</td>
			<td>
				<input id="nombreatletaeditww" type="text" name="nombreatleta" placeholder="Nombre">
			</td>
			
		</tr>
		<tr>
			<td>
				<label for="fchanacatleta">Fecha de Nacimiento Corregida:<sup>*</sup></label>
			</td>
			<td>
				<input id="fchanacatletaeditww" type="date" min="1901-08-17" max="2002-07-31" name="fchanacatleta" placeholder="Nombre">
			</td>
		</tr>
		<tr>
			<td>
				<label for="nacionalidad">peepee Corregida:<sup>*</sup></label>
			</td>
			<td>
				<select name="nacionalidad">
					<option>Alemania</option>
					<option>Paises Bajos</option>
					<option>Suecia</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>
				
				<label for="disciplina">Disciplina Corregida:<sup>*</sup></label>
			</td>
			<td>

				<select name="disciplina">
					<?php
						for ($i=0; $i < count($listaDeDiscID); $i++) { 
								echo"<option>ID: $listaDeDiscID[$i] - $listaDeDiscNom[$i]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td style="text-align: right;">
				<input type="button" onclick="editAtletaww();" name="btnAddAtleta" id="btnAddAtleta" value="Enviar">
			</td>
			<td>
				<input type="reset" name="reseteo" value="Cancelar">
			</td>
		</tr>
		
		</form>		
	</table>
	
</div>
	
