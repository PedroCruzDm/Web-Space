<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/sistema.css">
    <link rel="stylesheet" href="./css/principal.css">
</head>
<body>
    <header>
        <?php include("./padrao/header.php") ?>
    </header>
    <main>
        <div class="div-login" style="z-index: -10">
            <form action="" method="post">
                <center>
                    <h1>Login</h1>
                    <label for="Nick">Usuario:</label>
                    <input type="text" name="nickuser" id="nickuser" placeholder="Nome de Usuario" required>
                    <br>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senhauser" id="senhauser" placeholder="Senha" required>
                    <br>
                    <input type="submit" value="Entrar">
                </center>
            </form>
        </main>
    </div>
    <div class="fundo">
        <?php include("./padrao/sistema/solar.php"); ?>
    </div>
    <footer>
        <?php
         include("./padrao/footer.php") ?>
    </footer>
</body>
</html>