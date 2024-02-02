<?php
    include_once('DatabaseConnection.php');

    class ShportaIRepository{
        private $connection;

        public function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function getAllProduktet(){
            $conn = $this->connection;

            $sql = "SELECT * FROM ShportaI";
            $statement = $conn->query($sql);

            $Produktet = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $Produktet;
        }

        function deleteProduktet($produktet){
            $conn = $this->connection;

            $sql = "DELETE FROM ShportaI WHERE Produktet=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$produktet]);
        }

        function getShportaIByProduktet($produktet){
            $conn = $this->connection;

            $sql = "SELECT * FROM ShportaI WHERE Produktet=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$produktet]);
            $shportaI=$statement->fetch(PDO::FETCH_ASSOC);

            return $ShportaI;
        }
    }
?>