<?php
include 'conexao_usuarios.php';
include 'conexao_agendas.php';

if(isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nome'])) {
    
    if(strlen($_POST['nome']) == 0) {
        echo "Preencha seu nome";
    }else if(strlen($_POST['email']) == 0){
        echo "Preencha seu email";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $id = uniqid();

        $sql_email = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql_query = $mysqli ->query($sql_email) or die("Falha na execucao do codigo SQL: " . $mysqli -> error);

        $quantidadeLinhas = $sql_query ->num_rows;

        if($quantidadeLinhas == 0) {
            $criaagenda = "CREATE TABLE `$id` (`id` VARCHAR(220) NOT NULL , `title` VARCHAR(220) NOT NULL , `color` VARCHAR(45) NOT NULL , `start` DATE NOT NULL , `end` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
            $mysql -> query($criaagenda) or die("Falha na execucao do codigo SQL: ". $mysql -> error);

            $registrausuario = "INSERT INTO usuarios (id,nome, email, senha) VALUES ('$id','$nome', '$email', '$senha')";
            $mysqli -> query($registrausuario) or die("Falha na execucao do codigo SQL: ". $mysqli -> error);

            header("Location: index.php");
        }else {
            echo "Este email já está cadastrado";
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
    <title>Register</title>
</head>
<body>
    <div class = "tela">
        <form action="" method = "post">
            <label>Nome</label>
            <input type="text" name="nome">
            <br><br>

            <label>E-mail</label>
            <input type="email" name="email">
            <br><br>
       
            <label>Senha</label>
            <input type="password" name="senha">
       

            <button class = 'button' type="submit">Registre-se</button>
            <a href="index.php">Voltar</a>
        </form>
    </div>
    
       
    
    
</body>
</html>
