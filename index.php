<?php 
require_once 'CLASSES/usuarios.php';
$u = new Usuario();
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Projeto Login</title>
	<link rel="stylesheet" href="CSS/estilo.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
<div id="corpo-form">
	<h1>Entrar</h1>
	<form method="POST">
		<input type="email" placeholder="Usuário" name="email">
		<input type="password" placeholder="Senha" name="senha">
		<input type="submit" value="ACESSAR">
		<a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se!</strong></a>
	</form>
</div>
<?php
$link = mysqli_connect('localhost', 'root', '') or die(mysql_error());
mysqli_select_db($link, 'tela_login') or die(mysql_error());


if(isset($_POST['email']) && isset($_POST['senha'])){
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$get = mysqli_query($link, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
	$num = mysqli_num_rows($get);

	if($num >= 1){
		while($percorrer = mysqli_fetch_array($get)){
			$adm = $percorrer['id_usuario'];

			if($adm == 9){
				header("location: adminpage.php");
			}else{
				header("location: areaPrivada.php");
			}
		}
	}
}
?>









</body>
</html>

































