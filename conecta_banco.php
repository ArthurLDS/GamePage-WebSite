<hmtl>		
	<head>
		</br></br><a href="page_inicial.html">Voltar para a pagina inicial</a>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</head>
	<body>	
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
			$nomegame= $_POST['nome'];
			echo "<center><h2>$nomegame cadastrado com sucesso! </h2></center>";
			mysql_query(" INSERT INTO cadastro_games(nome_game,quant_game,valor_game)VALUES('$_POST[nome]','$_POST[quant]','$_POST[valor]')") or die (mysql_error());
			exit;
		?>
	</body>
</html>		

