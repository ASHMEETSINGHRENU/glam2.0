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
    <link rel="stylesheet" href="style/serum-1.css">
    <link rel="icon" href="urllogo (2).jpg">
    <title> Single product </title>
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
                <li><a href="home.php"> HOME </a></li>
                <li><a href="offer.php"> OFFER </a></li>
                <li><a class="active" href="shopping.php"> PRODUCT </a></li>
                <li><a href="#"> ABOUT </a></li>
                <div class="cart"><a href="mycart.php"><ion-icon name="bag-handle-outline"></ion-icon></a></div>
                <div class="user"> <ion-icon name="person-outline"> </ion-icon> <span class="username"><?php echo $_SESSION['username']; ?> </span></div>
                <div class="sign"> <a href="logout.php"><ion-icon name="exit-outline"></ion-icon></a></div>
            </ul>
        </nav>
   </div>
</header>

    <!------------------------------ first product ---------------------------------->

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <a href="shopping.php"><ion-icon name="arrow-back-outline" ></ion-icon></a>

            <div class="largeImg">
            <img   id="MainImg" src="images/serum-2.jpg" width="100%" alt="">
            </div>

            <div class="small-img-group">
                
            <div class="small-img-col" onclick="changeImage('images/serum-1.jpg')">
            <img id="small-image" src="images/serum-1.jpg" width="100%" alt=""  >
            </div>

            <div class="small-img-col" onclick="changeImage('images/serum-2.jpg')">
            <img id="small-image" src="images/serum-2.jpg" width="100%" alt="">
            </div>
        </div>
        </div>

        <div class="single-pro-details">
            <h6> Glam </h6>
            <h4>Glam Absolute Serum - anti aging /250gm</h4>
            <h2> ₹1999</h2>
            <input type="number" value="1">
            <a href="mycart.php?action=add&type=serum&id=2"> <button> ADD To Cart</button> </a>
            <h4> product details </h4>
            <span>This serum gives you a good variety for your skin .This is an all skin type product ,
                which gives you great skin gkow up.</span>
        </div>
    </section>


<!-- ===================================================other recommending products============================================ -->





<h1 class="decorative-heading"> try this also</h1>


<div class="pro-container">
    
    <div class="pro">
        <a href="blush-3.php">
        <img src="images/blush-3.jpg" alt="">
        <div class="des">
            <span> lakme </span>
            <h5> blush </h5>
            <div class="star">
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
            </div>
            <h4>₹485</h4>
        </div>
        <div class="Acart">
            <h1> Add To Cart </h1>
        </div>
    </a>
        <div class="like_btn">
            <ion-icon onclick="Toggle3()" name="heart-outline" class="like_button3"></ion-icon>
        </div>
    </div>
    
    <div class="pro">
        <a href="liquid-blush-3.php">
        <img src="images/liquid-blush-3.jpg" alt="">
        <div class="des">
            <span> Rare </span>
            <h5> liquid lipstick  </h5>
            <div class="star">
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
            </div>
            <h4>₹458</h4>
        </div>
        <div class="Acart">
            <h1> Add To Cart </h1>
        </div>
    </a>
        <div class="like_btn">
            <ion-icon onclick="Toggle4()" name="heart-outline" class="like_button4"></ion-icon>
        </div>
        </div>
</div>
                
    <!-- =================================================</section>============================================= -->

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

          <script src="serum-1.js"></script>
</body>
</html>