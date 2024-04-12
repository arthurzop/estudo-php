<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    include './conexao.php';


    $sql = "SELECT * FROM `pessoas`";

    $dados = mysqli_query($conn, $sql);

    echo $conexao;
    ?>
    <div class="container">
        <h1 class="title">Login</h1>
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
    </div>
    <br>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conexao.php';


                while ($linha = mysqli_fetch_assoc($dados)) {
                    $nome = $linha['nome'];
                    $email = $linha['email'];
                    $senha = $linha['senha'];

                    echo "
                        <tr>
                            <th>$nome</th>
                            <th>$email</th>
                            <th>$senha</th>
                        </tr>    
                
                ";
                }

                

                ?>

            </tbody>
        </table>
    </div>

</body>

</html>