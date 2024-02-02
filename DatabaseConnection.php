<?php
class DatabaseConnection{
    //keto te dhena i merrni ne baze te databazes suaj
    private $host = "localhost";
    private $username = " ";
    private $password = "123456";
    private $db = "Ikusei";

function startConnection(){
    try{
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(!$conn){
            //echo "Connection failed "; per testim
            return null;
        }else{
            //echo "Connection successful!"; per testim
            return $conn;
        }
        
    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
}
}
?>