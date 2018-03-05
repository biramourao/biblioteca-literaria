<?php
		session_start();
		include "conexao.php"; //Conexão com o BD
		
		$cpf = $_SESSION['cpf'];    
			
		$deleta = mysql_query("DELETE FROM leitor WHERE cpf = '$cpf'");
		
		if ($deleta == TRUE) {
				
				echo "<script> 
							alert ('Leitor excluído com sucesso!') 
					</script>";
							
				echo "<script> 
							location.href = ('altera_exclui_leitor.php') 
					</script>";
				exit; // Pode ser usado com ou sem parênteses			
								
		} else {
				
				echo "<script> 
							Ocorreu um erro no servidor ao tentar excluir leitor 
					</script>";
						
				echo "<script> 
							location.href = 'altera_exclui_leitor.php' 
					</script>";		
				
				}

?>