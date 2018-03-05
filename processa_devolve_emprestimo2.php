<?php
		session_start();
		include "conexao.php";

		$cod_emprestimo = $_GET["codigo"];
		$cod_exemplar = $_GET["codigoExemplar"];
				   
			
		$deleta = mysql_query("DELETE FROM emprestimo WHERE cod_emprestimo = '$cod_emprestimo'");
		
		if ($deleta == TRUE) {
				$alteraDisponibilidade = mysql_query("UPDATE exemplar SET  disponibilidade = true WHERE cod_exemplar = $cod_exemplar");
				echo "<script> 
							alert ('Devoluçao realizada com sucesso!') 
					</script>";
							
				echo "<script> 
							location.href = ('pesquisar.php?opcao=emprestimo&pesquisa=') 
					</script>";
				exit; // Pode ser usado com ou sem parênteses			
								
		} else {
				
				echo "<script> 
							Ocorreu um erro no servidor ao tentar excluir leitor 
					</script>";
						
				echo "<script> 
							location.href = ('pesquisar.php?opcao=emprestimo&pesquisa=')
					</script>";		
				
				}

?>