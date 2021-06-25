<?php

$server = "localhost";
$user = "root";
$password = "dev1234";
$database = "regoequintino2.0";

$connection = mysqli_connect($server, $user, $password, $database);

$query = "SELECT * FROM clientes";
$consulta = mysqli_query ($connection, $query);

##$query = "SELECT * FROM novo_atendimento";
#$consulta2 = mysqli_query ($connection, $query);