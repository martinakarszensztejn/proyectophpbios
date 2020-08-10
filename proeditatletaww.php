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

	$editAtletaID = $_POST['idAtletaEdit'];
	$editAtletaNombre = utf8_decode($_POST['nombreatleta']);
	$editAtletaNomEncoded = utf8_encode($editAtletaNombre);
	$editAtletaFecha = $_POST['fchanacatleta'];
	
	$editAtletaNacion = $_POST['nacionalidad'];
	
	$editAtletaDisciplina = utf8_decode($_POST['disciplina']);

	
	$idSel = substr("$editAtletaDisciplina", 4,2);
	
	$sqlsent = "UPDATE `proyectophpbios`.`atleta` SET `NombreAtleta` = '$editAtletaNomEncoded', `FechaNacAtleta` = '$editAtletaFecha', `OrigenAtleta` = '$editAtletaNacion', `idDisciplina` = '$idSel' WHERE (`idAtleta` = '$editAtletaID');";
	echo "$sqlsent";
	$infosql = mysqli_query($conn,$sqlsent);
	if($infosql == true){
	header("Location:atletas.php");

	}
mysqli_close($conn);
}
?>