<?php
include_once 'UserRepository.php';
include_once 'user.php';
include_once 'DatabaseConnection.php';

if(isset($_POST['signupbtn'])){
    if(empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['email']) ||
      empty($_POST['password']) || empty($_POST['confirmPassword'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmPassword'];
        $role = (rand(0,1) == 0) ? 'user' : 'admin';

        $userRepository = new UserRepository();

        $userByEmail=$userRepository->getUserByEmail($email);
        $userByUsername=$userRepository->getUserByUsername($username);
 
       if ($userByEmail){
        echo "This email is already in use!"
       }
       else if($userByUsername){
        echo "This username is already in use"
       }
       else if (strlen($password)<7 || strlen($password)>14){
        echo "Your password should require 7 to 14 characters!"
       }
       else if($password !=$confirm){
        echo "Your password and confirimpassword don't match!"
       } else {
        $user = new User($name, $lastname,$email, $password, $confirmpassword,$roli);
        $userRepository->insertUser($user);
        header("location: Login.php");
        exit();
       }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body> 
    
        <form id="signup">
                <label>Name:</label>
                <input type="text" name="name">
                <div class="error-message" id="nameError"></div> 
                
                <label>Last Name:</label>
                <input type="text" name="lastname">
                <div class="error-message" id="lnError"></div> 
                
                <label>Email:</label>
                <input type="email" name="email">
                <div class="error-message" id="emailError"></div> 
                
                <label>Password:</label>
                <input type="password" name="password">
                <div class="error-message" id="passError"></div> 
                
                <label>Confirm Password:</label>
                <input type="password" name="confirmPassword">
                <div class="error-message" id="cPassError"></div> 
            
                <button type="button" onclick="validateForm()">Submit</button>
        </form>
    <script>
        function validateForm() {

            let nameInput = document.getElementByName('name');
            let nameError = document.getElementById('nameError');
            let lastnameInput = document.getElementByName('lastname');
            let lastnameError = document.getElementById('lnError');
            let emailInput= document.getElementByName('email');
            let emailError = document.getElementById('emailError');
            let passwordInput = document.getElementByName('password');
            let passwordError = document.getElementById('passError');
            let confirmpasswordInput = document.getElementByName('confirmPassword');
            let confirmpasswordError = document.getElementById('cPassError');


            nameError.innerText = '';
            lastnameError.innerText = '';
            emailError.innerText = '';
            passwordError.innerText = '';
            confirmpasswordError.innerText = '';


            let nameRegex = /^[A-Z][a-z]{2,8}$/;
            let lastnameRegex = /^[A-Z][a-z]{3,10}$/;
            let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
            let passRegex = /^[A-Za-z0-9]{7,14}$/;


    
            if(!nameRegex.test(nameInput.value)){
            nameError.innerText = 'Emri juaj duhet te filloj me shkronje te madhe!';
            return;         
           }
           if(!lastnameRegex.test(lastnameInput.value)){
            lastnameError.innerText = 'Mbiemri juaj duhet te filloj me shkronje te madhe!';
            return; 
           }
           if(!emailRegex.test(emailInput.value)){
            emailError.innerText = 'Email-i juaj nuk egziston!';
            return;
           }
           if(!passRegex.test(passwordInput.value)){
           passwordError.innerText = 'Password-i juaj duhet te filloje me shkronje te madhe dhe te permbaje 8-15 karaktere';
            return;
           }

           if(confirmpasswordInput.value!==passwordInput.value){
            confirmpasswordError.innerText = 'Password-at nuk perputhen!';
            return;
           }
           else{
                    window.location.assign("login.php")
                }
           alert("Sign-Up eshte kryer me sukses!");

         }
    </script>
    
</body>
</html>
