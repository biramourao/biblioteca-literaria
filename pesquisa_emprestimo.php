
			
				<table id="resultado">
				<tr>
						<h1>Resultado da Pesquisa</h1>
				</tr>
			
				<tr>
				
					<td>
						Código
					</td>
					<td>
						Data de Emprestimo
					</td>
					<td>
						Data de Devolução
					</td>
					<td>
						Leitor
					</td>
					<td>
						Bibliotecario
					</td>	
					<td>
						Codigo do Exemplar
					</td>
					<td>
						Titulo do Exemplar
					</td>		
					<td>
						Ação
					</td>
				</tr>													
		<?php
		
			$sql = "SELECT em.cod_emprestimo AS  'CodigoEmprestimo', em.data_emprestimo AS  'DataEmprestimo', em.data_devolucao AS  'DataDevolucao', l.nome AS  'Leitor', b.nome_bibliotecario AS  'Bibliotecario', em.Exemplar_cod_exemplar AS  'CodigoExemplar', t.nome_titulo AS  'Titulo'
					FROM emprestimo em
					INNER JOIN leitor l ON l.cpf = em.Leitor_cpf
					INNER JOIN bibliotecario b ON em.Bibliotecario_matr_bibliotecario = b.matr_bibliotecario
					INNER JOIN exemplar ex ON ex.cod_exemplar = em.Exemplar_cod_exemplar
					INNER JOIN titulo t ON t.cod_titulo = ex.Titulo_cod_titulo
					WHERE em.cod_emprestimo LIKE '%$pesquisa%' ORDER BY l.nome ASC ";
				
				$sql1 = mysql_query($sql);
						
				$linhas = mysql_num_rows($sql1);

				echo "<h3> $linhas Emprestimo(s) Encontrado(s)! </h3>";											
			
			for ($cont = 0; $cont < $linhas; $cont++) {
			
					$codigoEmprestimo = mysql_result($sql1, $cont, "CodigoEmprestimo");
					$dataEmprestimo = mysql_result($sql1, $cont, "DataEmprestimo");
					$dataDevolucao = mysql_result($sql1, $cont, "DataDevolucao");
					$leitor = mysql_result($sql1, $cont, "Leitor");
					$bibliotecario = mysql_result($sql1, $cont, "Bibliotecario");
					$codigoExemplar = mysql_result($sql1, $cont, "CodigoExemplar");
					$titulo = mysql_result($sql1, $cont, "Titulo");
				echo "	
					<tr>
						<td> 
						<h4> $codigoEmprestimo </h4>
						</td>
						<td> 
						<h4> $dataEmprestimo </h4>
						</td>
						<td> 
						<h4> $dataDevolucao </h4>
						</td>
						<td>
						<h4> $leitor </h4>
						</td>
						<td>
						<h4> $bibliotecario </h4>
						</td>
						<td>
						<h4> $codigoExemplar </h4>
						</td>
						<td>
						<h4> $titulo </h4>
						</td>
						<td> 																
							<a href = 'processa_renova_emprestimo.php?codigo=$codigoEmprestimo'> 
													
									Renovar
															
							</a> 
													
									/ 
															
							<a href = 'processa_devolve_emprestimo1.php?codigo=$codigoEmprestimo&codigoExemplar=$codigoExemplar'> 
													
									Devolver 
															
							</a> 																
						</td>
					<tr>";

				} ?>
			</table>

