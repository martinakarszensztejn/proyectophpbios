<div class="addatleta" id="addatleta">
	
	<table>
		<form id="formaddatleta" action="proaddatleta_b.php" method="post">
		<tr>
			<th colspan="2" class="addatleta-tit-sec"><h2>Agregar Atleta</h2></th>
		</tr>
		<tr>
			<td>
				<label for="nombreatleta">Nombre:<sup>*</sup></label>
			</td>
			<td>
				<input id="nombreatletaadd" type="text" name="nombreatleta" placeholder="Nombre">
			</td>
			
		</tr>
		<tr>
			<td>
				<label for="fchanacatleta">Fecha de Nacimiento:<sup>*</sup></label>
			</td>
			<td>
				<input id="fchanacatletaadd" type="date" min="1901-08-17" max="2002-07-31" name="fchanacatleta" placeholder="Nombre">
			</td>
		</tr>
		<tr>
			<td>
				<label for="nacionalidad">Nacionalidad:<sup>*</sup></label>
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
				
				<label for="disciplina">Disciplina:<sup>*</sup></label>
			</td>
			<td>

				<select name="disciplina">
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
						$resultado = mysqli_query($conn,$sqlsent);
						$listaDeDiscNom = array();
						$listaDeDiscID = array();
						while ($row = mysqli_fetch_array($resultado)) {
							array_push($listaDeDiscNom, $row["NombreDisciplina"]);
							array_push($listaDeDiscID, $row["idDisciplina"]);
						}
						for ($i=0; $i < count($listaDeDiscID); $i++) { 
							echo"<option>ID: $listaDeDiscID[$i] - $listaDeDiscNom[$i]</option>";
						}

						



						mysqli_close($conn);
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td style="text-align: right;">
				<input type="button" onclick="addAtletas();" name="btnAddAtleta" id="btnAddAtleta" value="Enviar">
			</td>
			<td>
				<input type="reset" name="reseteo" value="Cancelar">
			</td>
		</tr>
		
		</form>		
	</table>
	
</div>
	
