<?php
    include_once('DatabaseConnection.php');

    class BlogRepository{
        private $connection;

        public function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertTeksti($aboutus){
            $conn = $this->connection;

            $teksti = $aboutus->getTeksti();
            $addedBy = $_SESSION['username'];

            $sql = "INSERT INTO Blog (Teksti,AddedBy) VALUES (?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$teksti,$addedBy]);
        }

        public function getAllTeksti(){
            $conn = $this->connection;

            $sql = "SELECT * FROM Blog";
            $statement = $conn->query($sql);

            $aboutus = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $blog;
        }

        function deleteTeksti($teksti){
            $conn = $this->connection;

            $sql = "DELETE FROM Blog WHERE Teksti=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$teksti]);
        }

        function getBlogByTeksti($teksti){
            $conn = $this->connection;

            $sql = "SELECT * FROM Blog WHERE Teksti=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$teksti]);
            $aboutus=$statement->fetch(PDO::FETCH_ASSOC);

            return $blog;
        }
    }
?>