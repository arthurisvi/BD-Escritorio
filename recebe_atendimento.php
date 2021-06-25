<?php 
include "conexao.php";

$cpf_atendimento = $_POST ['cpf_atendimento'];
$assunto = $_POST ['assunto'];
$novo_atendimento = $_POST ['novo_atendimento'];
$data_atendimento = date ("Y-m-d");


$query_c = "INSERT INTO atendimento (id_atendimento, cpf_atendimento, assunto, novo_atendimento, data_atendimento) VALUES (NULL, '$cpf_atendimento', '$assunto', '$novo_atendimento', '$data_atendimento')";

$execution = mysqli_query ($connection, $query_c);

if ($execution){

	$query = "SELECT * FROM clientes, atendimento WHERE cpf = cpf_atendimento";
	$consulta2 = mysqli_query ($connection, $query);

	while ($linha = mysqli_fetch_array($consulta2)){
	$arquivo = fopen ($linha['nome']."-".$data_atendimento.'.txt', 'w');

	fwrite ($arquivo,"Nome:". " ".$linha['nome']. "\r\n". "CPF:"." ".$cpf_atendimento."\r\n". "Assunto:". " ". $assunto. "\r\n"."\r\n". $novo_atendimento);

	fclose($arquivo);
	
    }
}

header ('Location:listar_atendimentos.php');