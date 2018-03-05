<?php
	include "conexao.php";
	session_start();
	
	$pesquisa = $_GET["pesquisa"];
?>

<html>
	<head>
		<title> Biblioteca Literária </title>
		
		<link rel="stylesheet" type="text/css" href="layout.css">
		
	</head>
	
	<body>
	

	<div id="principal">
	
	<p> <img src="img/banner.png"alt="Banner"> <a href="index2.php"> <img src="img/voltar.png"alt="voltar"> </a>
		</p>
	
	<div id="area_restrita">
		
			<form method="post" action="logout.php">
				<p>Seja Bem Vindo</p>
				<?php
					include "valida_login.php"
				?>
				<input type="submit" value="Sair">
			</form>
		
	</div>
	
	<?php
				include "mostra_info_titulo.php";
				
	?>
	</div>
	
	</body>

</html>