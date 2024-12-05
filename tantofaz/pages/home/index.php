<?php
session_start();
if (!$_SESSION["id_usuario"]) {
    header("Location: ../../index.php");
}
require_once __DIR__ . "/../../backend/controller/userController.php";
$userController = new UserController();

$usuarios = $userController->GetAllUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../cadastrar/index.php">Cadastrar</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php
             foreach($usuarios as $item){
            ?>
               <tr>
                <td><?php echo $item["id"] ?></td>
                <td><?php echo $item["nome"] ?></td>
                <td><?php echo $item["senha"] ?></td>
               </tr> 
            <?php
             }
            ?>
        </tbody>
    </table>
</body>
</html>