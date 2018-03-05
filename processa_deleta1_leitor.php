<?php
		session_start();
		include "conexao.php";

		$cpf = $_GET["codigo"];
		$_SESSION["cpf"] = $cpf;
		
		$consulta = mysql_query ("SELECT nome FROM leitor WHERE cpf = '$cpf'");
	
		$nome = mysql_result ($consulta, 0, "nome");
		
?>

<script language = "javascript">

		var msgchamado = window.confirm("Tem certeza que deseja excluir o leitor <?php echo $nome; ?>");
		
		if (msgchamado){
		
				window.location.href = ("processa_deleta2_leitor.php")
		
		} else {
		
				window.history.go(-1);

		}	

</script>