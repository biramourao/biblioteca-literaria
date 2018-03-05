<?php
		
			$sql = "select t.cod_titulo as 'Codigo', t.nome_titulo as 'Titulo', t.autor as 'Autor', f.descricao_faixa_etaria as 'Faixa_Etaria', g.descricao_genero as 'Genero' 
				from titulo_genero tg 
				inner join genero g on g.cod_genero = tg.Genero_cod_genero
				inner join titulo t on t.cod_titulo = tg.Titulo_cod_titulo 
				inner join faixa_etaria f on f.cod_faixa_etaria = t.Faixa_etaria_cod_faixa_etaria 
				where t.cod_titulo like '%$pesquisa%'";
				
				$sql1 = mysql_query($sql);
						
				$linhas = mysql_num_rows($sql1);

			for ($cont = 0; $cont < $linhas; $cont++) {
			
					$codigo = mysql_result($sql1, $cont, "Codigo");
					$titulo = mysql_result($sql1, $cont, "Titulo");
					$autor = mysql_result($sql1, $cont, "Autor");
					$faixa = mysql_result($sql1, $cont, "Faixa_Etaria");
					$genero = mysql_result($sql1, $cont, "Genero");
				echo "	
				<table id = 'resultado'>
					<tr>
						<h1>Informações do Título</h1>
				</tr>
			
				<tr>
					<td>
						Código
					</td>
					
					<td> 
					<h4> $codigo </h4>
					</td>
				</tr>	
				<tr>
					<td>
						Título
					</td>
					<td>
						<h4> $titulo </h4>
					</td>
				</tr>
					<tr>
					<td>
						Autor
					</td>
					
					<td> 
					<h4> $autor </h4>
					</td>
				</tr>	
				<tr>
					<td>
						Faixa Etária
					</td>
					<td>
						<h4> $faixa </h4>
					</td>
				</tr>
				<tr>
					<td>
						Gênero
					</td>
					
					<td> 
					<h4> $genero </h4>
					</td>
				</tr>	";

				} ?>
				</table>