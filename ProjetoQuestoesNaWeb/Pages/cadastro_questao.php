<?php include('Utils/conexao.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="icon.png">
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<title>Cadastrar Questão - Questões na Web</title>
	<?php
		include('menu.php')
	?>
</head>
<body class="bg">
	<div class="border_questao">
		<div class="container_quest center">
			<form method="POST" action="Pages/salvar_questao.php">
				<h2>Matéria:</h2> 
				<select name="select_materia">
						<option>Nome da Matéria</option>
						<?php 
							$result_materias = "SELECT * FROM materias";
							$resultado_materias = mysqli_query($conn, $result_materias);
							while ($row_materias = mysqli_fetch_assoc($resultado_materias)){?>
								<option value="<?php echo $row_materias['materia']; ?>"><?php echo $row_materias['materia'];?>
									
								</option><?php
							}
						?>
					</select>
				<h2>Assunto:</h2> 
				<select name="select_assunto">
						<option>Nome do Assunto</option>
						<?php 
							$result_assuntos = "SELECT * FROM assuntos";
							$resultado_assuntos = mysqli_query($conn, $result_assuntos);
							while ($row_assuntos = mysqli_fetch_assoc($resultado_assuntos)){?>
								<option value="<?php echo $row_assuntos['assunto']; ?>"><?php echo $row_assuntos['assunto'];?>
									
								</option><?php
							}
						?>
					</select>
				<h2>Dificuldade:</h2> 
				<select name="select_dificuldade">
						<option>Dificuldade da Questão</option>
						<?php 
							$result_dificuldade = "SELECT * FROM dificuldade";
							$resultado_dificuldade = mysqli_query($conn, $result_dificuldade);
							while ($row_dificuldade = mysqli_fetch_assoc($resultado_dificuldade)){?>
								<option value="<?php echo $row_dificuldade['nivel']; ?>"><?php echo $row_dificuldade['nivel'];?>
									
								</option><?php
							}
						?>
					</select>
				<h2>Gabarito:</h2> <input type="text" name="gabarito" placeholder="Gabarito da questão" required>
				<h2>Questão:</h2><textarea class="t_quest" name="questao" placeholder="Digite aqui o conteúdo da questão"></textarea>
				<input type="submit" value ="Salvar Questão">
			</form>
			</form>
		</div>
	</div>
</body>
</html>