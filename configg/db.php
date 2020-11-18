<?php
class Database {
    private $host = "localhost";
    private $dbname = "	u533029_webshop";
    private $username = "u533029_webshop";
    private $password = "Admin123";
    private $conn;

    Public function __construct(){
        $this->conn = $this->getConnection();
    }

    public function getConnection() {
        try {
            $conn = mysqli_connect('localhost', 'u533029_webshop', 'Admin123', 'u533029_webshop');
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
