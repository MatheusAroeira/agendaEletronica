<?php
include 'protect.php';
include 'conexao_agendas.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <script src = 'js/custom.js'></script>
    <script src = 'js/jquery-3.7.1.min.js'></script>

    <title>Sua Agenda</title>

    <div class="topper">

        <h1 id="painel-mensagem">Bem Vindo a sua Agenda, <?php echo $_SESSION['nome']; ?></h1>
        <button class = "button" type = "button">Sair</button>
        <button id="add_button" class = "button" type = "button">Adicionar Evento</button>
        <button id="update_button" class = "button" type = "button">Editar Evento</button>
        <button id="delete_button" class = "button" type = "button">Excluir Evento</button>
    </div>

</head>
<body>
    
    <div id='calendar'></div>
    <script src='js/index.global.min.js'></script>
    <script src = 'js/core/locales-all.global.min.js'></script>

    <div id="addtela" class="tela">
        <form id="add" action="" method = "POST" class="add-form">
            <label>Titulo</label>
            <input type="text" name="title">
            <br><br>

            <label>Inicio</label>
            <input type="date" name="start">
            <br><br>

            <label>Termino</label>
            <input type="date" name="end">
            <br><br>

            <label>Cor</label>
            <input type="color" name="color">
            <br><br>

            <button id="submit" class="button" type="submit">Adicionar</button>
            <button id="back_button" class="button" type="button">Voltar</button>
        </form>
    </div>
    
</body>
</html>

<script >
    var button = document.querySelector('.button');
    button.addEventListener('click', function(){
        location.href = 'logout.php';  // Logout.php é a página que fecha a sessão do usuário
    })

    
    $('#addtela').hide();

    $('#add_button').click(function(){
        $('#calendar').fadeToggle();
        $('#addtela').fadeToggle();
        $('.topper').fadeToggle();
        $('#back_button').click(function(){
            $('#calendar').fadeToggle();
            $('#addtela').fadeToggle();
            $('.topper').fadeToggle();
    });
    });

</script>
<?php
if(isset($_POST['title']) && isset($_POST['color']) && isset($_POST['start']) && isset($_POST['end'])) {
    $table_name = strtolower($_SESSION['id']);

    if(strlen($_POST['title']) == 0) {
        echo "Digite o titulo";
    }else if(strlen($_POST['start']) == 0){
        echo "escolha a data de inicio";
    } else if(strlen($_POST['end']) == 0) {
        echo "escolha a data final";
    } else {
        $title = $mysql->real_escape_string($_POST['title']);
        $color = $mysql->real_escape_string($_POST['color']);
        $start = $mysql->real_escape_string($_POST['start']);
        $end = $mysql->real_escape_string($_POST['end']);
        $id = uniqid();

        $sql = "INSERT INTO `$table_name`(id,title, color, start, end) VALUES ('$id','$title', '$color', '$start', '$end')";
        $mysql->query($sql) or die("Falha na execucao do codigo SQL: " . $mysql -> error);

    }
}
?>