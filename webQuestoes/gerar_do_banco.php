<?php include("conexao.php");

	$assunto = $_POST['select_assunto'];
	$materia = $_POST['select_materia'];
	$serie = $_POST['select_serie'];
	$sql = "SELECT questao FROM questoes where assunto = '$assunto' and materia = '$materia' order by rand()";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($query);
	$fp = fopen("Questão.txt", "w");

	if($row > 0){
		while ($linha = mysqli_fetch_array($query)){
			$questao = $linha['questao'];
			$gabarito = $linha['gabarito'];
			fwrite($fp, "Questão: \r\n"."\r\n". $questao);
			break;
		}
	}
	else {
		echo "Desculpe, ainda não existem valores que retornem o que selecionou";
	}
		if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/webQuestoes/cadastro_questao.php'>
			<script type=\"text/javascript\">
				alert(\"Questão salva com Sucesso.\");
			</script>";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/webQuestoes/cadastro_questao.php'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível salvar a questão.\");
			</script>";	
	}
?>
