<?php
//tela inicial de login
    include 'conexao_usuarios.php';

    if(isset($_POST['email']) && isset($_POST['senha'])){

        if(strlen($_POST['email']) == 0){
            echo "Preencha seu email";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli ->query($sql_code) or die("Falha na execucao do codigo SQL: " . $mysqli -> error);

            $quantidadeLinhas = $sql_query ->num_rows;

            if($quantidadeLinhas == 1){

                $usuario = $sql_query -> fetch_assoc();

                if(!isset($_SESSION)){ 
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: painel.php");
                
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos!";
            }

        } 
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>

</head>
<body>
    <div class="tela">
        <h1>Login</h1>
        <form action="" method="POST">
            
            <label>Email</label>
                <input type="email" name ="email">
                <br><br>
        
                <label>Senha</label>
                <input type="password" name ="senha">
                <br><br>
            
                <button class = "button" type="submit">Entrar</button>
                <br><br>
                <button id= "register_button" class = "button" type = "button">Registre-se</button>
            
        </form>
    </div>
</body>
</html>

<script>
    var button = document.querySelector('#register_button');
    button.addEventListener('click', function(){
        location.href = 'cadastro.php';  // Logout.php é a página que fecha a sessão do usuário
    })
</script>