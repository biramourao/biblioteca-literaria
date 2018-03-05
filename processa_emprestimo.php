<?php
	session_start();
	include "conexao.php";
	
	$data_emprestimo = $_POST["data_emprestimo"];
	$data_devolucao = $_POST["data_devolucao"];
	$leitor = $_POST["leitor"];
	$bibliotecario = $_POST["bibliotecario"];
	$titulo = $_POST["titulo"];
	$exemplar = $_POST["exemplar"];
	
	//echo "$data_emprestimo $data_devolucao $leitor $bibliotecario $titulo $exemplar";
	
	
		$cadastrar = mysql_query("INSERT INTO emprestimo (cod_emprestimo, data_emprestimo, data_devolucao, Leitor_CPF, Bibliotecario_matr_bibliotecario, Exemplar_cod_exemplar) VALUES ('null','$data_emprestimo', '$data_devolucao', '$leitor', '$bibliotecario', '$exemplar')");
		
		
		if ($cadastrar==true){
		
			echo "<script> alert('Emprestimo Realizado com sucesso!') </script>";
			echo "<script> location.href = ('realiza_emprestimo.php') </script>";		
			$alteraDisp = mysql_query("UPDATE exemplar SET  disponibilidade =  '0' WHERE cod_exemplar = $exemplar");
			exit();
		}
	
		else {
		
			echo "<script> alert('Ocorreu um erro no servidor ao tentar realizar emprestimo! Tente novamente mais tarde') </script>";	
			echo "<script> location.href('realiza_emprestimo.php') </script>";
		
		}
	
?>