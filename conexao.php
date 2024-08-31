<?php

$usuario = 'root';
$senha = '1004';
$database = 'usuarios';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli -> error){
    die("Falha ao conectar ao banco de dados: " . $mysqli -> error);
}

?>