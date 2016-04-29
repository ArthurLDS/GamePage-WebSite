<html>
<head>
	<meta charset="UTF-8"/>
	<?php
	$preco= $_POST['valor'];
	echo "<h1>Games com preço igual ou abaixo de R$ $preco</h1>";
	?>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php
		error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
		include "cs.php";
		$cont=0;
		$valor = $_POST['valor'];
		$result = mysql_query("SELECT * FROM cadastro_games WHERE valor_game <= '$valor'");
		while ($row = mysql_fetch_array($result)) {
			$cont++;
			echo "<table border='2'/>";   
			echo '<tr><td>Nome: </td>';
			echo '<td>';
			echo $row['nome_game'];
			echo '</td></tr>';
			echo '<tr><td>Quantidade: <td>';
			echo $row['quant_game'];
			echo '</td></tr>';
			echo '<tr><td>Preço: </td><td>R$';
			echo $row['valor_game'];
			echo '</td></tr></br>';
			echo '<tr><td>ID: </td><td>';
			echo $row['id_game'];
			echo '</td></tr>';
			}
			if($cont<=0){
				echo "<h2 id='italic'><span id='red'>Nenhum game encontrado</span> nesta faixa de preço.</h2>";
			}		
?>
</body>
</html>
