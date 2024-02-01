<?php
include_once('DatabaseConnection.php');
include_once('UserRepository.php');

if ($_REQUEST['REQUEST_METHOD'] == 'POST'){
    $userRepostory = new UserRepository();

    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $roli = $_POST['roli'];
    $email = $_POST['email'];

    $userRepostory->editUser($emri,$mbiemri,$username,$password,$roli,$email);
    header("location:Dashboard.php");
}
else{
    $email = $_GET['email'];

    $userRepostory = new UserRepository();
    $user = $userRepostory->getUserByEmail($email);
?>

<!DOCTYPE html>
<html>  
<link rel="stylesheet" href='Edit.css">
<body>
    <form class="wrapper" method="post" action="">
        <h1 style="text-align: center;">Edit User</h1>
        <input class="inputbox" type="hidden" name="email" value="<?php echo $user['Email']; ?>"><br>
        <input class="inputbox" placeholder="Emri" type="text" name="emri" value="<?php echo $user['emri']; ?>"><br>
        <input class="inputbox" placeholder="Mbiemri" type="text" name="mbiemri" value="<?php echo $user['Mbiemri']; ?>"><br>
        <input class="inputbox" placeholder="Username" type="text" name="username" value="<?php echo $user['Username']; ?>"><br>
        <input class="inputbox" placeholder="Password" type="text" name="password" value="<?php echo $user['Pass']; ?>"><br>
        <input class="inputbox" placeholder="Roli" type="text" name="roli" value="<?php echo $user['Roli']; ?>"><br>
        <input type="submit" value="Save Changes" class="add">
  </form>  
</body>
</html>
<?php
}
?>