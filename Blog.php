<?php
session_start();
include_once('BlogRepository.php');
include_once('Teksti.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_text"])) {
    $text = $_POST["new_text"];

    $newTeksti = new Teksti($text);
    $blrep = new BlogRepository();
    $blrep->insertTeksti($newTeksti);

    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

$blrep = new BlogRepository();
$texts = $blrep->getAllTeksti();

$hide="";
if(!isset($_SESSION['username'])){
    header("location:LogIn.php");
}
else{
    if($_SESSION['role'] == "admin"){
        $hide = "Dashboard";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="blog.css">
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
<div class ="heading">
    <h1>Blog</h1>
    <h3>Do not hesitate to invest in your skin, it is going to talk for you for a very long time.</h3>
</div>
<div class="content">
<div class="Blog-photo"> 
    <img src="foto1.jpg" alt="foto">
    </div>
<div class="pargraph" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px; margin: 30px;">
    <p>Welcome to Ikusei, your premier destination for all things skincare! At Ikusei, we believe that beautiful
     skin begins with the right care routine. Our website offers a curated selection of high-quality skincare
     products, ranging from nourishing cleansers to rejuvenating serums, all carefully chosen to cater to 
     diverse skin types and concerns. Whether you're a skincare enthusiast or a beginner on the quest for
     healthier, more radiant skin, our user-friendly interface provides expert advice, product recommendations,
     and insightful tips to guide you on your skincare journey. Explore our blog for the latest trends, skincare routines,
     and expert interviews, and shop with confidence, knowing that each product on our site is backed by thorough research
     and positive customer reviews. Rediscover the joy of self-care and unlock your skin's full potential with Ikusei!</p>
 </div>
</div>
<footer>
    <div class="f">
            <p>Ourlinks</p>
      
        <div class="ff">
            <a href=""><img src="facebook.png " alt="fb" width="32px" height="32px"></a>
            <a href=""><img src="instagram.png " alt="ig" width="32px" height="32px"></a>
        </div>
    </div>
        <div class="footermain">
             <div class="footerleft">
            <p>Ikusei: Our curated skincare collection is a tribute to simplicity and effectiveness. Embrace self-care with us and discover the authentic radiance that comes from harnessing the power of natural ingredients. Ikusai: where skincare is as pure and genuine as you.</p>
        </div>
        <div class ="footercenter">
        <p>Transporti</p>
        <p>Contact us</p>
        <p>Privacy Policy</p>
        </div>
    <div class="fundi">
         <p>Copyright 2023 Ikusei Company. All rights reserved.</p>
    </div>
  </footer>
  
</body>
</html>