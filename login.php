<html>
<head>	
<script type="text/javascript">
function loginsucesso(){
	setTimeout("window.location='page_inicial.php'", 2000);
}
function loginfail(){
	setTimeout("window.location='login.html'", 3000);
}
</script>
</head>
<body>
<?php
	require "conecta.php";
	$usuario= $_POST['usuario'];
	$senha= $_POST['senha'];
	$verUser= @mysql_query("SELECT * FROM dados WHERE usuario = '$usuario' and senha='$senha'") ;
	$row= mysql_num_rows($verUser);
	if ($row > 0) {
		session_start();
		echo "<h2>Logado com sucesso! aguarde um instante...</h2>";
		echo "<script>loginsucesso()</script>";
	}
	else{
		session_start();
		echo "<h2>Senha ou usuario incorretos, tente novamente...</h2>";
		echo "<script>loginfail()</script>";
	}
?>
<a href="cadastro.html">Voltar</a>
</body>
</html>