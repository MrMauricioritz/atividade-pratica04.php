<?php

//Conectar no BD

$dbhost = 'localhost';
$dbuser = 'aluno';
$dbpassword = 'aluno';
$dbname = 'atv_prt_041_bd';

//faz a conexão com o BD

$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die ('Error connecting to MySQL Server.');

//tem os valores do formulário

$Nome = $_POST['Nome'];
$Email = $_POST['Email'];
$Escola = $_POST['Escola'];
$Estado = $_POST ['Estado'];
$Funcao = $_POST ['Funcao'];
$Nome_Equipe = $_POST ['Nome_Equipe'];

//Cria a query SQL.

$query = "INSERT INTO Membros (Nome, Email, Escola, Funcao, Nome_Equipe) VALUES ('$Nome', '$Email', '$Escola', '$Funcao', '$Nome_Equipe')";
$result = mysqli_query( $link, $query ) or die('Error querying database.');

//Fecha a conexão com o BD

mysqli_close($link);
