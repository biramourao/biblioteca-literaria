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
					Formulário de Alteração de Títulos
				</p>
				
				<?php
										
						$cod = $_GET["codigo"];
												
						$pesquisa = mysql_query("SELECT cod_titulo, nome_titulo, autor, Faixa_etaria_cod_faixa_etaria FROM titulo WHERE cod_titulo = $cod");
						
						$cod_titulo = mysql_result($pesquisa, 0, "cod_titulo");
						$nome_titulo = mysql_result($pesquisa, 0, "nome_titulo");
						$autor = mysql_result($pesquisa, 0, "autor");
						$cod_faixa_etaria = mysql_result($pesquisa, 0, "Faixa_etaria_cod_faixa_etaria");
										
				?>
				<form name="form_altera_titulo" method="post" action="processa_altera_titulo.php">
				
				<input name = "codigo" type = "hidden" value = "<?php echo $cod_titulo; ?>">
				
					<table>
										
						<tr>
							<td>
								<p>
									Título*:
								</p>
							</td>
							
							<td>
								<p>
									<input type="text" name = "nome_titulo" id="nome_titulo" value = "<?php echo $nome_titulo;?>">
								</p>
							</td>
						</tr>
						
						<tr>
							<td>
								<p>
									Autor*:
								</p>
							</td>
							
							<td>
								<p>
									<input type="text" name = "autor" id="autor" value = "<?php echo $autor;?>">	
								</p>
							</td>
						</tr>
						
						<tr>
							<td>
								<p>
									Faixa Etária*:
								</p>
							</td>
							
							<td>
								<p>
									<select name = "faixa_etaria" id="faixa_etaria">
								<?php
							
								$pesquisa = mysql_query("SELECT cod_faixa_etaria, descricao_faixa_etaria FROM faixa_etaria");
								
								$linhas = mysql_num_rows($pesquisa);
							
								for ($cont=1;$cont<=$linhas;$cont++) {
								
									$faixa = mysql_query("SELECT descricao_faixa_etaria FROM faixa_etaria WHERE cod_faixa_etaria='$cont'");
									
									$resultado = mysql_result($faixa,0,"descricao_faixa_etaria"); //mysql_result("tabela","linha","campo")
									
								?>	
										<option value="<?php echo $cont; ?>"> <?php echo $resultado; ?></option>	
								<?php } ?>	
								</select>	
								</p>
							</td>
						</tr>
						
						<tr>
							<td>
								<p>
									Gênero*:
								</p>
							</td>
							<td>
								<p>
								<select name="genero" id="genero">
								<?php
							
								$pesquisa = mysql_query("SELECT cod_genero, descricao_genero FROM genero");
								
								$linhas = mysql_num_rows($pesquisa);
							
								for ($cont=1;$cont<=$linhas;$cont++) {
								
									$genero = mysql_query("SELECT descricao_genero FROM genero WHERE cod_genero='$cont'");
									
									$resultado = mysql_result($genero,0,"descricao_genero"); //mysql_result("tabela","linha","campo")
									
								?>	
										<option value="<?php echo $cont; ?>"> <?php echo $resultado; ?></option>	
								<?php } ?>	
								</select>	
								</p>
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
									<input type="submit" value="Alterar Título" onclick="return validar()">
								</p>
							</td>
						</tr>
						
					</table>
					
				</form>
				
			</div>
	
	</body>

</html>