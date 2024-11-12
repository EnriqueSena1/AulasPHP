<?php
class Database
{
    private $server = "localhost";
    private $dbnome = "Aularafael"; //
    private $user = "root";
    private $pass = "";

    public function connect(){
        try {
            $conn = new PDO(
                "mysql:host=".$this->server.";dbname=".$this->dbnome,
                $this->user,
                $this->pass
            );
            $conn->setAttribute(PDO:: ATTR_ERRMODE,PDO :: ERRMODE_EXCEPTION);
            return  $conn;
        } catch (\Exception $e) {
            echo "Database inferno:".$e->getMessage();
        }
    }
}
$teste = new Database();
$teste-> connect();

// http://localhost/tantofaz/AulasPHP/tantofaz/db/database.php