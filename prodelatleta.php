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

	
	$delNom = utf8_decode($_POST['delAtletaSelectField']);
	echo "$delNom";
	$idSel = substr("$delNom", 4,2);
	echo "$idSel";
	$sqlsent = "DELETE FROM `proyectophpbios`.`atleta` WHERE (`idAtleta` = '$idSel');";
	$infosql = mysqli_query($conn,$sqlsent);
	if($infosql == true){
	header("Location:atletas.php");

	}
mysqli_close($conn);
}
?>