<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>AL Games</title>
	<script src="funcoes.js"></script>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header class="cabecalho">
		<nav id="nav">
			<ul id="menuu">
				<li id="menu" class="logo"><a id="page_inicial.html" href="#">Home</a></li>
				<li id="menu"><a id="cadastro" href="cadastro.html">Cadastro</a></li>
				<li id="menu"><a id="cadastro" href="login.html">Login</a></li>
				<li id="menu"><a id="cadastro" href="tdmgames.html">Lista de games</a></li>
				<li id="menu" class="cons"><a id="cadastro" href="page_inicial.html">Consultas</a>
					<ul>
						<li class="sub"><a href="consultar_games_pornome.html">Por nome</a></li>
						<li class="sub"><a href="consultar_game_porvalor.html">Por valor</a></li>
						<li class="sub"><a href="tdgames.php">Geral</a></li></li>
				</ul>		
				<li id="menu"><a id="cadastro" href="cadastro_games.html">Cadastro games</a></li>
			</ul>
			<form method="post"action="consultar_game_pornome.php">
				<input name="nomegame" id="pesquisa" type="text" placeholder=" Pesquisar" required="">
				<input id="buscar" type="submit" value="">
			</form>
			<a onmousemove="mudafoto('redesrociasefect/facebok-icon.png')" onmouseout= "mudafoto('facebok-icon.png')"  class="rdlink"href="https://www.facebook.com/arthur.l.ds" target="_blanck"><img class="icoRS" id="fb" src="facebok-icon.png"></a>
			<a onmousemove="mudafoto1('redesrociasefect/linkedin-icon.png')" onmouseout= "mudafoto1('linkedin-icon.png')"  class="rdlink"href="#"><img class="icoRS" id="lk" src="linkedin-icon.png"></a>
			<a onmousemove="mudafoto2('redesrociasefect/gplus-icon.png')" onmouseout= "mudafoto2('gplus-icon.png')" class="rdlink"href="#"><img class="icoRS" id="gplus" src="gplus-icon.png"></a>
			<a onmousemove="mudafoto3('redesrociasefect/youtube-icon.png')" onmouseout= "mudafoto3('youtube-icon.png')" class="rdlink"href="#"><img class="icoRS" id="youtube" src="youtube-icon.png"></a>
		</nav>
		<img id="logo"src="gamestop.png"/>
		<fieldset class="login">
			<form method='post' action='login.php'>
				<span><b>Login</b></span></br>
				</br><input id='login' type='text' name='usuario' required=''placeholder='Usuário'/></br></br>
				<input id='login'type='password' name='senha' required='' placeholder='Senha'/></br>
				</br><input id='login' type='submit' value='Entrar'/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='cadastro.html'>Cadastro</a>
			</form> 
		</fieldset>	
		</header>
<?php
	$nomegame= $_POST['nomegame'];
	echo "<h1>Resultados para: $nomegame</h1>";

	error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	require "cs.php";
	$cont=0;
	$busca = $_POST['nomegame']; //busca é uma variável e nome é o nome do campo do form
	$result = @mysql_query("SELECT * FROM cadastro_games WHERE nome_game = '$busca'");
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
	if($cont==0){
		echo "<h2 id='italic'><span id='red'>Nenhum game encontrado com este nome.</span></h2>";
	}	
?>
	<footer>
			<h3 id="footer">Developed by Arthur Lima de Souza | march 2016</h3>
			<map name="meumapa">
				<area shape="rect" coords="0,0,32,32" href="https://plus.google.com/u/0/107250925263431865388/posts?hl=pt-BR.com.br" target="_blanck"/>
			</map>	
			<img id="redess" src="topo-sociais.png" usemap="#meumapa">
			<h4><center>ALGames Todos os direitos revervados</center><h4>
		</footer>
</body>
</html>