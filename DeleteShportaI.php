<?php
include_once('ShportaIRepository.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produktiDelete = $_POST['libri'];

    $shrep = new ShportaIRepository();
    $produkti = $shrep->getShportaIByProduktet($produktiDelete);

    if($produktiDelete){
        $shrep->deleteLibri($produktiDelete);
        echo "Product was deleted successfully!";
    }
    else{
        echo "Product was not found in the database!";
    }

    header("location: ShportaI.php");
    exit();
}
?>