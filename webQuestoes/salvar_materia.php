<?php
	include_once("conexao.php");
	$materia = $_POST['materia'];

	$salva_materia = "INSERT INTO materias(materia) VALUES ('$materia')";

	$svm = mysqli_query($conn,$salva_materia);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/webQuestoes/cadastro_materia.php'>
			<script type=\"text/javascript\">
				alert(\"A matéria foi cadastrada com Sucesso.\");
			</script>";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/webQuestoes/cadastro_materia.php'>
			<script type=\"text/javascript\">
				alert(\"A matéria não foi cadastrada com Sucesso.\");
			</script>";	
	}
?>	