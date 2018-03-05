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
				
				<p> Clique no nome do bibliotecário para exibir suas informações </p>
				
				<?php
								
						$consulta = mysql_query ("SELECT nome_bibliotecario, matr_bibliotecario FROM bibliotecario");
						$linhas = mysql_num_rows($consulta);
						echo "<p> $linhas bibliotecário(s) cadastrado(s) </p>";								
								
				?>
				
				<table width = "90%" border = "1">
												
				<?php
												
				for ($cont = 0; $cont < $linhas; $cont++) {
														
						$nome_bibliotecario = mysql_result($consulta, $cont, "nome_bibliotecario");
						$matr_bibliotecario = mysql_result($consulta, $cont, "matr_bibliotecario");
												
				?>
						<tr>
														
								<td> 
																
										<p> 
																		
												<a href = "info_bibliotecario.php?pesquisa=<?php echo $matr_bibliotecario ?>"> <?php echo $nome_bibliotecario; ?> </a>
																
										</p> 
																
								</td>
																
								<td> 
														
										<p> 
																
												<a href = "altera_bibliotecario.php?codigo=<?php echo $matr_bibliotecario; ?>"> 
																		
														Alterar 
																				
												</a> 
																		
														/ 
																				
												<a href="processa_deleta2_bibliotecario.php?codigo=<?php echo $matr_bibliotecario;?>" onclick="return confirm('Deseja Exclui <?php echo $nome_bibliotecario;?> ?')"> 
																		
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