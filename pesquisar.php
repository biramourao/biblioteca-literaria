<?php
	session_start();
	include "conexao.php";
?>	
	
<html>

		<head>
		
				<link rel = "stylesheet" type = "text/css" href = "layout.css">
		
		</head>

		<body>
		<?php
			$pesquisa = $_GET["pesquisa"];
			$opcao = $_GET["opcao"];
		?>
		
		
				<div id = "principal">
				
					<p> <img src="img/banner.png"alt="Banner"> <a href="index2.php"> <img src="img/voltar.png"alt="voltar"> </a>
					</p>
					
					<div id="area_restrita">
		
							<form method="post" action="logout.php">
								<p>Seja Bem Vindo</p>
								<?php
									include "valida_login.php"
								?>
								<input type="submit" value="Sair">
							</form>
		
					</div>
				
				<h1> Pesquisar </h1>

						<form method="get" action="pesquisar2.php">
							O que você deseja pesquisar? 
							<select name="opcao">
							  <option value="livro">Livro </option>
							  <option value="leitor_cpf">Leitor p/ CPF </option>
							  <option value="leitor_nome">Leitor p/ Nome </option>
							  <option value="bibliotecario_nome">Bibliotecario p/ Nome </option>
							  <option value="bibliotecario_matr">Bibliotecario p/ Matricula </option>
							  <option value="emprestimo">Emprestimo </option>
							</select>
							<br>
							Digite a Pesquisa:
							<input type="text" name="pesquisa" size="80"value=""> <input type="submit" value="pesquisar">
							<BR>
							<FONT COLOR="RED"> *Obs.: Ao deixar o CAMPO de pesquisa VAZIO, o sistema EXIBE TODOS OS  REGISTROS.</FONT>
						</form>
				
				<?php
					
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
					if ($opcao == "emprestimo")	{
						include "pesquisa_emprestimo.php";
					}
				?>			
				</div>		
		
		</body>

</html>
