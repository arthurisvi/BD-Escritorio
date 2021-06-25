<?php
session_start();
include ('verifica_sessao.php');
require_once ('conexao.php');?>


<!DOCTYPE html>
<html>
<head>

	<title>Rego & Quintino - Advocacia e Consultoria</title>
	<meta charset = "UTF-8">
	<link rel="stylesheet" href ="styles/estilos.css">
<head>

<body>
	<header> 
		<div>
		<a href = "http://www.regoequintino.com.br">
		<img src = "img/novologo.png" title="Site" alt="Site">
	</a>
		<div id ="menu">
		<a href ="cadastrar_cliente.php">Novo cliente</a>
		<a href ="clientes.php">Listar clientes</a>
		<a href ="atendimento.php">Novo atendimento</a>
		<a href ="listar_atendimentos.php">Listar atendimentos</a>
		<a href ="logout.php">Sair</a>
		</div>


	</header>

	<div id ="conteudo" class= "container" style = "color: #1c333d;">

		<h2><center>Bem-vindo, <?php echo $_SESSION['usuario'];?>!</h2><br>
		<img src = "img/novofundo.png" title= "Fundo" alt = "Fundo">
		
		</div>

<footer>
	<div class = "container">
		<br> © Arthur Isvi - 2021 ©
	  Todos os direitos reservados.
	</footer>
</body>
	</html>



