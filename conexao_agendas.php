<?php
//faz a conexao com a database
$usuario = 'root';
$senha = '1004';
$database = 'events';
$host = 'localhost';

$mysql = new mysqli($host, $usuario, $senha, $database);
$conn = new PDO("mysql:host=$host; dbname = $database", $usuario, $senha);

if($mysql -> error){
    die("Falha ao conectar ao banco de dados: " . $mysql -> error);
}

?>