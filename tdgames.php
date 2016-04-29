<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="estilo.css">
<?php
		error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
		include "cs.php";
		$result = mysql_query("SELECT * FROM cadastro_games");
		while ($row = mysql_fetch_array($result)) {
			echo 'Nome: ';
			echo $row['nome_game'];
			echo "</br>";
			echo 'Quantidade: ';
			echo $row['quant_game'];
			echo "</br>";	
			echo 'Preço: R$ ';
			echo $row['valor_game'];
			echo "</br>";
			echo 'ID: ';
			echo $row['id_game'];
			echo "</br></br>";
	}
?>