<?php
include_once('BrendetRepository.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ProductsToAdd = $_POST['produktet'];

    $hrep = new BrendetRepository();
    $existingProducts = $hrep->getProductsByProduktet($ProduktetToAdd);

    if($existingProducts){
        $hrep->insertProductsIntoShporta($produktetToAdd);
        echo "<script>alert('Your product is added to your shopping cart successfully!')</script>";
        
    }else{
        echo "<script>alert('This product was not found in the database!')</script>";
    }
    
    header("location: Brendet.php");
    exit();
}
?>