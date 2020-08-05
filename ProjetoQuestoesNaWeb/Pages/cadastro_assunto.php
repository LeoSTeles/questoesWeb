<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="icon.png">
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<title>Cadastrar Assunto - Questões na Web</title>
	
</head>
<body>
	<div class="border">
		<div class="container center">
			<form method="POST" action="Pages/salvar_assunto.php">

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

			<h2>Assunto:</h2> <input type="text" name="assunto" placeholder="Assunto a cadastrar" required>
			<input type="submit" value ="Salvar Assunto">
			</form>
		</div>
	</div>

</body>
</html>