<?php
session_start();
include ('verifica_sessao.php');

?>

<!DOCTYPE html> 

<html>
<head>

    <title>Novo atendimento - Rego&Quintino</title>
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
<center><h2> Novo atendimento</h2><br>
<h6><a class = "btn btn-outline-light" href = "menu.php">Voltar</a></h6>
<h6><a class = "btn btn-outline-light" href = "listar_atendimentos.php">Ver atendimentos</a></h6>
<br>
</center>

<div class = "container">
<form method ="POST" action = "recebe_atendimento.php">

    </select>
	CPF
	<input class = "form-control" type= "text" name = "cpf_atendimento" placeholder = "Insira o CPF do cliente" style = "width: 30%" autocomplete="off">
     <br>Assunto
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name = "assunto" style = "width: 30%">
    <option selected>Selecione o assunto do atendimento</option>
    <option value="Aposentadoria">Aposentadoria</option>
    <option value="Outros">Outros</option>
</select>
    <br>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Detalhar atendimento</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name = "novo_atendimento" placeholder = "Insira detalhes desse atendimento" rows="50"></textarea>
      </div>
    <br><center><input type = "submit" class= "btn btn-outline-light" value = "Concluir">
</form>
