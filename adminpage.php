<?php
	require_once 'CLASSES/usuarios.php';
	$u = new Usuario();
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Tela Admin</title>
	<link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
<div id="corpo-form-cad">
	<h1>Cadastro dos produtos</h1>
	<form method="POST">
		<input type="text" name="nome_produto" placeholder="Nome do Produto" maxlength="30">
        <input type="text" name="quantidade" placeholder="Quantidade">
		<input type="text" name="valor" placeholder="Valor"> 


		<input type="submit" value="Cadastrar">
	</form>
</div>