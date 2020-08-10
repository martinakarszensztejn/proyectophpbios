<?php
	session_start();	
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'proyectophpbios';
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if (!$conn) {
		die('No se pudo conectar al servidor.');
	}
	else{
		$id2edit = $_GET['id2edit'];
		$sqlsent2 = "SELECT atleta.*, disciplina.NombreDisciplina FROM atleta INNER JOIN disciplina ON atleta.idDisciplina=disciplina.idDisciplina WHERE idAtleta = $id2edit;";
		$resultado2 = mysqli_query($conn,$sqlsent2);
		$listaDeAtID = array();
		$listaDeAtNom = array();
		$listaDeAtFcha = array();
		$listaDeAtNac = array();
		$listaDeDisNom = array();
	
		while ($row2 = mysqli_fetch_array($resultado2)) {
			
			array_push($listaDeAtID, $row2["idAtleta"]);
			array_push($listaDeAtNom, $row2["NombreAtleta"]);
			array_push($listaDeAtFcha, $row2["FechaNacAtleta"]);
			array_push($listaDeAtNac, $row2["OrigenAtleta"]);
			array_push($listaDeDisNom, $row2["NombreDisciplina"]);
		}
		if (count($listaDeAtID)!=0) {
			$_SESSION['rec2EditAtID'] = $listaDeAtID[0];
			$_SESSION['rec2EditAtNom'] = $listaDeAtNom[0];
			$_SESSION['rec2EditAtFcha'] = $listaDeAtFcha[0];
			$_SESSION['rec2EditAtNac'] = $listaDeAtNac[0];
			$_SESSION['rec2EditDisNom'] = $listaDeDisNom[0];
			$_SESSION['erMess']=0;
		}else{
			$_SESSION['erMess']=1;
		}
	

		header("Location:atletas.php");
		
	}
	mysqli_close($conn);
?>