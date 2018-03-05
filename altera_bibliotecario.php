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
		
			var nome = form_cadastra_bibliotecario.nome.value;
			var login = form_cadastra_bibliotecario.login.value;
			var senha = form_cadastra_bibliotecario.senha.value;
			
			if (nome==""){
				alert ('Preencha o campo nome');
				form_cadastra_bibliotecario.nome.focus();
				return false;
			}
			
			if (login==""){
				alert ('Preencha o campo login');
				form_cadastra_bibliotecario.login.focus();
				return false;
			}
			
			if (senha==""){
				alert ('Preencha o campo senha');
				form_cadastra_bibliotecario.senha.focus();
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
					Formulário de Alteração de Bibliotecário
				</p>
				
				<?php
										
						$cod = $_GET["codigo"];
												
						$pesquisa = mysql_query("SELECT matr_bibliotecario, nome_bibliotecario, login_bibliotecario, senha_bibliotecario FROM bibliotecario WHERE matr_bibliotecario = $cod");
						
						$matr_bibliotecario = mysql_result($pesquisa, 0, "matr_bibliotecario");
						$nome_bibliotecario = mysql_result($pesquisa, 0, "nome_bibliotecario");
						$login_bibliotecario = mysql_result($pesquisa, 0, "login_bibliotecario");
						$senha_bibliotecario = mysql_result($pesquisa, 0, "senha_bibliotecario");						
										
				?>
				<form name="form_altera_bibliotecario" method="post"  action="processa_altera_bibliotecario.php">
				
				<input name = "codigo" type = "hidden" value = "<?php echo $matr_bibliotecario; ?>">
				
					<table>
					
						<tr>
							<td>
								<p>
									Nome*:
								</p>
							</td>
							
							<td>
								<p>
									<input type="text" name = "nome_bibliotecario" id="nome_bibliotecario" value = "<?php echo $nome_bibliotecario; ?>">
								</p>
							</td>
						</tr>
						
						<tr>
						
							<td>
								<p>
									Login*:
								</p>
							</td>
							<td>
								<p>
									<input type="text" name="login_bibliotecario" value = "<?php echo $login_bibliotecario; ?>">
								</p>
							</td> 
						</tr>
						
						<tr>
							<td>
								<p>
									Senha*:
								</p>
							</td>
							<td>
								<p>
									<input type="password" name = "senha_bibliotecario" id="senha_bibliotecario" value = "<?php echo $senha_blbliotecario; ?>">	
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
									<input type="submit" value="Alterar Bibliotecário" onclick="return validar()">
								</p>
							</td>
						</tr>
						
					</table>
					
				</form>
				
			</div>
	
	</body>

</html>