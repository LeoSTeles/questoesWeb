<?php include('Utils/conexao.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="Style/css/all.css" rel="stylesheet"> <!--load all styles -->
	<link rel="shortcut icon" href="Images/icon.png">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Questões na Web</title>
	<header>
		<nav class="menu">
			<ul>
				<li class="home"><a class="fas fa-book" href="index.php"> INÍCIO</a></li>
				<li class="login"><a href="Painel/login.php">Login</a></li>
				<li class="cadastro right"><a href="Painel/cadastro.php">Cadastrar</a></li>
				<li><a href="Pages/cadastro_materia.php">NOVA MATÉRIA</a></li>
				<li><a href="Pages/cadastro_assunto.php">NOVO ASSUNTO</a></li>
				<li><a href="Pages/cadastro_questao.php">NOVA QUESTÃO</a></li>
				<li><a href="Pages/gerar_questao.php">GERAR QUESTÃO</a></li>
				<li><a href="Pages/gerar_prova.php">GERAR PROVA</a></li>
			</ul>
			<div class="clear"></div><!--Menu-->
		</nav>
	</header>
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] :  'index';
		switch ($url) {
			case 'index':
				echo '<target target="Início"/>';
				break;

			case 'cadastro_materia':
				echo '<target target="Nova Matéria"/>';
				break;

			case 'cadastro_assunto':
				echo '<target target="Novo Assunto"/>';
				break;

			case 'cadastro_questao':
				echo '<target target="Nova Questão"/>';
				break;

			case 'gerar_questao':
				echo '<target target="Gerar Questão"/>';
				break;

			case 'gerar_prova':
				echo '<target target="Gerar Prova"/>';
				break;
			
		}
	?>

</head>
<body class="bg"> 
</body>
</html>