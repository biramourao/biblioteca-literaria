<?php

	include "conexao.php";
	
	$cpf = $_POST["cpf"];
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	$cep = $_POST["cep"];
	$logradouro = $_POST["logradouro"];
	$rua = $_POST["rua"];
	$numero = $_POST["numero"];

	$consulta = mysql_query("SELECT cpf FROM leitor WHERE cpf='$cpf'");
	
	$linhas = mysql_num_rows($consulta);
	
	if ($linhas){
	
		echo "<script> alert ('Leitor ja cadastrado!') </script>";
		echo "<script> location.href = ('cadastra_leitor.php') </script>";
		exit();
	
	}
	
	else {
	
		$cadastrar = mysql_query("INSERT INTO leitor (cpf, nome, idade, cep, logradouro, rua, numero) VALUES ('$cpf','$nome','$idade','$cep','$logradouro','$rua','$numero')");	
		
		if ($cadastrar){
		
			echo "<script> alert('O leitor $nome foi cadastrado com sucesso!') </script>";
			echo "<script> location.href = ('index2.php') </script>";
			exit();
		
		}
	
		else {
		
			echo "<script> alert('Ocorreu um erro no servidor ao tentar o cadastro! Tente novamente mais tarde') </script>";	
			echo "<script> location.href('cadastra_leitor.php') </script>";
		
		}
	
	
	}

?>