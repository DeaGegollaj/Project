<?php
include_once('BrendetRepository.php');
include_once('Produktet-Brendet.php');

session_start();

if(!isset($_SESSION['username'])){
    header("location:LogIn.php");
    exit();
}

if($_SESSION['role'] != "admin"){
    header("location:Home.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(empty($_POST['produktet']) || empty($_POST['cmimi']) || empty($_POST['brendet']) || empty($_POST['imagePath']) || empty($_POST['kategoria'])){
        echo "Nuk keni regjistruar produkt te ri!";
    }
    else{
        $libri = $_POST['produktet'];
        $cmimi = $_POST['cmimi'];
        $brendt = $_POST['brendet'];
        $imagePath = $_POST['imagePath'];
        $kategoria = $_POST['kategoria'];

        $brep = new BrendetRepository();
        $emriProduktit = $brep->getBrendetByProduktet($produktet);

        if($emriProduktit){
            echo "Produkti ekziston !";
        }
        try{
            $newBrendet = new ProduktetBrendet($produktet,$cmimi,$brendet,$imagePath,$kategoria);
            $brep->insertProduktet($newBrendet);
            header("location: Brendet1.php");
            exit();
        }
        catch (PDOException $e){
            if ($e->getCode() == '23000'){
                echo "Prdukti ekziston ne databaze te brendet page!";
            }
            else{
                echo "Error: ".$e->getMessage();
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
    <title>Add Produkt</title>
    <link rel="stylesheet" href="AddProduket.css">
</head>

<body>
    <div class="produkti">
        <form action="AddProduktet-brendet.php" method="post">
            <h1 style="text-align: center;">Add a Produkt</h1>

            <div class="label">
                <input type="text" placeholder="Produktet" name="Produktet">
            </div>

            <div class="label">
                <input type="text" placeholder="Cmimi" name="cmimi">
            </div>

            <div class="label">
                <input type="text" placeholder="Brendet" name="brendet">
            </div>

            <div class="label">
                <input type="text" placeholder="Image" name="imagePath">
            </div>


            <input type="submit" name="addbtn" value="Add Produktet" class="add">
        </form>
    </div>
</body>

</html>