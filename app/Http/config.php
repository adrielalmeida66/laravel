<?php
// conexão com o banco de dados 
$dbHost = 'containers-us-west-192.railway.app:5515';
$dbUsername = 'root';
$dbPasword = 'MR6zCzbSKLuwDqquPf4m';
$dbName = 'railway';

$mysqli = new mysqli($dbHost, $dbUsername, $dbPasword, $dbName);

if ($mysqli->error){
    die("Falha ao conectar ao banco de dados: " . $conexao->error) ;
}

?>