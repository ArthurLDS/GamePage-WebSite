<?php
		$servidor='localhost';
		$banco= 'games';
		$usuario= 'root';
		$senha='';
		$conexao = @mysql_connect($servidor, $usuario, $senha);
		if (!($conexao)) {
			echo "Falha na conexão com banco de dados.";
			exit;
		}
		$selecao = @mysql_select_db($banco,$conexao);
		if (!($selecao)) {
			echo "</br>Falha na selação do banco de dados.";
		}
?>			