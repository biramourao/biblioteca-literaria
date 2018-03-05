<?php
	session_start();
	include "conexao.php"
?>
<html>

	<head>
		<title> Biblioteca Literária </title>
		<link rel = "stylesheet" type = "text/css" href = "layout.css">
	</head>

	<body>

			<div id="principal">
				<p> <img src="img/banner.png"alt="Banner">
				</p>
				
				<div id="area_restrita">
		
					<form method="post" action="logout.php">
						<p>Seja Bem Vindo: 
						<?php
							include "valida_login.php"
						?>
						</p>
						<input type="submit" value="Sair">
					</form>
		
				</div>
			
			<table id="tabela1">
				<tr>
					<td> <a href="cadastra_leitor.php"><img src="img2/add_user2.png"alt="adicionar_leitor"> </a></td>
				
					<td> <a href="cadastra_titulo.php"><img src="img2/add_livro2.png"  alt="adicionar_livro"> </a></td>

					<td> <a href="cadastra_bibliotecario.php"><img src="img2/add_func2.png" alt="adicionar_func"> </a> </td>

					<td> <a href="pesquisar.php?opcao=null&pesquisa=null"><img src="img2/pesquisar2.png" alt="pesquisar"> </a> </td>

				</tr>	
				<tr>
					<a href="cadastra_leitor.php"> <td> <h4>Adicionar Leitor </h4></td> </a>
				
					<a href="cadastra_titulo.php">  <td><h4>Adicionar Título</h4> </td> </a>

					<a href="cadastra_bibliotecario.php"> <td> <h4>Adicionar Bibliotecário </h4></td> </a>

					<a href="pesquisar.php"> <td> <h4>Pesquisar	</h4></td> </a>

				</tr>					
			</table>
			
			<table id="tabela2">
				<tr>
					<td> <a href="altera_exclui_leitor.php"><img src="img2/exclui_user2.png"alt="Altera_Exclui_leitor"> </a></td>
				
					<td> <a href="altera_exclui_titulo.php"><img src="img2/excluir_livro2.png"  alt="Altera_Exclui_livro"> </a></td>

					<td> <a href="altera_exclui_bibliotecario.php"><img src="img2/exclui_func2.png" alt="Altera_Exclui_func"> </a> </td>

					<td> <a href="realiza_emprestimo.php"> <img src="img2/emprestimo2.png" alt="Emprestimo"> </a> </td>

				</tr>	
				<tr>
					<a href="altera_exclui_leitor.php"> <td><h4> Alterar / Excluir Leitor</h4> </td> </a>

					<a href="altera_exclui_titulo.php"> <td>  <h4> Alterar / Excluir Título</h4> </td> </a>

					<a href="altera_exclui_bibliotecario.php"> <td> <h4> Alterar / Excluir Bibliotecário </h4></td> </a>

					<a href="realiza_emprestimo.php"> <td>  <h4>Realizar Empréstimo </h4></td> </a>

				</tr>				
			</table>
	
		</div>

	</body>

</html>