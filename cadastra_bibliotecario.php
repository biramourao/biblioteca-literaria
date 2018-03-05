<?php
	session_start();
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
					Formulário de Cadastro de Bibliotecário
				</p>
				<form name="form_cadastra_bibliotecario" method="post"  action="processa_cadastra_bibliotecario.php">
				
					<table>
					
						<tr>
							<td>
								<p>
									Nome*:
								</p>
							</td>
							
							<td>
								<p>
									<input type="text" name = "nome" id="nome">
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
									<input type="text" name="login">
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
									<input type="password" name = "senha" id="senha">	
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
									<input type="submit" value="Cadastrar Bibliotecário" onclick="return validar()">
								</p>
							</td>
						</tr>
						
					</table>
					
				</form>
				
			</div>
	
	</body>

</html>