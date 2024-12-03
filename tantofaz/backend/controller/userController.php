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
            $sql = "INSERT INTO usuario (nome,senha) VALUES(:nome,:senha)";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome",$nome);
            $db->bindParam(":senha",$senha);
            if($db->execute()){
                return true;
            }else{
                return false;
            }

        } catch (\Exception $e) {
            //throw $th
        }
        }
    }    
