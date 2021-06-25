<?php
session_start();
require_once ('conexao.php');


if (empty($_POST{'usuario'}) || empty ($_POST{'senha'})){
	header ('Location: login.php');	
	exit();

}

$usuario = mysqli_real_escape_string($connection, $_POST{'usuario'});
$senha = mysqli_real_escape_string($connection, $_POST{'senha'});

$query2 = "SELECT * FROM acesso where admin = '{$usuario}' and senha = '{$senha}'";

$resultado = mysqli_query($connection, $query2);
$row = mysqli_num_rows($resultado);

if ($row > 0){
	$_SESSION['usuario'] = $usuario;
	header('Location: menu.php');
	exit();
}else{
	$_SESSION['nao_autenticado'] = true;
	header ('Location: login.php');
	exit();
}


?>