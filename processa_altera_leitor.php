<?php

		include "conexao.php"; //Conexão com o BD
		
		  /* Recebendo os dados via POST **/
		$cpf = $_POST["cpf"];
		$nome = $_POST["nome"];    
		$idade = $_POST["idade"];
		$rua = $_POST["rua"];
		$numero = $_POST["numero"];
		$logradouro = $_POST["logradouro"];
		$cep = $_POST["cep"];
		$cod = $_POST["codigo"];    
		
		$consulta = mysql_query("SELECT nome FROM leitor WHERE nome = '$nome' AND cpf <> '$cod'");
		
		$linhas = mysql_num_rows ($consulta);
		
		
		if ($linhas == 1) {
		
				echo "<script> 
							alert ('Leitor já existente!')
					</script>";
					
				echo "<script> 
							location.href = ('altera_exclui_leitor.php') 
					</script>";
				exit();	
		
		} else {
		
				$altera = mysql_query("UPDATE leitor SET nome = '$nome', cpf = '$cpf', idade = '$idade', rua = '$rua', numero = '$numero', logradouro = '$logradouro', cep = '$cep' WHERE cpf = '$cod'");
		
				if ($altera == TRUE) {
				
						echo "<script> 
									alert ('$nome alterado com sucesso!') 
							</script>";
							
						echo "<script> 
									location.href = ('altera_exclui_leitor.php') 
							</script>";
						exit; // Pode ser usado com ou sem parênteses			
								
				} else {
				
						echo "<script> 
									Ocorreu um erro no servidor ao tentar alterar leitor 
							</script>";
						
						echo "<script> 
									location.href = 'altera_exclui_leitor.php' 
							</script>";		
				
				}
		
		}

?>