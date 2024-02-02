<?php
include_once('LajmetRepository.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datatDelete = $_POST['eventi'];

    $lrep = new LajmetRepository();
    $datat = $lrep->getLajmetByDatat($datatDelete);

    if($DatatDelete){
        $lrep->deleteDatat($datatDelete);
        $_SESSION['deletemessage'] = "Produktet: $datatDelete u fshi nga " . $_SESSION['username'] . "!";
    }
    else{
        $_SESSION['deletemessage'] = "Produktet: $datatDelete nuk ekziston!";
    }

    header("location: Lajmet.php");
    exit();
}
?>