<?php
		session_start();
		include "conexao.php";

		$cod_emprestimo = $_GET["codigo"];
		$cod_exemplar = $_GET['codigoExemplar']
		
?>

<script language = "javascript">

		var msgchamado = window.confirm("CONFIRMAR DEVOLUÇÃO?");
		
		if (msgchamado){
		
				window.location.href = ("processa_devolve_emprestimo2.php?codigo=<?php echo $cod_emprestimo ?>&codigoExemplar=<?php echo $cod_exemplar ?>")
		
		} else {
		
				window.history.go(-1);

		}	

</script>