<?php
	include_once("conexao.php");
	$assunto = $_POST['assunto'];

	$salva_assunto = "INSERT INTO assuntos(assunto) VALUES ('$assunto')";

	$sva = mysqli_query($conn,$salva_assunto)




?>