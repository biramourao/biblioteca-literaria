<?php
		session_start();
		include "conexao.php"; //Conex�o com o BD
		
		$codigo = $_GET['codigo']; 
			
		$deleta = mysql_query("DELETE FROM titulo WHERE cod_titulo = $codigo");
		
		if ($deleta == TRUE) {
				
				echo "<script> 
							alert ('Livro exclu�do com sucesso!') 
					</script>";
							
				echo "<script> 
							location.href = ('altera_exclui_titulo.php') 
					</script>";
				exit; // Pode ser usado com ou sem par�nteses			
								
		} else {
				
				echo "<script> 
							alert ('Ocorreu um erro no servidor ao tentar excluir Livro')
					</script>";
						
				echo "<script> 
							location.href = 'altera_exclui_titulo.php' 
					</script>";		
				
				}

?>