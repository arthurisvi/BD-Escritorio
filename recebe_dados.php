<?php 
include "conexao.php";


$nome = $_POST['nome'];
$cpf = $_POST ['cpf'];
$data_nasc = $_POST ['data_nasc'];
$num_telefone = $_POST ['num_telefone'];
$email = $_POST ['email'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];


	$query_c = "INSERT INTO clientes (cpf, nome, data_nasc, num_telefone, email, cidade, estado) VALUES ('$cpf', '$nome', '$data_nasc', '$num_telefone', '$email', '$cidade', '$estado')";

mysqli_query ($connection, $query_c);

header ('Location:clientes.php');

