<?php
		
			$sql = "SELECT cpf, nome, idade, rua, numero, logradouro, cep from leitor where cpf like '%$pesquisa%'";
				
			$sql1 = mysql_query($sql);
					
			$linhas = mysql_num_rows($sql1);
									
			
			for ($cont = 0; $cont < $linhas; $cont++) {
			
				$cpf = mysql_result($sql1, $cont, "cpf");
				$nome = mysql_result($sql1, $cont, "nome");
				$idade = mysql_result($sql1, $cont, "idade");
				$rua = mysql_result($sql1, $cont, "rua");
				$numero = mysql_result($sql1, $cont, "numero");
				$logradouro = mysql_result($sql1, $cont, "logradouro");
				$cep = mysql_result($sql1, $cont, "cep");
				
			echo "
				<table id='resultado'>
				<tr>
						<h1>Informações do Leitor</h1>
				</tr>
			
				<tr>
					<td>
						CPF
					</td>
					
					<td> 
					<h4> $cpf </h4>
					</td>
				</tr>	
				<tr>
					<td>
					Nome
					</td>
					<td>
						<h4> $nome </h4>
					</td>
				</tr>
					<tr>
					<td>
						Idade
					</td>
					
					<td> 
					<h4> $idade </h4>
					</td>
				</tr>	
				<tr>
					<td>
						Rua
					</td>
					<td>
						<h4> $rua </h4>
					</td>
				</tr>
				<tr>
					<td>
						Numero
					</td>
					
					<td> 
					<h4> $numero </h4>
					</td>
				</tr>	
					<tr>
					<td>
						Logradouro
					</td>
					
					<td> 
						<h4> $logradouro </h4>
					</td>
				</tr>	
				<tr>
					<td>
						CEP
					</td>
					<td>
						<h4> $cep </h4>
					</td>
				</tr>	";

			} ?>
			</table>
