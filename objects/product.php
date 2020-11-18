<?php
class Product
{
    private $conn;
    private $table_name = "producten";
    public $id;
    public function __construct($db){
        $this->conn = $db;
    }


    // read products
    function read(){
        $query = "SELECT * FROM " . $this->table_name . " WHERE `id` IN (1,2,3,4)";
        $result = $this->conn->query($query);
        return $result;
    }
    function read2(){
        $query = "SELECT * FROM " . $this->table_name . " WHERE `id` IN (5,6,7,8)";
        $result = $this->conn->query($query);
        return $result;
    }
     function image($product_id){
         $query = "SELECT * FROM product_foto WHERE product_id=$product_id";
         $result = $this->conn->query($query);
         return $result;
     }
    function qr($qr_id){
        $query = "SELECT * FROM qr WHERE qr_id=$qr_id";
        $result = $this->conn->query($query);
        return $result;
    }
}
?>