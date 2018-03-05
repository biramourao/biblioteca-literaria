<?php

		include "conexao.php"; //Conexão com o BD
		
		  /* Recebendo os dados via POST **/
		$nome_bibliotecario = $_POST["nome_bibliotecario"];
		$login_bibliotecario = $_POST["login_bibliotecario"];
		$senha_bibliotecario = $_POST["senha_bibliotecario"];
		$cod = $_POST["codigo"];    
		
		$consulta = mysql_query("SELECT nome_bibliotecario FROM bibliotecario WHERE nome_bibliotecario = '$nome_bibliotecario' AND matr_bibliotecario <> '$cod'");
		
		$linhas = mysql_num_rows ($consulta);
		
		
		if ($linhas == 1) {
		
				echo "<script> 
							alert ('Bibliotecário já existente!')
					</script>";
					
				echo "<script> 
							location.href = ('altera_exclui_bibliotecario.php') 
					</script>";
				exit();	
		
		} else {
		
				$altera = mysql_query("UPDATE bibliotecario SET nome_bibliotecario = '$nome_bibliotecario', login_bibliotecario = '$login_bibliotecario', senha_bibliotecario = '$senha_bibliotecario' WHERE matr_bibliotecario = '$cod'");
		
				if ($altera == TRUE) {
				
						echo "<script> 
									alert ('$nome_bibliotecario alterado com sucesso!') 
							</script>";
							
						echo "<script> 
									location.href = ('altera_exclui_bibliotecario.php') 
							</script>";
						exit; // Pode ser usado com ou sem parênteses			
								
				} else {
				
						echo "<script> 
									Ocorreu um erro no servidor ao tentar alterar bibliotecário 
							</script>";
						
						echo "<script> 
									location.href = 'altera_exclui_bibliotecario.php' 
							</script>";		
				
				}
		
		}

?>