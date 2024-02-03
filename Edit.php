<?php
include_once('DatabaseConnection.php');
include_once('UserRepository.php');

if ($_REQUEST['REQUEST_METHOD'] == 'POST'){
    $userRepostory = new UserRepository();

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $roli = $_POST['roli'];
    $email = $_POST['email'];

    $userRepostory->editUser($name,$lastname,$password,$roli,$email);
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
        <input class="inputbox" placeholder="Name" type="text" name="name" value="<?php echo $user['Name']; ?>"><br>
        <input class="inputbox" placeholder="LastName" type="text" name="lastname" value="<?php echo $user['LastName']; ?>"><br>
        <input class="inputbox" placeholder="Password" type="text" name="password" value="<?php echo $user['Password']; ?>"><br>
        <input class="inputbox" placeholder="Roli" type="text" name="roli" value="<?php echo $user['Roli']; ?>"><br>
        <input type="submit" value="Save Changes" class="add">
  </form>  
</body>
</html>
<?php
}
?>