<?php
require_once __DIR__."/../controller/loginController.php";
$loginController = new LoginController();

if($_SEVER["REQUEST_METHOD"] == "POST"){
    // echo "teste:";
    switch ($_GET ["acao"]){
        case "validarLogin":
            $nome = $_POST["nome"];
            $nome = $_POST["senha"];
            if(!(empty($nome) || empty($senha))){
                $loginController->Login ($nome,$senha);
                if ($resposta){
                    header("Location: ../../pages/home/index.php")
                }

            }
            break;
        default:
            echo "nao achei nenhuma das opções";
            break;
    }

}