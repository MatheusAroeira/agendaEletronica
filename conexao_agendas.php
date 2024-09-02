<?php
//faz a conexao com a database
$usuario = 'root';
$senha = '1004';
$database = 'agendas';
$host = 'localhost';

$mysql = new mysqli($host, $usuario, $senha, $database);

if($mysql -> error){
    die("Falha ao conectar ao banco de dados: " . $mysql -> error);
}

?>