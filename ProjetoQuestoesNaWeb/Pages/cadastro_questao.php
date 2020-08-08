<?php 
	include('../Utils/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php header('Content-Type: text/html; charset=utf-8'); ?>
	<link rel="shortcut icon" href="../Images/icon.png">
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>		
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<?php
		include('menu.php')
	?>
</head>
<body class="bg">
	<div class="border_questao">
		<div class="container_quest center">
			<form method="POST" action="salvar_questao.php">
				<h2>Matéria:</h2>
				<select name="select_materia" id="id_categoria">
					<option value="">Selecione a Matéria</option>
					<?php
						$result_cat_post = "SELECT * FROM materias ORDER BY nome_materia";
						$resultado_cat_post = mysqli_query($conn, $result_cat_post);
						while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
							echo '<option value="'.$row_cat_post['id'].'">'.$row_cat_post['nome_materia'].'</option>';
						}
					?>
				</select>
				
				<h2>Assunto:</h2>
				<select name="select_assunto" id="id_sub_categoria">
					<option value="">Selecione o Assunto</option>
					<span class="carregando">Aguarde, carregando...</span>
				</select>
				<h2>Dificuldade:</h2> 
				<select name="select_dificuldade">
						<option>Dificuldade da Questão</option>
						<?php 
							$result_dificuldade = "SELECT * FROM dificuldade";
							$resultado_dificuldade = mysqli_query($conn, $result_dificuldade);
							while ($row_dificuldade = mysqli_fetch_assoc($resultado_dificuldade)){?>
								<option value="<?php echo $row_dificuldade['nivel']; ?>"><?php echo $row_dificuldade['nivel'];?>
									
								</option><?php
							}
						?>
				</select>
				<h2>Gabarito:</h2> <input type="text" name="gabarito" placeholder="Gabarito da questão" required>
				<h2>Questão:</h2><textarea class="t_quest" name="questao" placeholder="Digite aqui o conteúdo da questão"></textarea>
				<input type="submit" value="Cadastrar">
			</form>
			<script type="text/javascript">
			$(function(){
				$('#id_categoria').change(function(){
					if( $(this).val() ) {
						$('#id_sub_categoria').hide();
						$('.carregando').show();
						$.getJSON('sub_categorias_post.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
							var options = '<option value="">Selecione o Assunto</option>';	
							for (var i = 0; i < j.length; i++) {
								options += '<option value="' + j[i].id + '">' + j[i].nome_assunto + '</option>';
							}	
							$('#id_sub_categoria').html(options).show();
							$('.carregando').hide();
						});
					} else {
						$('#id_sub_categoria').html('<option value="">– Selecione o Assunto –</option>');
					}
				});
			});
			</script>
		</div>
	</div>
</body>
</html>