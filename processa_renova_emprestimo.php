<?php
	include "conexao.php";
	session_start();
	
$codigo = $_GET["codigo"];

$dataAtual = date("Y-m-d");

$dataDevolucaoNovo = date('Y-m-d', strtotime($dataAtual. ' + 7 days'));

$exibeData = date('d-m-Y', strtotime($dataDevolucaoNovo));


$alterar = mysql_query("UPDATE emprestimo SET  data_devolucao = '$dataDevolucaoNovo' WHERE cod_emprestimo = '$codigo'");

if ($alterar==true){
	
			?>
			<SCRIPT> alert ('Emprestimo Renovado com sucesso!\n Nova data de Devolucao: <?php echo $exibeData ?>') </SCRIPT>
			<script> location.href = ('pesquisar.php?opcao=emprestimo&pesquisa=') </script>
			<?php
			exit();
		}
	
		else {
			?>
			<script> alert('Ocorreu um erro no servidor ao tentar renovar emprestimo! Tente novamente mais tarde') </script>
			<script> location.href('pesquisar.php?opcao=emprestimo&pesquisa=') </script>
			<?php
		}
?>