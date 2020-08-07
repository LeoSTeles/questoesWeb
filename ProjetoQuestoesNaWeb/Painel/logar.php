<?php
	include_once('conexao.php');
	$user = $_POST['email'];
	$pass = $_POST['password'];

	$logar = "SELECT * FROM sessions WHERE user = $user AND password = $pass";

	$log = mysqli_query($conn,$logar);

	if(mysqli_affected_rows($conn) != 0){

		$_SESSION['login'] = true;
		$_SESSION['user'] = $user;
		$_SESSION['password'] = $pass;
		header('Location: '.INCLUDE_PATH);
		echo "
		<script type=\"text/javascript\">
			alert(\"Logado com Sucesso.\");
		</script>";	
	}else{
		header('Location: '.'Erro ao logar');
		echo "
		<script type=\"text/javascript\">
			alert(\"Não foi possível logar.\");
		</script>";	
		//Erro ao logar
	}

?>