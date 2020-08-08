<?php include('../Utils/conexao.php');

	$id_categoria = $_REQUEST['id_categoria'];
	
	$result_sub_cat = "SELECT * FROM assuntos WHERE materia_id=$id_categoria ORDER BY nome_assunto";
	$resultado_sub_cat = mysqli_query($conn, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post[] = array(
			'id'	=> $row_sub_cat['id'],
			'nome_assunto' => utf8_encode($row_sub_cat['nome_assunto']),
		);
	}
	
	echo(json_encode($sub_categorias_post));
?>