<?php 
require_once 'conexao.php';

?>


<!DOCTYPE html> 


<html lang = "pt-br">

<head> 
<meta charset = "UTF-8">
<meta name = "viewport" content = "width-device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content ie="edge">
<title>Login - Rego&Quintino</title>
	
	<link rel = "stylesheet" href = "styles/styles.css">

</head>

<body>


	<form method = "POST" action = "verifica.php">
		<center><div class = "card" style = "
    	width: 370px;
    	height: 470px;
		">
			<div class = "card-top">
				<img class= "imglogin" src = "img/login.png" alt = "">
				<br>
				<img class = "nomelogo" src = "img/nomelogo.png" alt = "">
				<h3 class = "titulo"> Login </h3>
				

					<div class = "card-group">
						<label style = "width: 170px">Usuário</label>
						<input type = "text" name= "usuario" placeholder="Digite seu nome de usuário" required style = "width: 250px" autocomplete="off">

			</div>

			<div class = "card-group">
						<label style = "width: 160px">Senha</label>
						<input type = "password" name= "senha" placeholder="Digite sua senha" required style = "width: 250px">

			</div>

			<div class = "card-group">
						<br><button type="submit" class=button is-block is-link is-large is-fullwidth style ="
    		width: 130px;
    		padding-top: 15px;
    		padding-bottom: 15px;
    		padding-left: 10px;
    		padding-right: 10px";
			>ACESSAR</button>

			</div>


		</div>
	</form>
	<body>
	</html>
