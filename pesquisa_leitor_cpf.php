			<table id="resultado">
				<tr>
						<h1>Resultado da Pesquisa</h1>
				</tr>
			
				<tr>
				
					<td>
						CPF
					</td>
					<td>
						Nome
					</td>
					<td>
						Idade
					</td>
					<td>
						Rua
					</td>
					<td>
						Numero
					</td>
					<td>
						Logradouro
					</td>	
					<td>
						CEP
					</td>						
				</tr>													
		<?php
		
			$sql = "SELECT cpf, nome, idade, rua, numero, logradouro, cep from leitor where cpf like '%$pesquisa%'";
				
			$sql1 = mysql_query($sql);
					
			$linhas = mysql_num_rows($sql1);

			echo "<h3> $linhas Leitor(es) Encontrado(s)! </h3>";											
			
			for ($cont = 0; $cont < $linhas; $cont++) {
			
				$cpf = mysql_result($sql1, $cont, "cpf");
				$nome = mysql_result($sql1, $cont, "nome");
				$idade = mysql_result($sql1, $cont, "idade");
				$rua = mysql_result($sql1, $cont, "rua");
				$numero = mysql_result($sql1, $cont, "numero");
				$logradouro = mysql_result($sql1, $cont, "logradouro");
				$cep = mysql_result($sql1, $cont, "cep");
				
			echo "	
				<tr>
					<td> 
					<h4> $cpf </h4>
					</td>
					<td>
					<h4> $nome </h4>
					</td>
					<td>
					<h4> $idade</h4>
					</td>
					<td>
					<h4> $rua </h4>
					</td>
					<td>
					<h4> $numero </h4>
					</td>
					<td>
					<h4> $logradouro </h4>
					</td>
					<td>
					<h4> $cep </h4>
					</td>
				<tr>";

			} ?>
			</table>
