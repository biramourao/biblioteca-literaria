<?php
	session_start();
	include "conexao.php";

		$pesquisa = $_POST["pesquisa"];
		$opcao = $_POST["opcao"];

		if ($opcao=="livro" ){
			include "pesquisa_livro.php";
		}
		if ($opcao == "leitor_cpf")	{
			include "pesquisa_leitor_cpf.php";
		}
		if ($opcao == "leitor_nome")	{
			include "pesquisa_leitor_nome.php";
		}
		if ($opcao == "bibliotecario_nome")	{
			include "pesquisa_bibliotecario_nome.php";
		}
		if ($opcao == "bibliotecario_matr")	{
			include "pesquisa_bibliotecario_matr.php";
		}
?>