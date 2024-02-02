<?php
include_once('BrendetRepository.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ProduktetToAdd = $_POST['produktet'];

    $Shrep = new BrendetRepository();
    $existingProduktet = $Shrep->getProduktetByProduktet($ProduktetToAdd);

    if($existingProduktet){
        $Shrep->insertProduktetIntoShporta($ProduktetToAdd);
        echo "<script>alert('Your product is added to your shopping cart successfully!')</script>";
        
    }else{
        echo "<script>alert('This product was not found in the database!')</script>";
    }
    
    header("location: Brendet.php");
    exit();
}
?>