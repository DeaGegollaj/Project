<?php
session_start();
nclude_once('BrendetRepository.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $produktet = $_POST['produktet'];
    $cmimi = $_POST['cmimi'];
    $brendi = $_POST['brendi'];
    $imagePath = $_POST['imagePath'];

    $newBrendet = new ProduktetBrendet($produktet,$cmimi,$brendi,$imagePath);
    $brep = new BrendetRepository();
    $brep->insertProduktet($newProduktet);
}

$brep = new BrendetRepository();
$produktet = $brep->getAllBrendet();

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
    <link rel="stylesheet" href="Brendet1.css">
    <title>Brendet</title>
</head>
<body>
    <div class="header">
        <div class="logo">
        <img src="logo.jpg.png" alt="logo">
        </div>

                
            
        <div class="tabs">
            <label><a href="projekti.php" style="text-decoration: none; color: #688682;">HOME</a></label>
            <label><a href="blog.php">BLOG</a></label>
        </div>
    
            <div class="dropdown">
                <button class="drop" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><a href="Brendet1.html" style="text-decoration: none; color: #688682; font-size: 18px;">BRENDET</a></button>
                <div class="brands">
                    <a href="Brendet1.php">Anua</a>
                    <a href="Brendet1.php">Jumiso</a>
                    <a href="Brendet1.php">Purito</a>
                    <a href="Brendet1.php">Hemish</a>
                    <a href="Brendet1.php">Beauty of Joseon</a>
                </div>
            </div>
            <label>KATEGORITE</label> 
            <label><a href="login.php"> LOG IN </a></label>
            <label><a href="signup.php"> SIGN UP</a> </label>     
            <input type="text" placeholder="Search" style="height: 20px;">
            <button class="button" style="width: 50px; height: 25px; background-color: #688682; border: inset 3px;"></button>  
     </div>
     
     <h2 class="headerA"><a href="Brendet1.php">Anua</a></h2>  

     <div class="photosA">
       <div class="produktetA">
           <img src="anua1.jpg" alt="anua1" class="imgA">
           <div class="cmimiA">
               <h2>Anua Lotion</h2>  
               <p>18.70$</p>  
           </div>
           <div class="fjaletA">
               <button class="shtoA">Shto ne shporte</button>
           </div>
       </div>
   
       <div class="produktetA">
           <img src="anua2.jpg" alt="anua2" class="imgA">
           <div class="cmimiA">
               <h2>Anua Cleansing Oil</h2>   
               <p>25.99$</p> 
           </div>
               <div class="fjaletA">
                   <button class="shtoA"> Shto ne shporte</button>
   
               
           </div>
   
       </div>
   
       <div class="produktetA">
           <img src="anua3,jpg.png" alt="anua3" class="imgA">
           <div class="cmimiA"> 
               <h2>Anua Nacin Enriched Cream</h2> 
               <p>22.50$</p>  
           </div>
           <div class="fjaletA">
               <button class="shtoA"> Shto ne shporte</button>
           </div>
       </div>
   
       <div class="produktetA">
           <img src="anua4.jpg" alt="anua4" class="imgA">
           <div class="cmimiA">
               <h2>Anua Clear pad</h2>  
               <p>19.30$</p>  
           </div>
           <div class="fjaletA">
               <button class="shtoA"> Shto ne shporte</button>
           </div>
       </div>
     </div>



     
<<<<<<< HEAD
     <h2 class="headerJ"><a href="Brendet1.html">Jumiso</a></h2>  
=======
     <h2 class="headerJ"><a href="Brendet1.php">Jumiso</a></h2>  
>>>>>>> 2c013d2a6c93cc1c427efb87766818333ccdbd45

     <div class="photosJ">
       <div class="produktetJ">
           <img src="jumiso1.jpg" alt="jumiso1" class="imgJ">
           <div class="cmimiA">
               <h2>Peptide Essence</h2>  
               <p>21.70$</p>  
           </div>
           <div class="fjaletJ">
               <button class="shtoJ">Shto ne shporte</button>
           </div>
       </div>
   
       <div class="produktetJ">
           <img src="4.jpg" alt="jumiso2" class="imgJ">
           <div class="cmimiJ">
               <h2>Jumiso</h2>   
               <p>22.99$</p> 
           </div>
               <div class="fjaletJ">
                   <button class="shtoJ"> Shto ne shporte</button>
   
               
           </div>
   
       </div>
   
       <div class="produktetJ">
           <img src="jumiso3.jpg" alt="jumiso3" class="imgJ">
           <div class="cmimiJ"> 
               <h2>Vitamin cream</h2> 
               <p>23.50$</p>  
           </div>
           <div class="fjaletJ">
               <button class="shtoJ"> Shto ne shporte</button>
           </div>
       </div>
   
       <div class="produktetJ">
           <img src="jumiso4.jpg" alt="jumiso4" class="imgJ">
           <div class="cmimiJ">
               <h2> All Day Serum</h2>   
               <p>19.90$</p>  
           </div>
           <div class="fjaletJ">
               <button class="shtoJ"> Shto ne shporte</button>
           </div>
       </div>
   
     </div>


     
     
<<<<<<< HEAD
     <h2 class="headerP"><a href="Brendet1.html">Purito</a></h2>  
=======
     <h2 class="headerP"><a href="Brendet1.php">Purito</a></h2>  
>>>>>>> 2c013d2a6c93cc1c427efb87766818333ccdbd45

     <div class="photosP">
       <div class="produktetP">
           <img src="purito1.jpg" alt="purito1" class="imgP">
           <div class="cmimiP">
               <h2>Ph Cleanser</h2>  
               <p>18.20$</p>  
           </div>
           <div class="fjaletP">
               <button class="shtoP">Shto ne shporte</button>
           </div>
       </div>
   
       <div class="produktetP">
           <img src="purito2.jpg" alt="purito2" class="imgP">
           <div class="cmimiP">
               <h2>Foaming Cleanser</h2>   
               <p>17.00$</p> 
           </div>
               <div class="fjaletP">
                   <button class="shtoP"> Shto ne shporte</button>
   
               
           </div>
   
       </div>
   
       <div class="produktetP">
           <img src="purito3.jpg" alt="purito3" class="imgP">
           <div class="cmimiP"> 
               <h2>Calming Gel</h2> 
               <p>12.99$</p>  
           </div>
           <div class="fjaletP">
               <button class="shtoP"> Shto ne shporte</button>
           </div>
       </div>
   
       <div class="produktetP">
           <img src="purito4.jpg" alt="purito4" class="imgP">
           <div class="cmimiP">
               <h2>Unscented Toner</h2>   
               <p>25.90$</p>  
           </div>
           <div class="fjaletP">
               <button class="shtoP"> Shto ne shporte</button>
           </div>
       </div>
   
    </div>
    
     
<<<<<<< HEAD
    <h2 class="headerH"><a href="Brendet1.html">Hemish</a></h2>  
=======
    <h2 class="headerH"><a href="Brendet1.php">Hemish</a></h2>  
>>>>>>> 2c013d2a6c93cc1c427efb87766818333ccdbd45

    <div class="photosH">
      <div class="produktetH">
          <img src="hemish1.jpg" alt="hemish1" class="imgH">
          <div class="cmimiH">
              <h2>Eye Cream</h2>  
              <p>20.20$</p>  
          </div>
          <div class="fjaletH">
              <button class="shtoH">Shto ne shporte</button>
          </div>
      </div>
  
      <div class="produktetH">
          <img src="hemish2.jpg" alt="hemish2" class="imgH">
          <div class="cmimiH">
              <h2>Mandarin Balm</h2>   
              <p>19.80$</p> 
          </div>
              <div class="fjaletH">
                  <button class="shtoH"> Shto ne shporte</button>
  
              
          </div>
  
      </div>
  
      <div class="produktetH">
          <img src="hemish3.jpg" alt="hemish3" class="imgH">
          <div class="cmimiH"> 
              <h2>RosecEye Patches</h2> 
              <p>19.99$</p>  
          </div>
          <div class="fjaletH">
              <button class="shtoH"> Shto ne shporte</button>
          </div>
      </div>
  
      <div class="produktetH">
          <img src="hemish4.jpg" alt="hemish4" class="imgH">
          <div class="cmimiH">
              <h2>BB Cream SPF 30</h2>   
              <p>22.90$</p>  
          </div>
          <div class="fjaletH">
              <button class="shtoH"> Shto ne shporte</button>
          </div>
      </div>
  
   </div>

<<<<<<< HEAD
   <h2 class="headerB"><a href="Brendet1.html">Beauty of Joseon</a></h2>  
=======
   <h2 class="headerB"><a href="Brendet1.php">Beauty of Joseon</a></h2>  
>>>>>>> 2c013d2a6c93cc1c427efb87766818333ccdbd45

   <div class="photosB">
     <div class="produktetB">
         <img src="BJ1.jpg" alt="BJ1" class="imgB">
         <div class="cmimiB">
             <h2>Cleansing Balm</h2>  
             <p>22.20$</p>  
         </div>
         <div class="fjaletB">
             <button class="shtoB">Shto ne shporte</button>
         </div>
     </div>
 
     <div class="produktetB">
         <img src="BJ2.jpg" alt="BJ2" class="imgB">
         <div class="cmimiB">
             <h2>Eye Serum</h2>   
             <p>16.80$</p> 
         </div>
             <div class="fjaletB">
                 <button class="shtoB"> Shto ne shporte</button>
 
             
         </div>
 
     </div>
 
     <div class="produktetB">
         <img src="BJ3.jpg" alt="BJ3" class="imgB">
         <div class="cmimiB"> 
             <h2>Glow Deep Serum</h2> 
             <p>19.99$</p>  
         </div>
         <div class="fjaletB">
             <button class="shtoB"> Shto ne shporte</button>
         </div>
     </div>
 
     <div class="produktetB">
         <img src="BJ4.jpg" alt="BJ4" class="imgB">
         <div class="cmimiB">
             <h2>Red Bean Pore Mask</h2>   
             <p>18.90$</p>  
         </div>
         <div class="fjaletB">
             <button class="shtoB"> Shto ne shporte</button>
         </div>
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