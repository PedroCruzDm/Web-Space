<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="./view/css/principal.css">
</head>
<body>
    <header>
        <?php include("./padrao/header.php") ?>
    </header>
    <main>
        <div class="caixa-cadastro">
            <form action="" method="post">
                <center>
                    <h2>Cadastrar-se</h2>
                </center>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <br>
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
                <br>
                <label for="email">E-mail:</label>
                <input type="email" name="e-mail" id="e-mail" placeholder="exemplo@gmail.com" required>
                <br>
                <label for="telefone">Telefone:</label>
                <input type="tel" name="phone" placeholder="(xx) xxxx-xxxxx" id="phone">
                <br>
                <input type="checkbox" name="robot" id="robot" required>
                <label for="robbo">Não sou um robô</label>
                <br>
                <input type="submit" value="Cadastrar-se">
            </form>
        </div>
    </main>
    <footer>
        <?php include("./padrao/footer.php") ?>
    </footer>
    
</body>
</html>