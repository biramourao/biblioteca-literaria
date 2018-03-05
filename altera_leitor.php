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
		
			var nome = form_cadastra_leitor.nome.value;
			var cpf = form_cadastra_leitor.cpf.value;
			var idade = form_cadastra_leitor.idade.value;
			var rua = form_cadastra_leitor.rua.value;
			var numero = form_cadastra_leitor.numero.value
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
			
			if (rua==""){
				alert ('Preencha o campo rua');
				form_cadastra_leitor.rua.focus();
				return false;
			}
			
			if (numero==""){
				alert ('Preencha o campo numero');
				form_cadastra_leitor.numero.focus();
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
					Formulário de Alteração de Leitores
				</p>
				
				<?php
										
						$cod = $_GET["codigo"];
												
						$pesquisa = mysql_query("SELECT cpf, nome, idade, rua, numero, logradouro, cep FROM leitor WHERE cpf = $cod");
						
						$cpf = mysql_result($pesquisa, 0, "cpf");
						$nome = mysql_result($pesquisa, 0, "nome");
						$idade = mysql_result($pesquisa, 0, "idade");
						$rua = mysql_result($pesquisa, 0, "rua");
						$numero = mysql_result($pesquisa, 0, "numero");
						$logradouro = mysql_result($pesquisa, 0, "logradouro");
						$cep = mysql_result($pesquisa, 0, "cep");	
										
				?>
				
				<form name="form_altera_leitor" method="post"  action="processa_altera_leitor.php">
				
				<input name = "codigo" type = "hidden" value = "<?php echo $cpf; ?>">
				
					<table>
					
						<tr>
							<td>
								<p>
									CPF*:
								</p>
							</td>
							
							<td>
								<p>
									<input type="text" name = "cpf" id="cpf" value = "<?php echo $cpf;?>">
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
									<input type="text" name = "nome" id="nome" value = "<?php echo $nome;?>">	
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
									<input type="text" name = "idade" id="idade" value = "<?php echo $idade;?>">	
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
									<input type="text" name = "cep" id="cep" value = "<?php echo $cep;?>">	
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
									<input type="text" name = "logradouro" id="logradouro" value = "<?php echo $logradouro;?>">	
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
									<input type="text" name = "rua" id="rua" value = "<?php echo $rua;?>">	
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
									<input type="text" name = "numero" id="numero" value = "<?php echo $numero;?>">	
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
									<input type="submit" value="Alterar Leitor" onclick="return validar()">
								</p>
							</td>
						</tr>
						
					</table>
					
				</form>
				
			</div>
	
	</body>

</html>