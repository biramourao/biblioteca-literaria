<?php
	session_start();
	include "conexao.php";
	
		$login = $_POST["login"];
		$senha = $_POST["senha"];
		
		$pesquisa = mysql_query("select login_bibliotecario, senha_bibliotecario from bibliotecario where login_bibliotecario='$login' and senha_bibliotecario='$senha'");
		
		$linhas = mysql_num_rows($pesquisa);
		
		if($linhas){
			$_SESSION["login"] = $login;
			echo "<script>location.href=('index2.php')</script>";
			}
			else {
				echo "<script>alert('Login ou senha errados. Tente novamente')</script>";
				echo "<script>location.href=('index.php')</script>";
				}
			
?>