<?php
try{
	//Removico os dados do banco de dados
$pdo=new PDO ("mysql:host=localhost;dbname=database;charset=utf8","login","password");
 
}
catch (PDOException $e)
{
	//header("Location:falha.php");
	echo"Falha na Conexão com o Banco de Dados...<br>".$e->getMessage();
}
?>