<?php
include_once __DIR__ . "/../db/database.php";

class LoginController{
    private $conn;

    public function __construct(){
        $database = new Database();
        $this->conn = $database->connect();


    }
    public function ValidaTudo($nome,$senha){
        try {
            $sql = "SELECT * FROM usuarios where nome = :nome AND senha = :senha";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome",$nome);
            $db->bindParam(":senha",$senha);
            $db->execute();
            $usuario = $db->fetchAll(PDO::FETCH_ASSOC);
            
            if($usuario){
                session_start();
                // Armazena o ID do usuário na sessão para uso posterior
                $_SESSION["id_usuario"] = $usuario[0]["id"];
                
                return true;                
            }else{
                return false;
            }

        } catch (\Exception $e) {
            echo "Database inferno:".$e->getMessage();
        }
    }
}



// http://localhost/tantofaz/AulasPHP/tantofaz/backend/controller/loginController.php