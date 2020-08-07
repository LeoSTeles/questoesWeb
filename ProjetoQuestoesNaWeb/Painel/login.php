<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<link href="..Style/css/all.css" rel="stylesheet"> <!--load all styles -->
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="../Images/icon.png">
</head>
<body class="bg">
	<div class="border">
		<div class="box-login center">
			<form method="POST" action="<?php echo INCLUDE_PATH_PAINEL ?>logar.php">
				<i class="fas fa-sign-in-alt"></i>
				<input type="text" name="email" placeholder="Username" required>
				<input type="password" name="password" placeholder="Password" required>
				<br>
				<input type="checkbox" name="remember">
				<p class="left">Remember</p><input type="submit" name="acao" value ="Login">
			</form>
		</div>
	</div>
</body>
</html>