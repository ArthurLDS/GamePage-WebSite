<?php
	$servidor="localhost";
	$banco="cadastro";
	$usuario="root";
	$senha="";
	$conexao= @mysql_connect($servidor, $usuario, $senha);
	if (!($conexao)) {
		echo "Falha na conexao.";
	} 
	$selecao= @mysql_select_db($banco, $conexao);
	if (!($selecao)) {
		echo "Falha na selecao.";
	}
?>