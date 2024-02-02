<?php
    include_once('DatabaseConnection.php');

    class BrendetRepository{
        private $connection;

        public function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertBrendet($brendet){
            $conn = $this->connection;

            $produktet = $brendet->getProduktet();
            $cmimi = $brendet->getCmimi();
            $imagePath = $brendet->getImage();
            $brendet = $brendet->getBrendet();

            $addedBy = $_SESSION['username'];

            $sql = "INSERT INTO Brendetproduktet (Produktet,Cmimi,ImagePath,Brendet,AddedBy) VALUES (?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$produktet,$cmimi,$imagePath,$brendet,$addedBy]);

            $_SESSION['insertmessage'] = "Produktet: $produktet u shtua nga $addedBy!";
        }

        public function insertProduktetIntoShporta($produktetId){
            $conn = $this->connection;
    
            $sql = "INSERT INTO Shporta (Produktet, Cmimi, Brendet, ImagePath) 
                    SELECT Produktet, Cmimi, Brendet, ImagePath FROM ProduktetBrendi WHERE Produktet = ?";

            try{
                $statement = $conn->prepare($sql);
                $statement->execute([$produktetId]);
            }
            catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }

        public function getAllBrendet(){
            $conn = $this->connection;

            $sql = "SELECT * FROM ProduktetBrendet";
            $statement = $conn->query($sql);

            $brendet = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $brendet;
        }

        function deleteBrendet($produktet){
            $conn = $this->connection;

            $sql = "DELETE FROM ProduktetBrendi WHERE Produktet=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$produktet]);
        }

        function getBrendetByProduktet($produktet){
            $conn = $this->connection;

            $sql = "SELECT * FROM ProduktetBrendet WHERE Produktet=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$produktet]);
            $book=$statement->fetch(PDO::FETCH_ASSOC);

            return $brendet;
        }

    }
?>