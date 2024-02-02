<?php
include 'Datat.php';
session_start();

if(!isset($_SESSION['username'])){
    header("location:Login.php");
    exit();
}

if($_SESSION['role'] != "admin"){
    header("location:Project.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include_once('LajmetRepository.php');

    if(empty($_POST['datat']) || empty($_POST['dita']) || empty($_POST['muaji']) || empty($_POST['viti']) || empty($_POST['ora'])){
        echo "<div style='color: #688682; font-weight: bold; text-align: center; position: fixed; top: 0; left: 50%; transform: translateX(-50%); width: 15%; border-radius: 5px; padding: 10px; background-color: #FACBBB;'>Nuk keni regjistruar produkt te ri!</div>";
    }
    else{
        $datat = $_POST['datat'];
        $dita = $_POST['dita'];
        $muaji = $_POST['muaji'];
        $viti = $_POST['viti'];
        $ora = $_POST['ora'];

        $lrep = new LajmetRepository();
        $emridatat = $lrep->getLajmetByDatat($datat);
        
        if($emriDatat){
            echo "<div style='color: #688682; font-weight: bold; text-align: center; position: fixed; top: 0; left: 50%; transform: translateX(-50%); width: 15%; border-radius: 5px; padding: 10px; background-color: #FACBBB ;'>Kjo date ekziston ne databaze!</div>";
        }
        try{
            $newDatat = new Datat($eventi,$dita,$muaji,$viti,$ora);
            $lrep->insertEventi($newDatat);
            header("location: Lajmet.php");
            exit();
        }
        catch(PDOException $e){
            if($e->getCode() == '23000'){
                echo "<div style='color:#688682 ; font-weight: bold; text-align: center; position: fixed; top: 0; left: 50%; transform: translateX(-50%); width: 15%; border-radius: 5px; padding: 10px; background-color: #FACBBB;'>Kjo date ekziston ne databaze te Home!</div>";
            }
            else{
                echo "Error: " . $e->getMessage();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Datat</title>
    <link rel="stylesheet" href="AddBook.css">
</head>
<body>
    <div class="container">
        <form action="AddDatat.php" method="post">
            <h1 style="text-align: center;">Add a date</h1>
                 
    
            <div class="inputbox">
                <input type="text" placeholder="Emri i Dates" name="Datat">
            </div>
    
            <div class="inputbox">
                <input type="int" placeholder="Dita" name="dita">
            </div>
    
            <div class="inputbox">
                <input type="text" placeholder="Muaji" name="muaji">
            </div>

            <div class="inputbox">
                <input type="text" placeholder="Viti" name="viti">
            </div>

            <div class="inputbox">
                <input type="text" placeholder="Ora" name="ora">
            </div>
    
            <input type="submit" name="addbtn" value="Add Datat" class="add">
        </form>
    </div>
</body>
</html>