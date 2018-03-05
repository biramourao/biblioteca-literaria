<?php
		session_start();
		include "conexao.php";

		$cod_titulo = $_GET["codigo"];
		$_SESSION["cod_titulo"] = $cod_titulo;
		
		$consulta = mysql_query ("SELECT nome_titulo FROM titulo WHERE cod_titulo = '$cod_titulo'");
	
		$nome = mysql_result ($consulta, 0, "nome_titulo");
		
?>

<script language = "javascript">

		var msgchamado = window.confirm("Tem certeza que deseja excluir o Livro <?php echo $nome; ?>");
		
		if (msgchamado){
		
				window.location.href = ("processa_deleta2_titulo.php?codigo=<?php echo $cod_titulo;?>")
		
		} else {
		
				window.history.go(-1);

		}	

</script>