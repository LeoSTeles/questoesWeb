<?php include('../Utils/conexao.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include('menu_l.php'); ?>
	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>	
	</header>
	<script>
		console.log($_SESSION['user']);
	</script>
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