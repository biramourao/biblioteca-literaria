<?php

		include "conexao.php"; //Conexão com o BD
		
		  /* Recebendo os dados via POST **/
		

		$nome_titulo = $_POST["nome_titulo"];    
		$autor = $_POST["autor"];
		$faixa = $_POST["faixa_etaria"];
		$genero = $_POST["genero"];
		$cod = $_POST["codigo"];    
		
		$consulta = mysql_query("SELECT nome_titulo FROM titulo WHERE nome_titulo = '$nome_titulo' AND cod_titulo <> '$cod'");
		
		$linhas = mysql_num_rows ($consulta);
		
		
		if ($linhas == 1) {
		
				echo "<script> 
							alert ('Título já existente!')
					</script>";
					
				echo "<script> 
							location.href = ('altera_exclui_titulo.php') 
					</script>";
				exit();	
		
		} else {
		
				$altera = mysql_query("UPDATE titulo t INNER JOIN titulo_genero tg ON t.cod_titulo = tg.titulo_cod_titulo SET t.nome_titulo = '$nome_titulo', t.autor = '$autor', t.Faixa_etaria_cod_faixa_etaria = '$faixa', tg.Genero_cod_genero = '$genero' WHERE t.cod_titulo = '$cod'");
		
				if ($altera == TRUE) {
				
						echo "<script> 
									alert ('$nome_titulo alterado com sucesso!') 
							</script>";
							
						echo "<script> 
									location.href = ('altera_exclui_titulo.php') 
							</script>";
						exit; // Pode ser usado com ou sem parênteses			
								
				} else {
				
						echo "<script> 
									Ocorreu um erro no servidor ao tentar alterar título 
							</script>";
						
						echo "<script> 
									location.href = 'altera_exclui_titulo.php' 
							</script>";		
				
				}
		
		}

?>