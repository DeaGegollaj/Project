<?php
    include_once('DatabaseConnection.php');

    class UserRepository{
        private $connection;

        public function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertUser($user){
            $conn = $this->connection;

            $name = $user->getEmri();
            $lastname = $user->getMbiemri();
            $emaili = $user->getEmaili();
            $paswordi = $user->getPaswordi();
            $roli=$user->getRoli();
          

            $sql = "INSERT INTO users(Emri,Mbiemri,Email,Paswordi,Roli) VALUES (?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$name, $lastname, $emaili, $paswordi,$roli]);

            echo "<script>alert('Added successfully!')</script>";
        }

        public function getAllUser(){
            $conn = $this->connection;

            $sql = "SELECT * FROM users";
            $statement = $conn->query($sql);

            $user = $statement->fetchAll();
            return $users;
        }


    
        public function editUser($emri, $mbiemri, $paswordi, $roli, $email){
            $conn = $this->connection;
            $sql = "UPDATE users SET Emri=?, Mbiemri=?, Paswordi=?, Roli=?  WHERE Email=?";

            $statement = $conn->prepare($sql);
            $result=$statement->execute([$emri, $mbiemri, $paswordi, $roli, $email]);

            if ($result){  
                echo "Updated with success!";
            } 
            else {
                echo "Update failed!". $statement->errorInfo();
            }
        }

        function deleteUser($email){
            $conn = $this->connection;

            $sql = "DELETE FROM users WHERE Email=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$email]);
        }

        function getUserByEmail($email){
            $conn = $this->connection;

            $sql = "SELECT * FROM users WHERE Email=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$email]);
            $user=$statement->fetch(PDO::FETCH_ASSOC);

            return $user;
        }
        
        function getUserByUsername($username){
            $conn = $this->connection;

            $sql = "SELECT * FROM users WHERE Username=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$username]);
            $user=$statement->fetch(PDO::FETCH_ASSOC);

            return $user;
    }
}
?>
