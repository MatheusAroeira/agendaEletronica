<?php
    include_once 'conexao_agendas.php';
    include_once 'painel.php';

    $table_name = strtolower($_SESSION['nome']);

    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $color = $_POST['color'];

    // Prepara a instrução SQL para inserção
    $sql = "INSERT INTO `$table_name` (`title`, `color`, `start`, `end`) VALUES (`$title`, `$color`, `$start`, `$end`)";
    $mysql->query($sql) or die("Falha na execucao do codigo SQL: " . $mysql -> error);

    
   
?>