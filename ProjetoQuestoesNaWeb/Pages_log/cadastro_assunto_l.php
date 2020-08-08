<?php include('../Utils/conexao.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../Images/icon.png">
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>	
	<title>Cadastrar Assunto - Questões na Web</title>
	<?php
		include('menu_l.php')
	?>
	
</head>
<body class="bg">
	<div class="border">
		<div class="container center">
			<form method="POST" action="salvar_assunto_l.php">

			<h2>Matéria:</h2> 
			<select name="select_materia" id="id_categoria">
				<option value="">Selecione a Matéria</option>
				<?php
					$result_cat_post = "SELECT * FROM materias ORDER BY nome_materia";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['id'].'">'.$row_cat_post['nome_materia'].'</option>';
						$idmat = $row_cat_post['id'];
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