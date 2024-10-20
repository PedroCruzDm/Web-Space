<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
    <header>
        <?php include("./padrao/header.php") ?>
    </header>
    <main>
        <form action="" method="post">
            <label for="Nick">Usuario:</label>
            <input type="text" name="nickuser" id="nickuser" placeholder="Nome de Usuario" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senhauser" id="senhauser" placeholder="Senha" required>

            <input type="submit" value="Entrar">
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>