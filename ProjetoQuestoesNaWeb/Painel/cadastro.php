<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="../Style/css/all.css" rel="stylesheet"> <!--load all styles -->
	<link rel="shortcut icon" href="Images/icon.png">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<title>Questões na Web</title>
	<header>
		<nav class="menu">
			<ul>
				<li class="home"><a class="fas fa-book" href="../index.php"> INÍCIO</a></li>
				<li class="login"><a href="../Painel/login.php">Login</a></li>
				<li class="cadastro right"><a href="../Painel/cadastro.php">Cadastrar</a></li>
				<li><a href="../Pages/cadastro_materia.php">NOVA MATÉRIA</a></li>
				<li><a href="../Pages/cadastro_assunto.php">NOVO ASSUNTO</a></li>
				<li><a href="../Pages/cadastro_questao.php">NOVA QUESTÃO</a></li>
				<li><a href="../Pages/gerar_questao.php">GERAR QUESTÃO</a></li>
				<li><a href="../Pages/gerar_prova.php">GERAR PROVA</a></li>
			</ul>
			<div class="clear"></div><!--Menu-->
		</nav>
	</header>
</head>
<body class="bg">
	<div class="border">
		<div class="box-cadastro center">
			<form method="POST" action="salvar_usuario.php">
				<i class="fas fa-user-plus"></i>
				<input type="text" name="user" placeholder="Username" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="email" name="email" placeholder="E-mail" required="">
				<input type="date" name="nascimento" placeholder="Data de Nascimento" required=""><br></br><br>
				<input type="submit" name="acao" value ="Cadastrar">
			</form>
		</div>
	</div>
</body>
</html>