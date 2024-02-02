<?php
include_once('BlogRepository.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tekstiDelete = $_POST['teksti'];

    $blrep = new BlogRepository();
    $teksti = $blrep->getBlogByTeksti($tekstiDelete);

    if ($teksti) {
        $blrep->deleteTeksti($tekstiDelete);
        echo "<script>alert('Text was deleted successfully!')</script>";
    } else {
        echo "<script>alert('Text was not found in the database!')</script>";
    }

    header("location: Blog.php");
    exit();
}
?>