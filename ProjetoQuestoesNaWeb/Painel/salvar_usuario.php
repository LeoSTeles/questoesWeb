<?php
	include('../Utils/conexao.php');
	$user = $_POST['user'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$date = $_POST['date'];

	$salva_usuario = "INSERT INTO sessions(id,user,password,email,nascimento) VALUES (NULL, '$user', '$password','$email','$date')";
	

	$sva = mysqli_query($conn,$salva_usuario);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/index.php'>
			<script type=\"text/javascript\">
				alert(\"Usuário cadastrado com Sucesso.\");
			</script>";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ProjetoQuestoesNaWeb/index.php'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível cadastrar o usuário.\");
			</script>";	
	}




?>