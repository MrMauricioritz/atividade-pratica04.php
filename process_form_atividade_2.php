<?php

//Conecta no BD

$dbhost = 'localhost';
$dbuser = 'aluno';
$dbpassword = 'aluno';
$dbname = 'atv_prt_042_bd';
//Efetua a conexão com o BD
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die ('Error connecting to MySQL Server.');

//tem os valores do formulário

$testID = $_POST['testID'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

//Cria a Query SQL
$query = "INSERT INTO teste1 (nome, testID, idade) VALUES ('$nome', '$testID', '$idade')";
$result = mysqli_query( $link, $query ) or die('Error querying database.');

//Fecha a conexão com o BD

mysqli_close($link);
?>
