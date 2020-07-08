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

	$addAtletaNombre = utf8_decode($_POST['nombreatleta']);
	
	$aanom = utf8_encode($addAtletaNombre);
	echo "$aanom";
	$addAtletaFecha = $_POST['fchanacatleta'];
	echo "$addAtletaFecha";
	$addAtletaNacion = $_POST['nacionalidad'];
	echo "$addAtletaNacion";
	$addAtletaDisciplina = utf8_decode($_POST['disciplina']);
	echo "$addAtletaDisciplina";

	$idSel = substr("$addAtletaDisciplina", 4,2);
	echo "$idSel";
	$sqlsent = "INSERT INTO `proyectophpbios`.`atleta` (`NombreAtleta`, `FechaNacAtleta`, `OrigenAtleta`, `idDisciplina`) VALUES ('$aanom', '$addAtletaFecha', '$addAtletaNacion', '$idSel');";
	echo "$sqlsent";
	$infosql = mysqli_query($conn,$sqlsent);
	if($infosql == true){
	header("Location:atletas.php");

	}else{
		echo "q triste mibrodel";
	}
mysqli_close($conn);
}
?>