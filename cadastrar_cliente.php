<?php
session_start();
include ('verifica_sessao.php');

?>

<!DOCTYPE html> 

<html>
<head>

    <title>Cadastrar clientes - Rego&Quintino</title>
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
<center><h2> Novo cliente</h2><br>
<h6><a class = "btn btn-outline-light" href = "menu.php">Voltar</a></h6>
<h6><a class = "btn btn-outline-light" href = "clientes.php">Ver clientes</a></h6>
<br>
</center>

<div class = "container">
<form method ="POST" action = "recebe_dados.php">
	Nome
	<input class = "form-control" type= "text" name = "nome" placeholder = "Insira o nome do cliente" autocomplete="off">
	CPF
	<input class = "form-control" type= "text" name = "cpf" placeholder = "Insira o CPF do cliente" autocomplete="off">
	Data de nascimento
	<input class = "form-control"  type= "date" name = "data_nasc" placeholder = "Insira a data de nascimento do cliente">
	Número de telefone
	<input class = "form-control" type= "text" name = "num_telefone" placeholder = "Insira o número de telefone do cliente" autocomplete="off">
	Email
	<input class = "form-control" class = "form-control" type= "email" name = "email" placeholder = "Insira o email do cliente" autocomplete="off">
	Cidade
	<input class = "form-control" type= "text" name = "cidade" placeholder = "Insira a cidade que reside o cliente" autocomplete="off"> 
	Estado <br>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name = "estado">
    <option value="">Selecione</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MT">Mato Grosso</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
</select> <br><br>
<center><input type = "submit" class= "btn btn-outline-light" value = "Cadastrar">
</form>
