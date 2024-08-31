<?php
include 'protect.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Agenda</title>
</head>
<body>
    Bem Vindo a sua Agenda, <?php echo $_SESSION['nome']; ?>

    <p> 
        <button class = "logoutbutton" type = "button">Sair</button>
    </p>
</body>
</html>

<script>
    var button = document.querySelector('.logoutbutton');
    button.addEventListener('click', function(){
        location.href = 'logout.php';  // Logout.php é a página que fecha a sessão do usuário
    })
</script>