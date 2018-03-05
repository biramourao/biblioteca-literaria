<?php

	include "conexao.php";
	
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	$consulta = mysql_query("SELECT nome_bibliotecario FROM bibliotecario WHERE login_bibliotecario='$login'");
	
	$linhas = mysql_num_rows($consulta);
	
	if ($linhas){
	
		echo "<script> alert ('Bibliotecario ja cadastrado!') </script>";
		echo "<script> location.href = ('cadastra_bibliotecario.php') </script>";
		exit();
	
	}
	
	else {
	
		$cadastrar = mysql_query("INSERT INTO bibliotecario (nome_bibliotecario, login_bibliotecario, senha_bibliotecario) VALUES ('$nome','$login','$senha')");	
		
		if ($cadastrar){
		
			echo "<script> alert('O bibliotecario $nome foi cadastrado com sucesso!') </script>";
			echo "<script> location.href = ('index2.php') </script>";
			exit();
		
		}
	
		else {
		
			echo "<script> alert('Ocorreu um erro no servidor ao tentar o cadastro! Tente novamente mais tarde') </script>";	
			echo "<script> location.href = ('cadastra_bibliotecario.php') </script>";
		
		}
	
	
	}

?>