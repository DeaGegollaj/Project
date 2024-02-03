<?php
include_once 'UserRepository.php';
include_once 'Useri.php';
include_once 'DatabaseConnection.php';


if(isset($_POST['signupbtn']))
    if(empty($_POST['emri']) || empty($_POST['mbiemri']) || empty($_POST['email']) || empty($_POST['paswordi']) || empty($_POST['confirmPassword'])){
        echo "<script>alert('Fill all fields!');</script>";
    }else{
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $paswordi = $_POST['paswordi'];
        $confirmPassword = $_POST['confirmPassword'];
        $roli = (rand(0,1) == 0) ? 'user' : 'admin';

        $urep = new UserRepository();

        $userByEmail=$urep->getUserByEmail($email);
        
     
 
       if ($userByEmail){
        echo "This email is already in use!";
       }
       else if (strlen($paswordi)<7 || strlen($paswordi)>14){
        echo "Your password should be 7-14 characters long!";
       }
       else if($paswordi !=$confirmPassword){
        echo "Your passwords don't match!";
        } 
        else{
        $user = new Useri($emri, $mbiemri, $email, $paswordi, $roli);
        $urep->insertUser($user);
        header("location: login.php");
        exit();
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
    
        <form id="signup" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <label>Name:</label>
                <input type="text" name="emri">
                <div class="error-message" id="nameError"></div> 
                
                <label>Last Name:</label>
                <input type="text" name="mbiemri">
                <div class="error-message" id="lnError"></div> 
                
                <label>Email:</label>
                <input type="email" name="email">
                <div class="error-message" id="emailError"></div> 
                
                <label>Password:</label>
                <input type="password" name="paswordi">
                <div class="error-message" id="passError"></div> 
                
                <label>Confirm Password:</label>
                <input type="password" name="confirmPassword">
                <div class="error-message" id="cPassError"></div> 
            
                <input type="submit" name="signupbtn" value="Sign Up">
        </form>
    <script>
        function validateForm() {

            let nameInput = document.getElementByName('emri');
            let nameError = document.getElementById('nameError');
            let lastnameInput = document.getElementByName('mbiemri');
            let lastnameError = document.getElementById('lnError');
            let emailInput= document.getElementByName('email');
            let emailError = document.getElementById('emailError');
            let passwordInput = document.getElementByName('paswordi');
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

           if(confirmPasswordInput.value!==passwordInput.value){
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
