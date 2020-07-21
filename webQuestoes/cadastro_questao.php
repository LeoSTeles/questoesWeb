<?php include("conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo_pags.css">
</head>
<body>
	<main>
	<div class="questoes">
	<form method="POST" action="salvar_questao.php">
	Assunto: 
	<select name="select_assunto">
			<option>Selecione</option>
			<?php 
				$result_assuntos = "SELECT * FROM assuntos";
				$resultado_assuntos = mysqli_query($conn, $result_assuntos);
				while ($row_assuntos = mysqli_fetch_assoc($resultado_assuntos)){?>
					<option value="<?php echo $row_assuntos['assunto']; ?>"><?php echo $row_assuntos['assunto'];?>
						
					</option><?php
				}
			?>
		</select><br></br>
	Matéria: 
	<select name="select_materia">
			<option>Selecione</option>
			<?php 
				$result_materias = "SELECT * FROM materias";
				$resultado_materias = mysqli_query($conn, $result_materias);
				while ($row_materias = mysqli_fetch_assoc($resultado_materias)){?>
					<option value="<?php echo $row_materias['materia']; ?>"><?php echo $row_materias['materia'];?>
						
					</option><?php
				}
			?>
		</select><br></br>
	Série: 
	<select name="select_serie">
			<option>Selecione</option>
			<?php 
				$result_series = "SELECT * FROM series";
				$resultado_series = mysqli_query($conn, $result_series);
				while ($row_series = mysqli_fetch_assoc($resultado_series)){?>
					<option value="<?php echo $row_series['serie']; ?>"><?php echo $row_series['serie'];?>
						
					</option><?php
				}
			?>
		</select><br></br>
	Gabarito: <input type="text" name="gabarito" placeholder="Gabarito da questão" required><br></br>
	<p>Questão:</p> <br></br><textarea name="questao"></textarea><br></br>
	<input type="submit" value ="Cadastrar">
	</form>
	</main>
	</div>
</body>
</html>