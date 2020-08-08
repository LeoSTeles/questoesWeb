<?php include('../Utils/conexao.php');

	$materia = $_POST['select_materia'];
	$assunto = $_POST['select_assunto'];
	$dificuldade = $_POST['select_dificuldade'];

	$sql = "SELECT questao, gabarito FROM questoes where assunto = '$assunto' and materia = '$materia' and dificuldade = '$dificuldade' order by rand()";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($query);
	$fp = fopen("Questão.txt", "w");
	$fq = fopen("Gabarito.txt", "w");

	if($row > 0){
		while ($linha = mysqli_fetch_array($query)){
			$questao = $linha['questao'];
			$gabarito = $linha['gabarito'];
			fwrite($fp, "Questão: \r\n"."\r\n". $questao);
			fwrite($fq, "Gabarito: ". $gabarito);
			break;
		}
	}
	else {
		echo "Desculpe, ainda não existem valores que retornem o que selecionou";
	}
	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/Pages_l/gerar_questao_l.php'>
			<script type=\"text/javascript\">
				alert(\"Questão salva com Sucesso.\");
			</script>";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/Pages_l/gerar_questao_l.php'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível salvar a questão.\");
			</script>";	
	}
?>
