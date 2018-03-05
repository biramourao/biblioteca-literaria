
			
				<table id="resultado">
				<tr>
						<h1>Resultado da Pesquisa</h1>
				</tr>
			
				<tr>
				
					<td>
						Código
					</td>
					<td>
						Titulo
					</td>
					<td>
						Autor
					</td>
					<td>
						Faixa Etária
					</td>
					<td>
						Gênero
					</td>		
					<td>
						adic. exemplares
					</td>	
				</tr>													
		<?php
		
			$sql = "select t.cod_titulo as 'Codigo', t.nome_titulo as 'Titulo', t.autor as 'Autor', f.descricao_faixa_etaria as 'Faixa_Etaria', g.descricao_genero as 'Genero' 
				from titulo_genero tg 
				inner join genero g on g.cod_genero = tg.Genero_cod_genero
				inner join titulo t on t.cod_titulo = tg.Titulo_cod_titulo 
				inner join faixa_etaria f on f.cod_faixa_etaria = t.Faixa_etaria_cod_faixa_etaria 
				where t.nome_titulo like '%$pesquisa%'";
				
				$sql1 = mysql_query($sql);
						
				$linhas = mysql_num_rows($sql1);

				echo "<h3> $linhas Livro(s) Encontrado(s)! </h3>";											
			
			for ($cont = 0; $cont < $linhas; $cont++) {
			
					$codigo = mysql_result($sql1, $cont, "Codigo");
					$titulo = mysql_result($sql1, $cont, "Titulo");
					$autor = mysql_result($sql1, $cont, "Autor");
					$faixa = mysql_result($sql1, $cont, "Faixa_Etaria");
					$genero = mysql_result($sql1, $cont, "Genero");
				echo "	
					<tr>
						<td> 
						<h4> $codigo </h4>
						</td>
						<td>
						<h4> $titulo </h4>
						</td>
						<td>
						<h4> $autor </h4>
						</td>
						<td>
						<h4> $faixa </h4>
						</td>
						<td>
						<h4> $genero </h4>
						</td>
						<td>
						<h4> 
							<form method='post' action='processa_adiciona_exemplar.php'>
								<p>Qtd. Exemplares</p>
								<INPUT TYPE='hidden' NAME='codigo' VALUE='$codigo'>
								<input type='text' name='qtdExemplares' size='1'>
								<input type='submit' value='adic.'>
							</form>
						</td>
					<tr>";

				} ?>
			</table>

