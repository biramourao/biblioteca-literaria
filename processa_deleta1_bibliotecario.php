<?php
		session_start();
		include "conexao.php";

		$matr_bibliotecario = $_GET["codigo"];
		$_SESSION["matr_bibliotecario"] = $matr_bibliotecario;
		
		$consulta = mysql_query ("SELECT nome_bibliotecario FROM bibliotecario WHERE matr_bibliotecario = '$matr_bibliotecario'");
	
		$nome = mysql_result ($consulta, 0, "nome_bibliotecario");
		
?>

<script language = "javascript">

		var msgchamado = window.confirm("Tem certeza que deseja excluir o bibliotecário <?php echo $nome_bibliotecario; ?>");
		
		if (msgchamado){
		
				window.location.href = ("processa_deleta2_bibliotecario.php")
		
		} else {
		
				window.history.go(-1);

		}	

</script>