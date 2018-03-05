<?php
	include "conexao.php";
	session_start();
?>

<html>
	<head>
		<title> Biblioteca Literária </title>
		
		<link rel="stylesheet" type="text/css" href="layout.css">
	
	</head>
	
	<body>

	<div id="principal">
				
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
				
				<p> Clique no nome do título para exibir suas informações </p>
				
				<?php
								
						$consulta = mysql_query ("SELECT nome_titulo, cod_titulo FROM titulo");
						$linhas = mysql_num_rows($consulta);
						echo "<p> $linhas livro(s) cadastrado(s) </p>";								
								
				?>
				
				<table width = "90%" border = "1">
												
				<?php
												
				for ($cont = 0; $cont < $linhas; $cont++) {
														
						$nome_titulo = mysql_result($consulta, $cont, "nome_titulo");
						$cod_titulo = mysql_result($consulta, $cont, "cod_titulo");
												
				?>
						<tr>
														
								<td> 
																
										<p> 
																		
												<a href = "info_titulo.php?pesquisa=<?php echo $cod_titulo ?>"> <?php echo $nome_titulo; ?> </a>
																
										</p> 
																
								</td>
																
								<td> 
														
										<p> 
																
												<a href = "altera_titulo.php?codigo=<?php echo $cod_titulo; ?>"> 
																		
														Alterar 
																				
												</a> 
																		
														/ 
																				
												<a href = "processa_deleta1_titulo.php?codigo=<?php echo $cod_titulo; ?>"> 
																		
														Excluir 
																				
												</a> 
																		
										</p> 
																
								</td>
																																																						
						</tr>

								<?php

														}
														
								?>
													
				</table>
				
				
	</div>
	
	</body>

</html>