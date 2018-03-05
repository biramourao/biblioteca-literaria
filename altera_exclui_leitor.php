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
				
				<p> Clique no nome do leitor para exibir suas informações </p>
				
				<?php
								
						$consulta = mysql_query ("SELECT nome, cpf FROM leitor");
						$linhas = mysql_num_rows($consulta);
						echo "<p> $linhas leitor(es) cadastrado(s) </p>";								
								
				?>
				
				<table width = "90%" border = "1">
												
				<?php
												
				for ($cont = 0; $cont < $linhas; $cont++) {
														
						$nome = mysql_result($consulta, $cont, "nome");
						$cpf = mysql_result($consulta, $cont, "cpf");
												
				?>
						<tr>
														
								<td> 
																
										<p> 
																			
												<a href = "info_leitor.php?pesquisa=<?php echo $cpf ?>"> <?php echo $nome; ?> </a>
																
										</p> 
																
								</td>
																
								<td> 
														
										<p> 
																
												<a href = "altera_leitor.php?codigo=<?php echo $cpf; ?>"> 
																		
														Alterar 
																				
												</a> 
																		
														/ 
																				
												<a href = "processa_deleta1_leitor.php?codigo=<?php echo $cpf; ?>"> 
																		
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