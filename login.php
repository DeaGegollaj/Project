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