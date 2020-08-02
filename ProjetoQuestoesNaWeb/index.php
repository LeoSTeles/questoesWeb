<?php include('Utils/conexao.php');?>
<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="<?php echo INCLUDE_PATH; ?>Style/css/all.css" rel="stylesheet"> <!--load all styles -->
	<link rel="shortcut icon" href="icon.png">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<title>Questões na Web</title>
	<section class="banner"></section>
		<div class="foto"></div>
	<header>
		<nav class="menu">
			<ul>
				<li class="home"><a class="fas fa-book" href="<?php echo INCLUDE_PATH; ?>index">    INÍCIO</a></li>
				<li class="login"><a href="<?php echo INCLUDE_PATH; ?>login">Login</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>cadastro_materia">NOVA MATÉRIA</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>cadastro_assunto">NOVO ASSUNTO</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>cadastro_questao">NOVA QUESTÃO</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>gerar_questao">GERAR QUESTÃO</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>gerar_prova">GERAR PROVA</a></li>
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
	<?php
		if(file_exists('Pages/'.$url.'.php')){
			include('Pages/'.$url.'.php');
		}else{
			//Pode fazer o que quiser pois a página não existe.//
			if ($url != 'index' && $url != 'cadastro_materia' && $url != 'cadastro_assunto' && $url != 'cadastro_questao' && $url != 'gerar_questao' && $url != 'gerar_prova') {
				$pagina404 = true;
				include('Pages/404.php');
			}else{
				include('Pages/home.php');
			}

		}
	?>

</head>
<body class="bg">

</body>
</html>