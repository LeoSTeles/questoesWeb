<?php
	include('../Utils/conexao.php');

	$materia = $_POST['materia'];

	$salva_materia = "INSERT INTO materias(id,nome_materia) VALUES (NULL,'$materia')";

	$svm = mysqli_query($conn,$salva_materia);

	

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/Pages/cadastro_materia.php'>
			<script type=\"text/javascript\">
				alert(\"A matéria foi cadastrada com Sucesso.\");
			</script>";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/Pages/cadastro_materia.php'>
			<script type=\"text/javascript\">
				alert(\"A matéria não foi cadastrada com Sucesso.\");
			</script>";	
	}
?>	