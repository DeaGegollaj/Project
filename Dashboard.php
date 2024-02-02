<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <th>Surname</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
</tr>
<tbody>
    <?php
    include_once('DatabaseConnection.php');
    include_once('UserRepository.php');

    $urep = new UserRepository();
    $users = $urep->getAllUser();

    foreach ($users as $user) {
        echo"<tr>";
        echo"<td>{$user['Emri']}</td>";
        echo"<td>{$user['Mbiemri']}</td>"; 
        echo"<td>{$user['Email']}</td>";
        echo"<td>{$user['Username']}</td>";
        echo"<td>{$user['Pass']}</td>";
        echo"<td>{$user['Roli']}</td>";
        echo"<td><a href='Edit.php?email={$user['Email']}' style='text-decoration: none; color: rgb(65,34,52)'>Edit</a><td>";
        echo"<td><a href='Delete.php?email={$user['Email']}' style='text-decoration: none; color: rgb(65,34,52)'>Delete</a><td>";
        echo"<?tr>";
    }
       ?>
      </tbody>
   </tabel>

</main>

</body>
</html>