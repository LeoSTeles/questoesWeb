<?php include('../Utils/conexao.php');

	$materia = $_POST['select_materia'];
	$assunto = $_POST['select_assunto'];
	$dificuldade = $_POST['select_dificuldade'];
	$num = $_POST['n_questoes'];


	$sql = "SELECT questao, gabarito FROM questoes where assunto = '$assunto' and materia = '$materia' and dificuldade = '$dificuldade' order by rand()";

	$query = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($query);
	$fp = fopen("Prova.txt", "w");
	$fq = fopen("Gabarito da Prova.txt", "w");

	for($i=0;$i < $num; $i++){
		if($row > 0){
		while ($linha = mysqli_fetch_array($query)){
			$questao = $linha['questao'];
			$gabarito = $linha['gabarito'];

			fwrite($fp, "Questão: ".($i+1)."\r\n"."\r\n". $questao. "\r\n"."\r\n"."------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------"."\r\n"."\r\n");
			fwrite($fq, "Gabarito: ".($i+1)."\r\n"."\r\n". $gabarito. "\r\n"."\r\n"."------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------"."\r\n"."\r\n");
			break;
		}
	}
	}

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/Pages/gerar_prova.php'>
			<script type=\"text/javascript\">
				alert(\"Prova salva com Sucesso.\");
			</script>";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/Pages/gerar_prova.php'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível salvar a prova.\");
			</script>";	
	}
?>
