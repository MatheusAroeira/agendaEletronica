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
    <title>Login</title>
</head>
<body>
    <h1>Acesse seu calendario pessoal</h1>
    <form action="" method="POST">
        <p>

            <label>Email</label>
            <input type="text" name ="email">

        </p>
        <p>

            <label>Senha</label>
            <input type="password" name ="senha">

        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>

    <button class = "registerbutton" type = "button">Registre-se</button>

</body>
</html>

<script>
    var button = document.querySelector('.registerbutton');
    button.addEventListener('click', function(){
        location.href = 'cadastro.php';  // Logout.php é a página que fecha a sessão do usuário
    })
</script>