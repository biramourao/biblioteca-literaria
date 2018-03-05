<?php
	session_start();
	include "conexao.php";
	include "valida_login.php";
	
	$cod_titulo = $_POST['codigo'];
	$qtdExemplares = $_POST['qtdExemplares'];

	for ($cont = 1; $cont < $qtdExemplares; $cont++) {
			
		$cadastrar3 = mysql_query("INSERT INTO exemplar (cod_exemplar ,Titulo_cod_titulo, disponibilidade) VALUES ('null','$cod_titulo', '1')");
			
		}
	?>
	<script type="text/javascript">
		alert ('Os <?php echo $qtdExemplares; ?> Exemplares foram Adicionados com Sucesso!!') 
		window.location = "pesquisar.php?opcao=livro&pesquisa="
	</script>   
?>