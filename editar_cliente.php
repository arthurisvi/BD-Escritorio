<?php

include 'conexao.php';

$cpf = $_POST ['cpf'];
$nome = $_POST ['nome'];
$data_nasc = $_POST ['data_nasc'];
$num_telefone = $_POST ['num_telefone'];
$email = $_POST ['email'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];

$query4 = "UPDATE clientes SET nome = '$nome', cpf = '$cpf', data_nasc = '$data_nasc', num_telefone = '$num_telefone', email = '$email', cidade = '$cidade', estado = '$estado' WHERE cpf = $cpf";

mysqli_query ($connection, $query4);

header ('location: clientes.php');