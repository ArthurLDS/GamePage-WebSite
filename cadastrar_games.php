
<?php
	include "conecta_banco.php";
	echo "Dados inseridos com SUCESSO!";
	$insertbd = @mysql_query(" INSERT INTO cadastro_games(nome_game,quant_game,valor_game)VALUES('$_POST[nome]','$_POST[quant]','$_POST[valor]')") or die (mysql_error());
	if ($insertbd==true) {
		echo "Dados inseridos com SUCESSO!";
	}
	else{
		echo "Falha ao inserir dados.";
	}
?>
