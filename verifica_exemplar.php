
<form name="verifica_exemplar" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
  <select name="titulo">
  <?
	$pesquisa = mysql_query("SELECT cod_titulo, nome_titulo FROM titulo ORDER BY nome_titulo ASC");
	$linhas = mysql_num_rows($pesquisa);
	for ($cont=0;$cont<$linhas;$cont++) {
																	
		$resultado = mysql_result($pesquisa,$cont,"nome_titulo"); //mysql_result("tabela","linha","campo")
		$cod_titulo = mysql_result($pesquisa,$cont,"cod_titulo");
	?>	
			<option id="valor" value="<?php echo $cod_titulo; ?>" onclick="chamaResultado()"> <?php echo $resultado; ?> </option>
			<script>
		function chamaResultado(){
			if (document.getElementById("valor").value == "<?$cod_titulo?>")
			document.getElementById("confirmar").visibility = visible;
			else
			document.getElementById("confirmar").visible = hidden;
			}
			
	</script>
	<?php } ?>
	
  </select>
  <input type="submit" name="confirmar" id="confirmar" value="verificar" >
  
</form>
<?$codigo_tit = $_POST['titulo'];
	echo "$codigo_tit";?>
