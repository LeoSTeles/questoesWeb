<?php include("conexao.php");

	$assunto = $_POST['select_assunto'];
	$materia = $_POST['select_materia'];
	$serie = $_POST['select_serie'];
	$sql = "SELECT questao FROM questoes where assunto = '$assunto' and materia = '$materia' order by rand()";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($query);

	if($row > 0){
		while ($linha = mysqli_fetch_array($query)){
			$questao = $linha['questao'];
			echo $questao;
			echo "<br />";
			echo "<br />";
			break;
		}
	}
	else {
		echo "Desculpe, ainda não existem valores que retornem o que selecionou";
	}
?>
