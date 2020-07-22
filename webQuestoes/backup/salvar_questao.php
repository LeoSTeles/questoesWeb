<?php
	include_once("conexao.php");
	$assunto = $_POST['select_assunto'];
	$materia = $_POST['select_materia'];
	$serie = $_POST['select_serie'];
	$gabarito = $_POST['gabarito'];
	$questao = $_POST['questao'];
	
	
	$result_questao = "INSERT INTO questoes(assunto, materia, serie, gabarito, questao, data) VALUES ('$assunto','$materia', '$serie', '$gabarito', '$questao', NOW())";
	$resultado_usuario = mysqli_query($conn, $result_questao);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>
