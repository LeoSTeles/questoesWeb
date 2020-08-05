<?php
	include_once('Utils/conexao.php');
	$assunto = $_POST['select_assunto'];
	$materia = $_POST['select_materia'];
	$gabarito = $_POST['gabarito'];
	$questao = $_POST['questao'];


	$add = "INSERT INTO questoes(assunto, materia, serie, gabarito, questao, data) VALUES ('$assunto','$materia','$serie','$gabarito','$questao', NOW())";

	$salvar_no_banco = mysqli_query($conn, $add);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=<?php echo INCLUDE_PATH2; ?>cadastro_questao.php'>
			<script type=\"text/javascript\">
				alert(\"Questão salva com Sucesso.\");
			</script>";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=<?php echo INCLUDE_PATH2; ?>cadastro_questao.php'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível salvar a questão.\");
			</script>";	
	}
?>
