<?php
	include('../Utils/conexao.php');

	$materia = $_POST['select_materia'];
	$assunto = $_POST['select_assunto'];
	$dificuldade = $_POST['select_dificuldade'];
	$gabarito = $_POST['gabarito'];
	$questao = $_POST['questao'];


	$add = "INSERT INTO questoes(id, materia, assunto, dificuldade, gabarito, questao) VALUES (NULL,'$materia','$assunto','$dificuldade','$gabarito','$questao')";

	$salvar_no_banco = mysqli_query($conn, $add);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/Pages_l/cadastro_questao_l.php''>
			<script type=\"text/javascript\">
				alert(\"Questão salva com Sucesso.\");
			</script>";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/Pages_l/cadastro_questao_l.php''>
				alert(\"Não foi possível salvar a questão.\");
			</script>";	
	}
?>
