<?php
	include_once('conexao.php');
	$assunto = $_POST['select_assunto'];
	$materia = $_POST['select_materia'];
	$serie = $_POST['select_serie'];
	$gabarito = $_POST['gabarito'];
	$questao = $_POST['questao'];


	$add = "INSERT INTO questoes(assunto, materia, serie, gabarito, questao, data) VALUES ('$assunto','$materia','$serie','$gabarito','$questao', NOW())";

	$salvar_no_banco = mysqli_query($conn, $add)
?>
