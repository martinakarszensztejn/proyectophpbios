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
	$idSelected = $_POST['idDisciplinaAlterada'];
	$idSel = substr("$idSelected", 4,2);
	echo "$idSel";
	$ingresoUsuario = utf8_decode($_POST['nombreDisciplinaAlterada']);
	$iUencoded = utf8_encode($ingresoUsuario);
	echo "$iUencoded";
	$sqlsent = "UPDATE `proyectophpbios`.`disciplina` SET `NombreDisciplina` = '$iUencoded' WHERE (`idDisciplina` = $idSel);";
	echo "<br>$sqlsent<br>";
	$infosql = mysqli_query($conn,$sqlsent);
	if($infosql == true){
	header("Location:disciplinas.php");

	}else{
		echo "pete";
	}
mysqli_close($conn);
}
?>