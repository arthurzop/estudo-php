<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
        <h1 class="title">Cadastro</h1>
        <form action="cadastro.php" method="POST">
            <div class="input-container">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome"/>
            </div>
            <div class="input-container">
                <label for="email">Email:</label>
                <input type="text" name='email' id='email' />
            </div>
            <div class="input-container">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
            </div>
            <button type="submit">Entrar</button>
            <small><a href="cadastro.php">Cadastrar</a></small>
        </form>

       
</div>
     <?php
            include 'conexao.php';

            echo $conexao . "<br/>";

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];


            $sql = "INSERT INTO `pessoas`(`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')";

            if(mysqli_query($conn, $sql)){
                echo '$nome cadastrado!';
            }
            else {
                echo '$nome NAO cadastrado!';
            }
        
        ?>
</body>
</html>