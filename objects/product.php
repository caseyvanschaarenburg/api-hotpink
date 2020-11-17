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
        $query = "SELECT * FROM $this->table_name";
        $result = $this->conn->query($query);
        return $result;
    }
     function image($product_id){
         $query = "SELECT * FROM product_foto WHERE product_id=$product_id";
         $result = $this->conn->query($query);
         return $result;
     }



//    //read one product
//    function read_one($id){
//        $query = "SELECT * FROM " . $this->table_name . " WHERE id=".$id;
//        $result = $this->conn->query($query);
//        return $result;
//    }
//
//    //create one product
//    function create($naam, $beschrijving, $prijs, $categorie){
//        $query = "INSERT INTO " . $this->table_name." (naam, beschrijving, prijs, categorie_id, toegevoegd_op, gewijzigd_op) VALUES ('$naam', '$beschrijving', '$prijs', '$categorie', NOW(), NOW())";
//        echo "Your product has successfully been added.";
//        if ($this->conn->query($query) === TRUE) {
//            header("Location: read_all.php");
//        } else {
//            echo "Something went wrong: " . $query . "<br>" . $this->conn->error;
//        }
//    }
//
//    //delete one product
//    function delete($id){
//
//        $query = "DELETE FROM " . $this->table_name . " WHERE id=".$id;
//        if ($this->conn->query($query) === TRUE) {
//            header("Location: read_all.php");
//        } else {
//            echo "Something went wrong: " . $query . "<br>" . $this->conn->error;
//        }
//    }
//
//    //update one product
//    function upd($naam, $beschrijving, $prijs, $categorie, $identiteit){
//        $query = "UPDATE $this->table_name SET id='$identiteit', naam='$naam', beschrijving='$beschrijving', prijs= $prijs, categorie_id= $categorie WHERE id=$identiteit";
//        if ($this->conn->query($query) === TRUE) {
//            header("Location: read_all.php");
//        } else {
//            echo "Something went wrong: " . $query . "<br>" . $this->conn->error;
//        }
//    }
//
//
//    //search one product
//    function search(){
//        $val = $_POST["search"];
//        // select all query
//        $query = "SELECT * FROM $this->table_name WHERE naam LIKE '%" .$val. "%'";
//        $result = $this->conn->query($query);
//        return $result;
//    }
}
?>