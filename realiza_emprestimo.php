<?php
	session_start();
	include "conexao.php";
?>

<html>
	<head>
		<title> Biblioteca Literária </title>
		
		<link rel="stylesheet" type="text/css" href="layout.css">
		
		<script language = "javascript" type = "text/javascript">
		
			function validar(){
			
				var titulo = form_cadastra_livro.titulo.value;
				var autor = form_cadastra_livro.autor.value;
				
				if (titulo==""){
					alert ('Preencha o campo título');
					form_cadastra_livro.titulo.focus();
					return false;
				}
				
				if (autor==""){
					alert ('Preencha o campo autor');
					form_cadastra_livro.autor.focus();
					return false;
				}
				
			}	
		
		</script>
		
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
	
				<p>
					Formulário de Emprestimo
				</p>
				<form name="form_realiza_emprestimo" method="post" action="realiza_emprestimo2.php">
				
					<table>
										
						<tr>
							<td>
								<p>
									Data de Emprestimo*:
								</p>
							</td>
							
							<td>
								<p>
									<input type="date" name = "data_emprestimo">
								</p>
							</td>
						</tr>
						
						<tr>
							<td>
								<p>
									Data de Devolução*:
								</p>
							</td>
							
							<td>
								<p>
									<input type="date" name = "data_devolucao">	
								</p>
							</td>
						</tr>
						
						<tr>
							<td>
								<p>
									Leitor *:
								</p>
							</td>
							
							<td>
								<p>
									<select name = "leitor" >
								<?php
							
								$pesquisa = mysql_query("SELECT cpf, nome FROM leitor ORDER BY nome ASC");
								
								$linhas = mysql_num_rows($pesquisa);
							
								for ($cont=0;$cont<$linhas;$cont++) {
								
									//$nome = mysql_query("SELECT cpf, nome FROM leitor WHERE cpf ='$cont' ORDER BY nome ASC ");
									
									$resultado = mysql_result($pesquisa,$cont,"nome"); //mysql_result("tabela","linha","campo")
									$resultado2 = mysql_result($pesquisa,$cont,"cpf");
								?>	
										<option value="<?php echo $resultado2; ?>"> <?php echo $resultado; ?> </option>	
								<?php } ?>	
								</select>	
								</p>
							</td>
						</tr>
						
						<tr>
							<td>
								<p>
									Bibliotecario*:
								</p>
							</td>
							<td>
								<p>
								<select name = "bibliotecario" >
								<?php
							
								$pesquisa = mysql_query("SELECT matr_bibliotecario, nome_bibliotecario FROM bibliotecario ORDER BY nome_bibliotecario ASC");
								
								$linhas = mysql_num_rows($pesquisa);
							
								for ($cont=0;$cont<$linhas;$cont++) {
																	
									$resultado = mysql_result($pesquisa,$cont,"nome_bibliotecario"); //mysql_result("tabela","linha","campo")
									$resultado2 = mysql_result($pesquisa,$cont,"matr_bibliotecario");
								?>	
										<option value="<?php echo $resultado2; ?>"> <?php echo $resultado; ?> </option>	
								<?php } ?>	
								</select>
								</p>
						</tr>
						<tr>
							<td>
								<p>
									Titulo*:
								</p>
							</td>
							<td>
								<p>
								
								<select name="titulo">
								  <?php
									$pesquisa = mysql_query("SELECT cod_titulo, nome_titulo FROM titulo ORDER BY nome_titulo ASC");
									$linhas = mysql_num_rows($pesquisa);
									for ($cont=0;$cont<$linhas;$cont++) {
																									
										$resultado= mysql_result($pesquisa,$cont,"nome_titulo"); //mysql_result("tabela","linha","campo")
										$cod_titulo = mysql_result($pesquisa,$cont,"cod_titulo");
									?>	
											<option id="valor" value="<?php echo $cod_titulo; ?>" onclick="chamaResultado()"> <?php echo $resultado ; ?> </option>
											
									<?php } ?>
									
								 </select>
							</td>
						</tr>
						<tr>
							<td>
								<p>
									Os campos com * são obrigatórios
								</p>
							</td>
						</tr>	
						
						<tr>
							<td>
								
							</td>
							<td>
								<p>
									<input type="submit" value="Verificar Informações" onclick="return validar()">
									
								</p>
							</td>
						</tr>
						
					</table>
					
				</form>
			</div>
	
	</body>

</html>