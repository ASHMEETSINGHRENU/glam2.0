<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/home.css">

    <link rel="icon" href="images/urllogo (2).jpg">
    <title>GLAM | HOME</title>
</head>
<body>
    <header>
        <div id="navbar">
            <div class="logo">
                <img src="images/logo.jpg" width="125px" height="125px">
            </div>
            <div class="search">
                <input type="text" id="searchInput" placeholder="Glam..." onclick="showList()">
                <ul id="resultsList"></ul>
            </div>
            <button type="button">Search</button> 
            <nav class="navbar-2">
                <ul>
                    <li><a class="active" href="#">HOME</a></li>
                    <li><a href="offer.php">OFFER</a></li>
                    <li><a href="shopping.php">PRODUCT</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <div class="cart"><a href="mycart.php"><ion-icon name="bag-handle-outline"></ion-icon></a></div>
                    <div class="user"> <ion-icon name="person-outline"> </ion-icon> <span class="username"><?php echo $_SESSION['username']; ?> </span></div>
                    <div class="sign"> <a href="logout.php"><ion-icon name="exit-outline"></ion-icon></a></div>
                </ul>
            </nav>
        </div>
    </header>
    






<!--------------------------------------------------------- our products -------------------------------------------------------------------->
<div class="our-product">
    <h1> features PRODUCTS </h1>
    <p>Cosmetics enhance beauty, offering a canvas for self-expression. From vibrant eyeliner to lip shades that empower, they weave art into our daily routines, 
       boosting confidence and celebrating individuality. <br> </p>
</div>

<!------------------------------------------------------ offers product------------------------------------------------------------------------->

<section id="features">
    
    <div class="fe-box">
       <img src="images/lip-1.jpg" width="300px" height="300px" id="img-1"><br>
       <h4> Lip-stick </h4>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
       <p>MRP: ₹200.00
    <button id="buttons"><a href="lipstick-1.php"> shop Now </a></button>
    </p>
     </div>






    <div class="fund">
       <img src="images/foundation-2.jpg" width="300px" height="300px" id="img-3"><br>
       <h4> Foundation </h4>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>MRP: ₹200.00
       <button id="buttons"><a href="foundation-2.php"> shop now </a></button>
       </p>
   </div>



   <div class="lotion">
    <img src="images/kajal-2.jpg" width="300px" height="300px" id="img-4"><br>
    <h4> lip-liner</h4>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <p>MRP: ₹200.00 
    <button id="buttons"><a href="kajal-2.php"> shop now </a></button>
    </p>
    </div>

</section>









<!--========================== advertisement_ img=========================== -->

<div class="banner-adver">
    <div class="adver">
      <img src="images/ad_img (1).jpg" alt="Banner 1" width="60%" height="600px">
      <img src="images/ad_img (2).jpg" alt="Banner 2" width="60%" height="600px">
      <img src="images/ad_img (3).jpg" alt="Banner 3" width="60%" height="600px">
      <img src="images/ad_img (4).jpg" alt="Banner 4" width="60%" height="600px">
      <img src="images/ad_img (1).jpg" alt="Banner 1" width="60%" height="600px">
      <img src="images/ad_img (2).jpg" alt="Banner 2" width="60%" height="600px">
      <img src="images/ad_img (3).jpg" alt="Banner 3" width="60%" height="600px">
      <img src="images/ad_img (4).jpg" alt="Banner 4" width="60%" height="600px">
      <img src="images/ad_img (1).jpg" alt="Banner 1" width="60%" height="600px">
      <img src="images/ad_img (2).jpg" alt="Banner 2" width="60%" height="600px">
      <img src="images/ad_img (3).jpg" alt="Banner 3" width="60%" height="600px">
      <img src="images/ad_img (4).jpg" alt="Banner 4" width="60%" height="600px">
    </div>
  </div>





<!----------------------  offers  ------------------------------->
<section class="offer">
    <div class="dsc-offer">
    <h1> FLAT<span> ₹20%</span>OFF</h1>
    <P> ON ALL PRODUCTS </P><br><br><br>
    <div class="shop-now"> <a href="offer.php"> SHOP NOW </a></div>
    </div> 

</section>




<!-- -------------------last navbar------------------------ -->

<footer>
    <div class="last_nav">
        <div class="last_nav-1">
           <h1>Categries </h1>
           <ul> 
                <a href="lipstick-1.php"><li> Lip-stick </li></a> 
                <a href="lip-liner-1.php"><li> Lip-liner </li></a>
                <a href="kajal-1.php"><li> kajal </li></a>
                <a href="eyeliner-1.php"><li> Eyeliner </li></a>
            </ul> 
            
            
            
        </div>
       
        <div class="last_nav-2">
            <h1> Customer Policies </h1>
            <ul> 
                 <a href=""><li> Contact Us </li></a>
                 <a href=""><li> T&C </li></a>

                 <li> <span class="username"><?php echo $_SESSION['username']; ?> Log-out</span>
                 <a href="logout.php"><ion-icon name="exit-outline"></ion-icon></a></li>
             </ul>
    
        </div>
    </div>

    <div class="last_icon">
        <div class="last_icon_cus">
            <div class="_1"> <ion-icon name="logo-whatsapp"></ion-icon></div>
            <div class="_2"><ion-icon name="logo-twitter"></ion-icon></div>
            <div class="_3"><ion-icon name="logo-instagram"></ion-icon></div>
            <div class="_4"><ion-icon name="logo-google-playstore"></ion-icon></div>
        </div>
    </div>
</footer> 

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="home.js"></script>
</body>
</html>




</body>
</html>
