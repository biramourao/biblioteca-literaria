<?php
		session_start();
		include "conexao.php"; //Conexão com o BD
		
		$codigo = $_GET['codigo']; 
			
		$deleta = mysql_query("DELETE FROM titulo WHERE cod_titulo = $codigo");
		
		if ($deleta == TRUE) {
				
				echo "<script> 
							alert ('Livro excluído com sucesso!') 
					</script>";
							
				echo "<script> 
							location.href = ('altera_exclui_titulo.php') 
					</script>";
				exit; // Pode ser usado com ou sem parênteses			
								
		} else {
				
				echo "<script> 
							alert ('Ocorreu um erro no servidor ao tentar excluir Livro')
					</script>";
						
				echo "<script> 
							location.href = 'altera_exclui_titulo.php' 
					</script>";		
				
				}

?>