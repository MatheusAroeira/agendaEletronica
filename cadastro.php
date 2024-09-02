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

        $sql_email = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql_query = $mysqli ->query($sql_email) or die("Falha na execucao do codigo SQL: " . $mysqli -> error);

        $quantidadeLinhas = $sql_query ->num_rows;

        if($quantidadeLinhas == 0) {
            $criaagenda = "CREATE TABLE `$nome` (`ID` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(220) NOT NULL , `color` VARCHAR(45) NOT NULL , `start` DATE NOT NULL , `end` DATE NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB";
            $mysql -> query($criaagenda) or die("Falha na execucao do codigo SQL: ". $mysql -> error);

            $registrausuario = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
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
    <title>Register</title>
</head>
<body>

    <form action="" method = "post">
        <p>
            <label>Nome</label>
            <input type="text" name="nome">
            
        </p>

        <p>
            <label>E-mail</label>
            <input type="email" name="email">
            
        </p>

        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>

        <button class = 'registerbutton' type="submit">Registre-se</button>
    </form>
    
</body>
</html>
