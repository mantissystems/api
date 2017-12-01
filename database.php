<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "ppsk333954_rwtq";
    private $username = "ppsk333954";
    private $password = "JPiQ8vqcCh";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
		//this->conn = new PDO('mysql:host=localhost;dbname=ppsk333954_rwtq;charset=utf8','ppsk333954','JPiQ8vqcCh'); 
            //$this->conn = new PDO("'mysql:host=" . $this->host . ";dbname=" . $this->db_name.";charset=utf8'", $this->username, $this->password);
            //$this->conn->exec("set names utf8");
			var_dump($conn);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>