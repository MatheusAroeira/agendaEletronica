<?php
include 'protect.php';
include_once 'conexao_agendas.php';

$nome = $mysqli->real_escape_string($_POST['nome']);

$query_agendas = "SELECT * FROM '$nome'";
$result_agendas = $mysql->prepare($query_events);
$result_agendas -> execute();

$eventos = [];

while($row_events = $result_agendas->fetch(PDO::FETCH_ASSOC)){
    extract($row_events);
    $eventos[] = [
        'id' => $id,
        'title' => $title,
       'color' => $color,
        'start' => $start,
        'end' => $end,
    ];
}
echo json_encode($eventos);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sua Agenda</title>

    <script src='js/index.global.min.js'></script>
    <script src = 'js/core/locales-all.global.min.js'></script>
    <script src = 'js/custom.js'></script>

</head>
<body>
    <h1>Bem Vindo a sua Agenda, <?php echo $_SESSION['nome']; ?></h1>

    <p> 
        <button class = "logoutbutton" type = "button">Sair</button>
    </p>

    <div id='calendar'></div>
    
</body>
</html>

<script >
    var button = document.querySelector('.logoutbutton');
    button.addEventListener('click', function(){
        location.href = 'logout.php';  // Logout.php é a página que fecha a sessão do usuário
    })


</script>