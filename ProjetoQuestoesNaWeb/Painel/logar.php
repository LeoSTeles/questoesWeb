<?php
	session_start();
	include_once('../Utils/conexao.php');
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$logar = "SELECT * FROM sessions WHERE email = $email AND password = $pass";

	$log = mysqli_query($conn,$logar);

	if(mysqli_affected_rows($conn) != 0){

		$_SESSION['login'] = true;
		$_SESSION['user'] = $user;
		$_SESSION['password'] = $pass;
		header('Location: '.'teste.php');
	}else{
		header('Location: '.'cadastro_materia.php');

		//Erro ao logar
	}

?>