<?php include('Utils/conexao.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="icon.png">
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<title>Gerar Prova - Questões na Web</title>
	<?php
		include('menu.php')
	?>
</head>
<body class="bg">
	<div class="border">
		<div class="container centro">
			<form method="POST" action="Pages/prova.php">
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
			<h2>Questões:</h2> <input type="text" name="n_questoes" placeholder="Número de questoes" required>
			<input type="submit" value ="Gerar Prova">
		</form>
		</div>
	</div>
</body>
</html>
