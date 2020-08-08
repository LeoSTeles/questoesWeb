<?php
	include('../Utils/conexao.php');
	$assunto = $_POST['assunto'];
	$materia = $_POST['select_materia'];

	$salva_assunto = "INSERT INTO assuntos(id,nome_assunto,materia_id) VALUES (NULL, '$assunto', '$materia')";
	

	$sva = mysqli_query($conn,$salva_assunto);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/Pages/cadastro_assunto.php'>
			<script type=\"text/javascript\">
				alert(\"Assunto cadastrado com Sucesso.\");
			</script>";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/Pages/cadastro_assunto.php'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível cadastrar o assunto.\");
			</script>";	
	}




?>