<?php
	session_start();
?>

<html>
	<head>
		<title> Biblioteca Literária </title>
		
		<link rel="stylesheet" type="text/css" href="layout.css">
		
		<script language = "javascript" type = "text/javascript">
		
		function validar(){
		
			var nome = form_cadastra_leitor.nome.value;
			var cpf = form_cadastra_leitor.cpf.value;
			var idade = form_cadastra_leitor.idade.value;
			var logradouro = form_cadastra_leitor.logradouro.value;
			var cep = form_cadastra_leitor.cep.value;
			
			if (cpf==""){
				alert ('Preencha o campo cpf');
				form_cadastra_leitor.cpf.focus();
				return false;
			}
			
			if (nome==""){
				alert ('Preencha o campo nome');
				form_cadastra_leitor.nome.focus();
				return false;
			}
			
			if (idade==""){
				alert ('Preencha o campo idade');
				form_cadastra_leitor.idade.focus();
				return false;
			}
			
			if (cep==""){
				alert ('Preencha o campo cep');
				form_cadastra_leitor.cep.focus();
				return false;
			}
			
			if (logradouro==""){
				alert ('Preencha o campo logradouro');
				form_cadastra_leitor.logradouro.focus();
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
					Formulário de Cadastro de Leitores
				</p>
				<form name="form_cadastra_leitor" method="post"  action="processa_cadastra_leitor.php">
				
					<table>
					
						<tr>
							<td>
								<p>
									CPF*:
								</p>
							</td>
							
							<td>
								<p>
									<input type="text" name = "cpf" id="cpf">
								</p>
							</td>
						</tr>
						
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
									Idade*:
								</p>
							</td>
							<td>
								<p>
									<input type="text" name = "idade" id="idade">	
								</p>
							</td>
						</tr>
						
						<tr>
							<td>
								<p>
									CEP*:
								</p>
							</td>
							<td>
								<p>
									<input type="text" name = "cep" id="cep">	
								</p>
							</td>
						</tr>
						
						<tr>
							<td>
								<p>
									Logradouro*:
								</p>
							</td>
							<td>
								<p>
									<input type="text" name = "logradouro" id="logradouro">	
								</p>
							</td>
						</tr>
						
						<tr>
							<td>
								<p>
									Rua:
								</p>
							</td>
							<td>
								<p>
									<input type="text" name = "rua" id="rua">	
								</p>
							</td>
						</tr>
						
						<tr>
							<td>
								<p>
									Número:
								</p>
							</td>
							<td>
								<p>
									<input type="text" name = "numero" id="numero">	
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
									<input type="submit" value="Cadastrar Leitor" onclick="return validar()">
								</p>
							</td>
						</tr>
						
					</table>
					
				</form>
				
			</div>
	
	</body>

</html>