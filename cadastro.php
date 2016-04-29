<meta charset="UTF-8"/>
<script type="text/javascript">
	function alerta() {
		alert("Este email ou usuario já está cadastrado, tente novamente.");
	}
	function voltar() {
		setTimeout("window.location='cadastro.html'", 1000);
	}
	function login() {
		setTimeout("window.location='login.html'", 3000)
	}
</script>
<?php
	require "conecta.php";
	$email= $_POST['email'];
	$usuario= $_POST['usuario'];
	$senha= $_POST['senha'];
	$conferis=@mysql_query("SELECT * FROM dados WHERE email = '$email' or usuario= '$usuario'");
	/*$row; //mysql_num_rows($conferis);   ARRUMAR ISTO DEPOIS!!
	if ($row>0) {
		echo "<script>alerta()</script>";
		echo "<script>voltar()</script>";
		echo "Redirecionando...";
	}
	else{*/   
		require "email.php";
		@mysql_query("INSERT INTO dados(email, usuario, senha) VALUES ('$email', '$usuario', '$senha')");
		echo "<h2>Cadastro efetuado com sucesso!<h2>";
		echo "<script>login()</script>";	
	//}
?>
