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
	$addDisciplinaNombre = utf8_decode($_POST['nombredisciplina']);
	$adn = utf8_encode($addDisciplinaNombre);
	$sqlsent = "INSERT INTO `proyectophpbios`.`disciplina` (`NombreDisciplina`) VALUES ('$adn');";
	$infosql = mysqli_query($conn,$sqlsent);
	if($infosql == true){
	header("Location:disciplinas.php");

	}else{
		die("No se pudo realizar la operación. $infosql");
	}
mysqli_close($conn);
}
?>