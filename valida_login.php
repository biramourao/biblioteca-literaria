<?php
	
	if (isset($_SESSION["login"])) { //isset verifica se a variável tem conteúdo e retorna TRUE ou FALSE
	
		echo $_SESSION["login"];
	
	}

	else {
	
		echo "<script> alert('Você nao esta logado!') </script>";
	
		echo "<script> location.href = ('index.php') </script>";
	
	}

?>