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
	$listaDeId = array();
	$listaDeDisc = array();
	while ($row = mysqli_fetch_array($resultado)) {
		array_push($listaDeId, $row["idDisciplina"]);
		array_push($listaDeDisc, $row["NombreDisciplina"]);
	}
mysqli_close($conn);
}
?>
<div class="editatleta" id="editdisciplina">

		<h2>
			
		</h2>
		<table>
			<form id="formeditatleta" action="proeditdisciplina.php" method="post">
			<tr>
				<th colspan="2" class="addatleta-tit-sec"><h2>Editar Disciplina</h2></th>
			</tr>
			
			<tr>
				<td>
					<span>ID de Disciplina: </span>
				</td>
				<td>
					<select name="idDisciplinaAlterada">

						<?php
							for ($i=0; $i < count($listaDeId); $i++) { 
								echo"<option name='optElegida'>ID: $listaDeId[$i] - $listaDeDisc[$i]</option>";
							}

						?>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for="nombreDisciplinaAlterada">Nuevo Nombre:&nbsp;</label>
				</td>
				<td>
					<input type="text" id="nombreDisciplinaAlterada" placeholder="Nuevo Nombre" name="nombreDisciplinaAlterada">
					
				</td>
			<tr>
				<td style="text-align: right;">
					<input type="button" value="Enviar" onclick="checkAlterarDisciplina();" name="btnEnviarAlterarDisciplina">
				</td>
				<td>
					<input type="reset" name="reseteo" value="Cancelar">
				</td>
			</tr>
			
			</form>		
		</table>
		
		
	

	</div>