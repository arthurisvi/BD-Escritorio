<?php
session_start();
include ('verifica_sessao.php');
require_once ('conexao.php');?>

<!DOCTYPE html>
<html>
<head>

	<title>Consultar clientes - Rego&Quintino</title>
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
<h2><center>Clientes</h2>
<br>
	<h6><center><a class = "btn btn-outline-light" href = "menu.php">Voltar</a></h6><br>

		<div class = "container">
<table style = "border:1px solid #ccc; width: 100%">

	<tr>
		<th>Nome</th>
		<th>CPF</th>
		<th>Data de Nascimento</th>
		<th>Número de Telefone</th>
		<th>Email</th>
		<th>Cidade</th>
		<th>Estado</th>
		<th>Anexo</th>
		<th></th>

	</tr>

	<?php
		while ($linha = mysqli_fetch_array($consulta)){

			echo '<tr><td>'.$linha['nome'].'</td>';
			echo '<td>'.$linha ['cpf'].'</td>';
			echo '<td>'.$linha ['data_nasc'].'</td>';
			echo '<td>'.$linha ['num_telefone'].'</td>';
			echo '<td>'.$linha ['email'].'</td>';
			echo '<td>'.$linha ['cidade'].'</td>';
			echo '<td>'.$linha ['estado'].'</td>';
		
		?>

		<td><a class = "btn btn-outline-light" href = "#<?php echo $linha ['cpf']; ?>">Inserir</a></td>
		<td><a class = "btn btn-outline-light" href = "cadastrar_cliente.php&editar=<?php echo $linha ['cpf']; ?>">Editar</a></td>

		<?php
			}
		?>
</table> 

<br><h6><center><a class = "btn btn-outline-light" href = "cadastrar_cliente.php">Novo cliente</a></h6>
	<h6><center><a class = "btn btn-outline-light" href = "atendimento.php">Novo atendimento</a></h6>