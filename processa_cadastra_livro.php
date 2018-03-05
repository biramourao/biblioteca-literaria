<?php
	session_start();
	include "conexao.php";
	include "valida_login.php";
	
	$titulo = $_POST["titulo"];
	$autor = $_POST["autor"];
	$faixa_etaria = $_POST["faixa_etaria"];
	$genero = $_POST["genero"];
	$qtdExemplares = $_POST["qtdExemplares"];
	
	$consulta = mysql_query("SELECT nome_titulo, autor FROM titulo WHERE nome_titulo='$titulo' and autor='$autor'");
	
	$linhas = mysql_num_rows($consulta);
	
	if ($linhas){
	
		echo "<script> alert ('Livro ja cadastrado!') </script>";
		echo "<script> location.href = ('cadastra_livro.php') </script>";
		exit();
	
	}
	
	else {
	
		$cadastrar1 = mysql_query("INSERT INTO titulo (nome_titulo, autor, Faixa_etaria_cod_faixa_etaria) VALUES ('$titulo','$autor','$faixa_etaria')");	
		
		if ($cadastrar1){
			
			$consulta1 = mysql_query("SELECT cod_genero FROM genero WHERE descricao_genero = '$genero'");
			
			$cod_genero = mysql_result($consulta1,0,"cod_genero");
			
			$consulta2 = mysql_query("SELECT cod_titulo FROM titulo WHERE nome_titulo = '$titulo'");

			$cod_titulo = mysql_result($consulta2,0,"cod_titulo");
			
			$cadastrar2 = mysql_query("INSERT INTO titulo_genero (Titulo_cod_titulo, Genero_cod_genero) VALUES ('$cod_titulo','$cod_genero')");	
			
			for ($cont = 1; $cont < $qtdExemplares; $cont++) {
			
			$cadastrar3 = mysql_query("INSERT INTO exemplar (cod_exemplar ,Titulo_cod_titulo, disponibilidade) VALUES ('null','$cod_titulo', '1')");
			
			}
			if($cadastrar2){
								
				echo "<script> alert('O livro $titulo do autor(a) $autor foi cadastrado com sucesso!') </script>";
				echo "<script> location.href = ('index2.php') </script>";
				exit();
			
			} else {
			
				echo "<script> alert('Ocorreu um erro no servidor ao tentar o cadastro!') </script>";	
				echo "<script> location.href = ('cadastra_livro.php') </script>";
				exit();
			
			}

		
		}
	
		else {
		
			echo "<script> alert('Ocorreu um erro no servidor ao tentar o cadastro! Tente novamente mais tarde.') </script>";	
			echo "<script> location.href = ('cadastra_livro.php') </script>";
		
		}
	
	
	}


?>