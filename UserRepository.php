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
            $roli=$user->getRoli();
          

            $sql = "INSERT INTO user(name,lastname,email,password,roli) VALUES (?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$name, $lastname, $email, $password,$roli]);

            echo "<script>alert('It has been added with success!')</script>";
        }

        public function getAllUsers(){
            $conn = $this->connection;

            $sql = "SELECT * FROM user";
            $statement = $conn->query($sql);

            $students = $statement->fetchAll();
            return $user;
        }


    
        public function editStudent($name, $lastname, $email, $password, $confrimPassword,$roli){
            $conn = $this->connection;
            $sql = "UPDATE user SET Name=?,Lastname=?, Email=?, Password=?, ConfirmPassowrd=?, Roli=?  WHERE email=?";

            $statement = $conn->prepare($sql);
         $result=$statement->execute([$name,$lastname, $email, $password, $confrimpassword, $roli]);

            if ($result){
                
            echo "Updated with success!";
            } else {

            echo "Update failed!";
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
      function getUserByUsername ($username){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE username=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$username]);
        $student=$statement->fetch();

        return $user;
      }
    }

?>