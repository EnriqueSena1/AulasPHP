<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post">
        <label >Nome</label>
        <input type="text" name= "nome" id= "nome">
        <label >Senha</label>
        <input type="password" name= "senha" id= "senha">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if(empty($nome) || empty($senha)){
        echo "Todos os campos são obrigatorios";
    }else{

    }
}
?>

<!-- http://localhost/tantofaz/AulasPHP/tantofaz/index.php -->