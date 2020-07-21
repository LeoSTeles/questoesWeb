<?php include("conexao.php");?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="salvar_questao.php">
		Matéria:
		<select name="select_materia">
			<option>Selecione</option>
			<?php 
				$result_materias = "SELECT * FROM materias";
				$resultado_materias = mysqli_query($conn, $result_materias);
				while ($row_materias = mysqli_fetch_assoc($resultado_materias)){?>
					<option value="<?php echo $row_materias['materia']; ?>"><?php echo $row_materias['materia'];?>
						
					</option><?php
				}
			?>
		</select><br></br>



		</select>
	</form>
</body>
</html>