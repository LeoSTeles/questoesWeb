<?php include('Utils/conexao2.php'); ?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="icon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>Style/style.css">
	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>jquery.js"></script>
	<title>Cadastrar Questão - Questões na Web</title>
	<div class="border_questao">
		<div class="container_quest center">
			<form method="POST" action="Pages/salvar_questao.php">
				<h2>Matéria:</h2> 
				<select name="select_materia" id="id_materia">
				<option value="">Selecione a Matéria</option>

				</select><br><br>

			</form>
		</div>
	</div>
</head>
<body>

</body>
</html>
