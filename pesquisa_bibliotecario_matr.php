			<table id="resultado">
				<tr>
						<h1>Resultado da Pesquisa</h1>
				</tr>
			
				<tr>
				
					<td>
						Matricula
					</td>
					<td>
						Nome
					</td>
					<td>
						Login
					</td>
									
				</tr>													
		<?php
		
			$sql = "SELECT matr_bibliotecario, nome_bibliotecario, login_bibliotecario from bibliotecario where matr_bibliotecario like '%$pesquisa%'";
				
			$sql1 = mysql_query($sql);
					
			$linhas = mysql_num_rows($sql1);

			echo "<h3> $linhas Bibliotecario(s) Encontrado(s)! </h3>";											
			
			for ($cont = 0; $cont < $linhas; $cont++) {
			
				$matricula = mysql_result($sql1, $cont, "matr_bibliotecario");
				$nome = mysql_result($sql1, $cont, "nome_bibliotecario");
				$login = mysql_result($sql1, $cont, "login_bibliotecario");
				
			echo "	
				<tr>
					<td> 
					<h4> $matricula </h4>
					</td>
					<td>
					<h4> $nome </h4>
					</td>
					<td>
					<h4> $login</h4>
					</td>
				<tr>";

			} ?>
			</table>
