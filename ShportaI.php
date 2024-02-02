<?php
session_start();

include_once("ProjectRepository.php");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $produktet = $_POST['produktet'];
    $cmimi = $_POST['cmimi'];
    $brendet = $_POST['brendet'];
    $images = $_POST['images'];

    $newProducts  = new Produktet($Produktet,$cmimi,$autori,$image);
    $hrep = new ProjectRespository();
    $hrep->insertProduktet($newproducts);
}
$hrep = new ProjektRepository();
$produktet = $hrep->getAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @media(min-width: 768px){
            .news{
                margin-left: -4px;
            }
            .emri{
                font-size: 30px;
            }
            .autori{
                font-size: 25px;
            }
            .cmimi{
                font-size: 25px;
            }
        }
    </style>
</head>
<body>
<div class="header">
        

    <img  class="logo" src="logo.jpg.png" alt="logo">

        <label><a href="projekti.php">HOME</a></label>
        <label><a href="Blog.php">BLOG</a></label>
        <label><a href="Brendet1.php">BRENDET</a></label>
        <label>KATEGORITE</label> 
        <label><a href="login.php">LOG IN</a></label>
        <label><a href="signup.php">SIGN UP</a></label>   

  <input type="text" placeholder="Search" style="height: 20px;">
  <button class="button" style="width: 50px; height: 25px; background-color: #688682; border: inset 3px;"></button>
        
    </div>
<main>
        <div class="shporta">
            <h2 style="margin-left: 70px; margin-top: 40px; color: rgb(248, 216, 231);">Shporta Juaj</h2>
                <?php foreach($products as $products){ ?>
                    <div class="blerjet">
                        <div class="info">
                            <div>
                                <img src="<?= $products['Image'] ?>" alt="" class="produktet">
                            </div>
                            <div class="produktet">
                                <p class="name"><?= $products['Produktet'] ?></p>
                                <p class="brendet"><?= $products['Brendet'] ?></p>
                                <p class="cmimi"><?= $products['Cmimi'] ?>$</p>
                            </div>
                            <form action="DeleteShporta.php" method="post">
                                    <input type="hidden" name="produktet" value="<?php echo $products['Produktet']; ?>">
                                    <button class="continue" style=" width: 100%; font-family: 'Times New Roman', Times, serif; height: 35px;">Delete</button>
                            </form>
                        </div>
                    </div>
                <?php }
                 ?>
            </div>
        </div>

        <button class="continue" style="font-family: 'Times New Roman', Times, serif; margin-left: 29.5vw; width: 40%;">Continue Shopping</button>


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