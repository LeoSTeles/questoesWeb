<?php
	include_once("conexao.php");
	$assunto = $_POST['assunto'];

	$salva_assunto = "INSERT INTO assuntos(assunto) VALUES ('$assunto')";

	$sva = mysqli_query($conn,$salva_assunto);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/webQuestoes/cadastro_assunto.php'>
			<script type=\"text/javascript\">
				alert(\"Assunto cadastrado com Sucesso.\");
			</script>";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/webQuestoes/cadastro_assunto.php'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível cadastrar o assunto.\");
			</script>";	
	}




?>