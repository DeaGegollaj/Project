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

$insertmessage = isset($_SESSION['insertmessage']) ? $_SESSION['insertmessage'] :"";
unset($_SESSION['insertmessage']);

$hrep = new ProjektRepository();
$produktet = $hrep->getAllProducts();


$hide="";
if(!isset($_SESSION['username'])){
    header("location:Login.php");
}
else{
    if($_SESSION['role'] == "admin"){
        $hide = "Dashboard";
    }

?>
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projekti.css">
    <title>Ikusei</title>
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

  
 

<img id="slidercontainer">
  <script>
       let i = 0;
       let imgArray = ['ph1.jpg','ph2.jpg','ph3.jpg','ph6.jpg'];
        
       
       function changeImg(){
      document.getElementById('slidercontainer').src = imgArray[i];

            if(i < imgArray.length -1){
               i++;
            }
            else{
               i=0;
            }
               setTimeout("changeImg()", 2000);
        }
        document.addEventListener(onload, changeImg());

  </script>


<h2 class="header2">Best Sellers</h2>  

  <div class="photos">
    <div class="produktet">
        <img src="1.jpg" alt="1" class="img">
        <div class="cmimi">
            <h2>Laneige</h2>  
            <p>16.00$</p>  
        </div>
        <div class="fjalet">
            <button class="shto">Shto ne shporte</button>
        </div>
    </div>

    <div class="produktet">
        <img src="2.jpg" alt="2" class="img">
        <div class="cmimi">
            <h2>Ultra</h2>   
            <p>13.99$</p> 
        </div>
            <div class="fjalet">
                <button class="shto"> Shto ne shporte</button>

            
        </div>

    </div>

    <div class="produktet">
        <img src="3.jpg" alt="3" class="img">
        <div class="cmimi"> 
            <h2>Purito</h2> 
            <p>22.50$</p>  
        </div>
        <div class="fjalet">
            <button class="shto"> Shto ne shporte</button>
        </div>
    </div>

    <div class="produktet">
        <img src="4.jpg" alt="4" class="img">
        <div class="cmimi">
            <h2>Jumiso</h2>  
            <p>19.30$</p>  
        </div>
        <div class="fjalet">
            <button class="shto"> Shto ne shporte</button>
        </div>
    </div>

    <div class="produktet">
        <img src="5.jpg" alt="5" class="img">
        <div class="cmimi"> 
            <h2>Goodal</h2>  
            <p>12.00$</p> 
        </div>
        <div class="fjalet">
            <button class="shto"> Shto ne shporte</button>
        </div>

    </div>
    <div class="produktet">
        <img src="6.jpg" alt="6" class="img">
        <div class="cmimi">
            <h2>Purito</h2>
            <p>10.00$</p>    
        </div>
        <div class="fjalet">
            <button class="shto"> Shto ne shporte</button>
        </div>
    </div>

    <div class="produktet">
        <img src="7.jpg" alt="7" class="img">
        <div class="cmimi">
            <h2>Huxley</h2>  
            <p>6.99$</p>  
        </div>
        <div class="fjalet">
            <button class="shto"> Shto ne shporte</button>
        </div>
    </div>
    <div class="produktet">
        <img src="8.jpg" alt="8" class="img">
        <div class="cmimi">
            <h2>Anua</h2>  
            <p>23.70$</p>  
        </div>
        <div class="fjalet">
            <button class="shto"> Shto ne shporte</button>
        </div>
    </div>

    <div class="produktet">
        <img src="9.jpg" alt="9" class="img">
        <div class="cmimi"> 
            <h2>Beauty of Joseon</h2>
            <p>26.00$</p>   
        </div>
        <div class="fjalet">
            <button class="shto"> Shto ne shporte</button>
        </div>
    </div>
  </div>
  <div class="pages">
    <button style="background-color:#FACBBB; border: none;  border-radius: 2px;">Previous</button>
    <div class="numrat">
        <button style="height: 30px; width: 30px; background-color:#FACBBB; border: inset 0px;  border-radius: 2px;">1</button>
        <button style="height: 30px; width: 30px; border: inset 0px; border-radius: 2px;">2</button>
        <button style="height: 30px; width: 30px; border: inset 0px;  border-radius: 2px;">3</button>
        <button style="height: 30px; width: 30px; border: inset 0px;  border-radius: 2px;">4</button>
    </div>
    <button class="button1" style="background-color:#FACBBB;  border: none;  border-radius: 2px;">Next</button>
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