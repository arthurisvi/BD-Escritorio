<?php
session_start();
include ('verifica_sessao.php');
require_once ('conexao.php');?>

<!DOCTYPE html>
<html>
<head>

	<title>Listar atendimentos - Rego&Quintino</title>
	<meta charset = "UTF-8">
	<link rel="stylesheet" href ="styles/bootstrap.min.css">
<head>


<style>
	body{
	background-color: #1c333d;
	color: white;
	font-family: sans-serif;

	}
</style>

<style type="text/css"> 
a:link 
{ 
 text-decoration:none;

} 
</style>
<p></p>
<h2><center>Atendimentos</h2>
<br>
	<h6><center><a class = "btn btn-outline-light" href = "menu.php">Voltar</a></h6><br>

		<div class = "container">
<center><table style = "border:1px solid #ccc; width: 90%">

	<tr>
		<th>Nome</th>
		<th>CPF</th>
		<th>Assunto</th>
		<th>Data do atendimento</th>
		<th>Anexo</th>
		<th></th>

	</tr>

	<?php

	$query = "SELECT * FROM clientes, atendimento WHERE cpf = cpf_atendimento";
	$consulta2 = mysqli_query ($connection, $query);

		while ($linha = mysqli_fetch_array($consulta2)){

			echo '<tr><td>'.$linha['nome'].'</td>';
			echo '<td>'.$linha['cpf_atendimento'].'</td>';
			echo '<td>'.$linha ['assunto'].'</td>';
			echo '<td>'.$linha ['data_atendimento'].'</td>';
		
		?>


		<td><a class = "btn btn-outline-light" href = "">Acessar</a></td>

		<?php
			}
		?>

</table> 

<br><h6><center><a class = "btn btn-outline-light" href = "atendimento.php">Novo atendimento</a></h6>
	<h6><center><a class = "btn btn-outline-light" href = "cadastrar_clientes.php">Novo cliente</a></h6>