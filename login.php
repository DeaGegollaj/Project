<?php

include_once 'UserRepository.php';
include_once 'DatabaseConnection.php';

if(isset($_POST['loginbtn'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        echo "<div style='color: white; font-weight: bold; text-align: center; position: fixed; top: 0; left: 50%; transform: translateX(-50%); width: 15%; border-radius: 5px; padding: 10px; background-color: rgb(211,178,95);'>Please fill the required fields!</div>";
    }
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];


        $urep = new UserRepository();
        $user = $urep->getUserByUsername($username);

        if($user){
            if($_POST['password'] == $user['Pass']){
                session_start();
                $_SESSION['username'] = $user['Username'];
                $_SESSION['role'] = $user['Roli'];
        
                header("location: projekti.php");
                exit();
            }
            else{
                echo "Invalid password!";
            }
        }
        else{
            echo "Username not found!";
        }
    }
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
        <form id="myForm">
            <label>Name:</label>
            <input type="text" id="name">
            <div class="error-message" id="nameError"></div>
        
            <label>Password:</label>
            <input type="password" id="password">
            <div class="error-message" id="passwordError"></div>
        
            <button type="button" onclick="validateForm()">Submit</button>
        </form>
        <script>
            function validateForm(){
                let nameInput = document.getElementById('name');
                let nameError = document.getElementById('nameError');
                let passwordInput = document.getElementById('password');
                let passwordError = document.getElementById('passwordError');
        
                nameError.innerText = '';
                passwordError.innerText = '';
        
<<<<<<< HEAD
                let nameRegex = /^[A-Z][a-z]{2s,8}$/;
=======
                let nameRegex = /^[A-Z][a-z]{2,8}$/;
>>>>>>> 2c013d2a6c93cc1c427efb87766818333ccdbd45
                let passRegex = /^[A-Za-z0-9]{7,14}$/;
    
                if (!nameRegex.test(nameInput.value)) {
                    nameError.innerText = 'Emri juaj eshte gabim';
                    return;
                }
                if (!passRegex.test(passwordInput.value)) {
                    passwordError.innerText = 'Password-i juaj eshte gabim';
                    return;
                }
                else{
                    window.location.assign("projekti.php")
                }
                alert('Keni hyr me sukses!');
            }
        </script>

</body>
</html>