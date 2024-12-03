<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./backend/router/loginRouter.php?acao=validarlogin" method="POST">
        <input type="text" name="nome">
        <input type="password" name="senha">
        <button type="submit">Logar</button>

    </form>
</body>
</html>