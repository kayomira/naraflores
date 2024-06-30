<?php

if(isset($_POST['submit']))
{
    // print_r($_POST['email']);
    // print_r($_POST['senha']);

    include_once('config.php');

    $product = $_POST['product'];
    $quantidade = $_POST['quantidade'];
    $preço = $_POST['preço'];


    $result = mysqli_query($conexao, "INSERT INTO produtos(nome,quantidade,preço) 
    VALUES ('$product','$quantidade','$preço')");

    header('Location: teste.php');
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
            <form action="produtos.php" method="POST">
                <fieldset>
                    <legend>Cadastro de Produtos</legend>

                        <br>

                    <div class="inputbox">
                        <input type="text" name="product" id="product" class="inputUser" required>
                        <label for="product" class="labelInput">Produto</label>
                    </div>

                        <br><br>

                    <div class="inputbox">
                        <input type="number" name="quantidade" id="quantidade" class="inputUser" required>
                        <label for="quantidade" class="labelInput">Quantidade</label>
                    </div>

                        <br><br>

                    <div class="inputbox">  
                        <input type="number" name="preço" id="preço" class="inputUser" required>
                        <label for="preço" class="labelInput">Preço</label>
                    </div>

                        <br><br>
                    <input type="submit" name="submit" id="submit">

                        <br> 

                </fieldset>
            </form>
        </div> 

    </section>

    <script src="script.js"> </script>

</body>
</html>