<?php
	include_once("conexao.php");
	$materia = $_POST['materia'];

	$salva_materia = "INSERT INTO materias(materia) VALUES ('$materia')";

	$svm = mysqli_query($conn,$salva_materia)




?>