<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php
		include('menu.php')
	?>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../Images/icon.png">
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<title>Cadastrar Matéria - Questões na Web</title>
	
</head>
<body class="bg">
	<div class="border">
		<div class="container center">
			<form method="POST" action="salvar_materia.php">
				<h2>Matéria:</h2><input type="text" name="materia" placeholder="Matéria a cadastrar" required>
				<input type="submit" value ="Salvar Matéria">
			</form>
		</div>
	</div>

</body>
</html>