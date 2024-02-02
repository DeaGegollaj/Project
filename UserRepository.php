<?php
    include_once('DatabaseConnection.php');

    class UserRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertUser($user){
            $conn = $this->connection;

            $name = $user->getName();
            $lastname = $user->getLastname();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $confrimPassword=$user->getConfrimPassword();
          

            $sql = "INSERT INTO user(Name, Lastname, Email, Password, ConfrimPassword) VALUES (?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$name, $lastname, $email, $password,$confrimPassword]);

            echo "<script>alert('It has been added with success!')</script>";
        }

        public function getAllUsers(){
            $conn = $this->connection;

            $sql = "SELECT * FROM user";
            $statement = $conn->query($sql);

            $students = $statement->fetchAll();
            return $user;
        }


    
        public function editStudent($name, $lastname, $email, $password, $confrimPassword){
            $conn = $this->connection;
            $sql = "UPDATE user SET Name=?,Lastname=?, Email=?, Password=?, ConfirmPassowrd=?  WHERE email=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$name,$lastname, $email, $password, $confrimpassword]);

            echo "<script>alert('Updated with success!')</script>";

        }

    

        function deleteUser($email){
            $conn = $this->connection;

            $sql = "DELETE FROM user WHERE email=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$email]);
        }

        

        function getUserByEmail($email){
            $conn = $this->connection;

            $sql = "SELECT * FROM user WHERE email=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$email]);
            $student=$statement->fetch();

            return $user;
        }

    }

?>