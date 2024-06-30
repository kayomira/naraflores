<?php

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
    
    <section>
        <div class="loginfield">
            
            <form action="loginconfig.php" method="POST">
                <fieldset>
                    <legend>Login</legend>

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

                    <input type="submit" name="submit" id="submit">

                    <br>

                    <a href="cadastro.php">ou Cadastre-se</a>
                </fieldset>
            </form>

        </div>
    </section>

</body>
</html>