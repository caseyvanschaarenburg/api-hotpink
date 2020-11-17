<?php
class Database {
    private $host = "localhost";
    private $dbname = "webshop";
    private $username = "root";
    private $password = "";
    private $conn;

    Public function __construct(){
        $this->conn = $this->getConnection();
    }

    public function getConnection() {
        try {
            $conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
            if(!$conn) {
                throw new exception(mysqli_connect_error($conn));
            }
            return $conn;
        }
        catch (Exception $e) {
            echo "Error: ".$e->getMessage();
        }
    }

}
?>
