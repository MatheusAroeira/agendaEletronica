<?php
include_once 'painel.php';
include_once 'conexao_agendas.php';


$id = $_SESSION['id'];
$query_events = "SELECT * FROM `$id`";

$result_events = $conn->prepare($query_events);
$result_events->execute();

$events = [];

while($row_events = $result_events->fetch(PDO::FETCH_ASSOC)){
    extract($row_events);
    $events[] = [
        `id` => $id,
        `title` => $title,
       `color` => $color,
        `start` => $start,
        `end` => $end,
    ];
}
echo json_encode($events);

