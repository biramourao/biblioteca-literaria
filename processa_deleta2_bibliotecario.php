<?php
		session_start();
		include "conexao.php"; //Conex�o com o BD
		
		$codigo = $_GET['codigo'];   
			
		$deleta = mysql_query("DELETE FROM bibliotecario WHERE matr_bibliotecario = '$codigo'");
		
		if ($deleta == TRUE) {
				
				echo "<script> 
							alert ('Bibliotecario exclu�do com sucesso!') 
					</script>";
							
				echo "<script> 
							location.href = ('altera_exclui_bibliotecario.php') 
					</script>";
				exit; // Pode ser usado com ou sem par�nteses			
								
		} else {
				
				echo "<script> 
							Ocorreu um erro no servidor ao tentar excluir Bibliotecario 
					</script>";
						
				echo "<script> 
							location.href = 'altera_exclui_bibliotecario.php' 
					</script>";		
				
				}

?>