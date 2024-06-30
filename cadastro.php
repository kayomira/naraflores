<?php

if(isset($_POST['submit']))
{
    // print_r($_POST['email']);
    // print_r($_POST['senha']);

    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(email,senha) 
    VALUES ('$email','$senha')");

    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>

            <li><a href="#"><img src="./images/menu-aberto.png" alt="Menu" class="menu"></a></img></li>
            
            <li class="logo"><a href="#"><img src="./images/nome completo vetor.png" alt="logo" class="logo"></a></li>

            <li><a href="#"><img src="./images/carrinho-de-compras-de-design-xadrez.png" alt="carrinho" class="carrinho"></a></img></li>
    
        </ul>  
    </nav>

    <section>
        <div class="loginfield">
            <form action="cadastro.php" method="POST">
                <fieldset>
                    <legend>Cadastro</legend>

                        <br>

                    <div class="inputbox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>

                        <br><br>

                    <div class="inputbox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>

                        <br><br>

                    <div class="inputbox">  
                        <input type="password" name="confirmarsenha" id="confirmarsenha" class="inputUser" required>
                        <label for="confirmarsenha" class="labelInput">Confirmar senha</label>
                    </div>

                        <br><br>
                    <input type="submit" name="submit" id="submit" onclick="return validarSenha()">

                        <br>
                    <a href="login.php">ou Entrar</a>    

                </fieldset>
            </form>
        </div> 

    </section>

    <script src="script.js"> </script>

</body>
</html>