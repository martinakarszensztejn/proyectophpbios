<?php

session_start();

$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'proyectophpbios';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
	die('No se pudo conectar al servidor.');
}
else{

	
	$checkNac = "vacio";
	$checkDis = "vacio";

	$nacionalidadFiltro = "vacio";
	$disciplinaFiltro = "vacio";
	$cantFiltros = 0;
	$sqlsent = "";

	
	if (isset($_GET['checkNac'])){
		$checkNac = $_GET['checkNac'];
		$nacionalidadFiltro = $_GET['nacionalidadFiltro'];
		if ($cantFiltros==0) {
			$sqlsent = "SELECT * FROM proyectophpbios.atleta INNER JOIN disciplina ON atleta.idDisciplina=disciplina.idDisciplina WHERE  atleta.OrigenAtleta = \"$nacionalidadFiltro\"";
		}else{

		}
		$cantFiltros++;

	}
	if (isset($_GET['checkDis'])){
		$checkDis = $_GET['checkDis'];
		$disciplinaFiltro = $_GET['disciplinaFiltro'];
		
		if ($cantFiltros==0) {
			$sqlsent = "SELECT * FROM proyectophpbios.atleta INNER JOIN disciplina ON atleta.idDisciplina=disciplina.idDisciplina WHERE disciplina.NombreDisciplina = \"$disciplinaFiltro\"";
		}else{
			$sqlsent = $sqlsent."AND disciplina.NombreDisciplina = \"$disciplinaFiltro\";";
		}
		$cantFiltros++;
		
	}else{

		$sqlsent = $sqlsent.";";
	}

	
	if ($cantFiltros>0) {
		$resultado2 = mysqli_query($conn,$sqlsent);
		$listaDeAtID = array();
		$listaDeAtNom = array();
		$listaDeAtFcha = array();
		$listaDeAtNac = array();
		$listaDeDisNom = array();
		$edadactual = array();
		while ($row2 = mysqli_fetch_array($resultado2)) {
			
			array_push($listaDeAtID, $row2["idAtleta"]);
			array_push($listaDeAtNom, $row2["NombreAtleta"]);
			array_push($listaDeAtFcha, $row2["FechaNacAtleta"]);
			array_push($listaDeAtNac, $row2["OrigenAtleta"]);
			array_push($listaDeDisNom, $row2["NombreDisciplina"]);
		}

		for ($i=0; $i < count($listaDeAtID); $i++) { 
		$sqlsentdia = "select DATEDIFF(CURDATE(),'$listaDeAtFcha[$i]' ) / 365.25 as edadactual;";
		$resultadodia = mysqli_query($conn,$sqlsentdia);
		
		
			while ($row = mysqli_fetch_array($resultadodia)) {
				array_push($edadactual, floor($row["edadactual"]));
			}
		}

		for ($i=0; $i < count($listaDeAtID); $i++) { 
			echo "$listaDeAtID[$i] - ";
		}
		 $sqlsentsinsemicolon = str_replace(";", "", $sqlsent);
		 $_SESSION['sqlsentencia2'] = $sqlsentsinsemicolon;
		
		 $_SESSION['filtrado'] = 1;
		 $_SESSION['filR1AtID'] = $listaDeAtID;
		 $_SESSION['filR2AtNom'] = $listaDeAtNom;
		 $_SESSION['filR3AtNac'] = $listaDeAtNac;
		 $_SESSION['filR4AtEdad'] = $edadactual;
		 $_SESSION['filR5DisNom'] = $listaDeDisNom;
		




		$cantFiltros=0;
	}

	

	header("Location: consultas.php");

	
mysqli_close($conn);
}
?>