<?php

$server = "localhost";
$user = "arthur";
$password = "arthur012001";
$database = "regoequintino2.0";

$connection = mysqli_connect($server, $user, $password, $database);

$query = "CREATE TABLE acesso(

	admin varchar (30) not null,
	senha varchar (30) not null,
	primary key (admin)
)";

$execution = mysqli_query ($connection, $query);

$query = "INSERT INTO acesso (admin, senha) VALUES ('renan', '123456')";

$execution = mysqli_query ($connection, $query);
