<?php include('../Utils/conexao.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('../Pages/menu.php'); ?>
	<title>Painel de Controle</title>
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<link href="../Style/css/all.css" rel="stylesheet"> <!--load all styles -->
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="../Images/icon.png">
</head>
<body class="bg">
	<div class="border">
		<div class="box-login center">
			<?php
				if(isset($_POST['acao'])){
					$user = $_POST['email'];
					$password = $_POST['password'];
					$sql = "SELECT * FROM sessions WHERE user = '$user' AND password = '$password'";
					$sql_res = mysqli_query($conn, $sql);
					if (mysqli_affected_rows($conn) == 1) {
						//Logado com sucesso//
						$_SESSION['login']= true;
						$_SESSION['user'] = $user;
						$_SESSION['password'] = $password;
						header('Location: '.'../Pages_log/index_l.php');
					}else{
						//Login falhou//
						echo "<h3>Usuário ou senha incorretos</h3>";

					}
				}

			?>
			<form method="POST">
				<i class="fas fa-sign-in-alt"></i><br>
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