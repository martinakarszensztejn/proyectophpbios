<div class="delatleta" id="delatleta">
	
	<table>
		<form id="formdelatleta" action="prodelatleta.php" method="post">
		<tr>
			<th colspan="2" class="addatleta-tit-sec"><h2>Borrar Atleta</h2></th>
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
				<label for="nombreatleta">Competidor:<sup>*</sup></label>
			</td>
			<td>

				<select name="delAtletaSelectField" size="5" class="delAtletaSelect">
					
					<?php
						for ($i=0; $i < count($listaDeAtletasID); $i++) { 
							echo("<option>ID: $listaDeAtletasID[$i] - $listaDeAtletasNom[$i]</option>");
						}
					?>
				
				</select>
			</td>
			
		</tr>
		
		<tr>
			<td colspan="2" style="text-align: right;">
				<input type="submit" name="btnDelAtleta" id="btnDelAtleta" value="Enviar">
			</td>
			
		</tr>
		
		</form>		
	</table>
	
</div>
	
