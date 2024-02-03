<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="Dashboard.css">
</head>
<body>
<div class="header">
        <img  class="logo" src="logo.jpg.png" alt="logo">
    
            <label><a href="Projekti.php">HOME</a></label>
            <label><a href="Blog.php">BLOG</a></label>
            <label><a href="Brendet1.php">BRENDET</a></label>
            <label>KATEGORITE</label> 
            <label><a href="login.php">LOG IN </a></label>
            <label><a href="signup.php">SIGN UP</a></label>      
    
      <input type="text" placeholder="Search" style="height: 20px;">
      <button class="button" style="width: 50px; height: 25px; background-color: #688682; border: inset 3px;"></button>     
  </div>

  </header>

  <main>
    <h2>User Dashboard</h2>
    <table border="1">
        <thread>
            <tr>
                <th>Name</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
</tr>
<tbody>
    <?php
    include_once('DatabaseConnection.php');
    include_once('UserRepository.php');

    $urep = new UserRepository();
    $user = $urep->getAllUser();

    foreach ($user as $user) {
        echo"<tr>";
        echo"<td>{$user['Namei']}</td>";
        echo"<td>{$user['LastName']}</td>"; 
        echo"<td>{$user['Email']}</td>";
        echo"<td>{$user['Password']}</td>";
        echo"<td>{$user['Roli']}</td>";
        echo"<td><a href='Edit.php?email={$user['Email']}' style='text-decoration: none; color: #f8cfc1'>Edit</a><td>";
        echo"<td><a href='Delete.php?email={$user['Email']}' style='text-decoration: none; color: #f8cfc1'>Delete</a><td>";
        echo"<?tr>";
    }
       ?>
      </tbody>
   </tabel>
</main>
<footer>
    <div class="f">
            <p>Ourlinks</p>
      
        <div class="ff">
            <a href=""><img src="facebook.png " alt="fb" width="32px" height="32px"></a>
            <a href=""><img src="instagram.png " alt="ig" width="32px" height="32px"></a>
        </div>
    </div>
        <div class="footermain">
             <div class="footerleft">
            <p>Ikusei: Our curated skincare collection is a tribute to simplicity and effectiveness. Embrace self-care with us and discover the authentic radiance that comes from harnessing the power of natural ingredients. Ikusai: where skincare is as pure and genuine as you.</p>
        </div>
        <div class ="footercenter">
        <p>Transporti</p>
        <p>Contact us</p>
        <p>Privacy Policy</p>
        </div>
    <div class="fundi">
         <p>Copyright 2023 Ikusei Company. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>