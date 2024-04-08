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
    <title> GLAM | SHOPPING </title>
    <link rel="stylesheet" href="style/shopping.css">
    <link rel="icon" href="urllogo (2).jpg">
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
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="offer.php">OFFER</a></li>
                    <li><a class="active" href="shopping.html">PRODUCT</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <div class="cart"><a href="mycart.php"><ion-icon name="bag-handle-outline"></ion-icon></a></div>
                    <div class="user"> <ion-icon name="person-outline"> </ion-icon> <span class="username"><?php echo $_SESSION['username']; ?> </span></div>
                    <div class="sign"> <a href="logout.php"><ion-icon name="exit-outline"></ion-icon></a></div>
                </ul>
            </nav>
        </div>
    </header>


<section id="page-header">
    <h2> welcome to the best shopping deals </h2>
</section>
<br><br>



<!-- ================  lipstick============ -->
<h1 class="decorative-heading"> lip-stick </h1>
<div class="pro-container">
    <div class="pro">
    <a href="lipstick-1.php">
            <img src="images/lip-1.jpg" alt="">
            <div class="des">
                <span> Glam </span>
                <h5> lipstick-Maroon  </h5>
                <div class="star">
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                </div>
                <h4>₹499</h4>
            </div>
            <div class="Acart">
            <a href="mycart.php?action=add&type=lipstick&id=1"> <h1> Add To Cart </h1></a>
            </div>
    </a>
        <div class="like_btn">
            <ion-icon onclick="Toggle1()" name="heart-outline" class="like_button"></ion-icon>
        </div>
    </div>

    <div class="pro">
    <a href="lipstick-2.php">
            <img src="images/lip-2.jpg" alt="">
            <div class="des">
                <span> Glam </span>
                <h5> lipstick- Nude pink  </h5>
                <div class="star">
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                </div>
                <h4>₹499</h4>
            </div>
            <div class="Acart">
            <a href="mycart.php?action=add&type=lipstick&id=2"><h1> Add To Cart </h1></a>
            </div>
    </a>
        <div class="like_btn">
            <ion-icon onclick="Toggle1()" name="heart-outline" class="like_button"></ion-icon>
        </div>
    </div>

    <div class="pro">
    <a href="lipstick-3.php">
            <img src="images/lip-3.jpg" alt="">
            <div class="des">
                <span> Glam </span>
                <h5> lipstick- off red </h5>
                <div class="star">
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                </div>
                <h4>₹499</h4>
            </div>
            <div class="Acart">
            <a href="mycart.php?action=add&type=lipstick&id=3"><h1> Add To Cart </h1></a>
            </div>
    </a>
        <div class="like_btn">
            <ion-icon onclick="Toggle1()" name="heart-outline" class="like_button"></ion-icon>
        </div>
    </div>





</div>

<!-- ====================== liquid-lipstick ==============-->
<h1 class="decorative-heading"> liquid-liptick </h1>
<div class="pro-container">
    <div class="pro">
        <a href="liquid-lip-1.php">
        <img src="images/liquid-lip-1.jpg" alt="">
        <div class="des">
            <span> Glam </span>
            <h5> liquid lipstick- Pink</h5>
            <div class="star">
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
            </div>
            <h4>₹550</h4>
        </div>
        <div class="Acart">
        <a href="mycart.php?action=add&type=liquid-lipstick&id=1"><h1> Add To Cart </h1></a>
        </div>
    </a>
        <div class="like_btn">
            <ion-icon onclick="Toggle1()" name="heart-outline" class="like_button"></ion-icon>
        </div>
    </div>


    <div class="pro">
        <a href="liquid-lip-2.php">
        <img src="images/liquid-lip-2.jpg" alt="">
        <div class="des">
            <span> Glam </span>
            <h5> liquid lipstick- Dark red </h5>
            <div class="star">
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
            </div>
            <h4>₹550</h4>
        </div>
        <div class="Acart">
        <a href="mycart.php?action=add&type=liquid-lipstick&id=2"><h1> Add To Cart </h1></a>
        </div>
    </a>
        <div class="like_btn">
            <ion-icon onclick="Toggle1()" name="heart-outline" class="like_button"></ion-icon>
        </div>
    </div>


    <div class="pro">
        <a href="liquid-lip-3.php">
        <img src="images/liquid-lip-3.jpg" alt="">
        <div class="des">
            <span> Glam </span>
            <h5> liquid lipstick- Light pink </h5>
            <div class="star">
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
            </div>
            <h4>₹550</h4>
        </div>
        <div class="Acart">
        <a href="mycart.php?action=add&type=liquid-lipstick&id=3"><h1> Add To Cart </h1></a>
        </div>
    </a>
        <div class="like_btn">
            <ion-icon onclick="Toggle1()" name="heart-outline" class="like_button"></ion-icon>
        </div>
    </div>

</div>



<!-- =================== lip-liner======================== -->
<h1 class="decorative-heading"> lip-liner  </h1>
<div class="pro-container">
 <div class="pro">
    <a href="lip-liner-1.php">
    <img src="images/lip-liner-1.jpeg" alt="">
    <div class="des">
        <span> Glam </span>
        <h5>lip liner- Light shade</h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>

        </div>
        <h4>₹299</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=lip-liner&id=1"><h1> Add To Cart </h1></a>
    </div>
   
    <div class="like_btn">
        <ion-icon onclick="Toggle8()" name="heart-outline" class="like_button"></ion-icon>
    </div>
  </div>  



  <div class="pro">
    <a href="lip-liner-2.php">
    <img src="images/lip-liner-2.jpeg" alt="">
    <div class="des">
        <span> Glam </span>
        <h5>lip liner- Dark Shade </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>

        </div>
        <h4>₹299</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=lip-liner&id=2"><h1> Add To Cart </h1></a>

    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle8()" name="heart-outline" class="like_button"></ion-icon>
    </div>
</div> 
</div>


<!-- ========================kajal============================== -->
<h1 class="decorative-heading"> kajal </h1>
<div class="pro-container">
 <div class="pro">
    <a href="kajal-1.php">
    <img src="images/kajal-1.jpg" alt="">
    <div class="des">
        <span> Glam </span>
        <h5> kajal- White  </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>

        </div>
        <h4>₹459</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=kajal&id=1"><h1> Add To Cart </h1></a>
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle8()" name="heart-outline" class="like_button"></ion-icon>
    </div>
   </div> 

   <div class="pro">
    <a href="kajal-2.php">
    <img src="images/kajal-2.jpg" alt="">
    <div class="des">
        <span> Glam </span>
        <h5> kajal- Black </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>

        </div>
        <h4>₹459</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=kajal&id=2"><h1> Add To Cart </h1></a>
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle8()" name="heart-outline" class="like_button"></ion-icon>
    </div>
  </div> 

  <div class="pro">
    <a href="kajal-3.php">
    <img src="images/kajal-3.jpg" alt="">
    <div class="des">
        <span> Glam </span>
        <h5> kajal- Blue </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>

        </div>
        <h4>₹459</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=kajal&id=3"><h1> Add To Cart </h1></a>
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle8()" name="heart-outline" class="like_button"></ion-icon>
    </div>
</div> 

</div>

<!-- ================================= eyeliner ===================== -->
<h1 class="decorative-heading"> eyeliner</h1>
<div class="pro-container">
 <div class="pro">
    <a href="eyeliner-1.php">
    <img src="images/eyeliner-1.jpg" alt="">
    <div class="des">
        <span> MAC </span>
        <h5> Eyeliner- Glitter </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹569</h4>
       </div>
      <div class="Acart">
       <h1><a href="mycart.php?action=add&type=eyeliner&id=1"> Add To Cart </a></h1>
     </div>
     </a>
     <div class="like_btn">
        <ion-icon onclick="Toggle5()" name="heart-outline" class="like_button"></ion-icon>
    </div>
   </div>

    <div class="pro">
        <a href="eyeliner-2.php">
        <img src="images/eyeliner-2.jpg" alt="">
        <div class="des">
            <span> MAC </span>
            <h5> Eyeliner- Black </h5>
            <div class="star">
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
            </div>
            <h4>₹569</h4>
        </div>
        <div class="Acart">
        <a href="mycart.php?action=add&type=eyeliner&id=2"> <h1> Add To Cart </h1> </a>

        </div>
        </a>
        <div class="like_btn">
            <ion-icon onclick="Toggle5()" name="heart-outline" class="like_button"></ion-icon>
        </div>
    </div>

 <div class="pro">
    <a href="eyeliner-3.php">
    <img src="images/eyeliner-3.jpg" alt="">
    <div class="des">
        <span> MAC </span>
        <h5> Eyeliner- olive </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹569</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=eyeliner&id=3"> <h1> Add To Cart </h1> </a>
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle5()" name="heart-outline" class="like_button"></ion-icon>
    </div>
 </div>
</div>

<!-- ================ mascara===================== -->
<h1 class="decorative-heading"> mascara </h1>
<div class="pro-container">

 <div class="pro">
    <a href="mascara-1.php">
    <img src="images/mascara-1.jpg" alt="" height="300px">
    <div class="des">
        <span> Glam </span>
        <h5> Mascara- Brown </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹599</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=mascara&id=1"> <h1> Add To Cart </h1> </a>
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle2()" name="heart-outline" class="like_button"></ion-icon>
    </div>
    </div>

   <div class="pro">
    <a href="mascara-2.php">
    <img src="images/mascara-2.jpg" alt="" height="300px">
    <div class="des">
        <span> Glam </span>
        <h5> Mascara- Black </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹599</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=mascara&id=2"> <h1> Add To Cart </h1> </a>
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle2()" name="heart-outline" class="like_button"></ion-icon>
    </div>
 </div>



</div>

<!-- ================ blush ===================== -->
<h1 class="decorative-heading"> blush </h1>
<div class="pro-container">
 <div class="pro"> 
    <a href="blush-1.php">
    <img src="images/blush-1.jpg" alt="">
    <div class="des">
        <span> Glam </span>
        <h5> Blush- Light pink</h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹799</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=blush&id=1"> <h1> Add To Cart </h1> </a>
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle3()" name="heart-outline" class="like_button"></ion-icon>
    </div>
    </div>

  <div class="pro">
    <a href="blush-2.php">
        <img src="images/blush-2.jpg" alt="">
        <div class="des">
            <span> Glam </span>
            <h5> Blush - Rose pink</h5>
            <div class="star">
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
                <ion-icon name="star" id="i"></ion-icon>
            </div>
            <h4>₹799</h4>
        </div>
        <div class="Acart">
        <a href="mycart.php?action=add&type=blush&id=2"> <h1> Add To Cart </h1> </a>
        </div>
        </a>
        <div class="like_btn">
            <ion-icon onclick="Toggle3()" name="heart-outline" class="like_button"></ion-icon>
        </div>
  </div>


    <div class="pro">
        <a href="blush-3.php">
            <img src="images/blush-3.jpg" alt="">
            <div class="des">
                <span> Glam </span>
                <h5> Blush - Skin tone</h5>
                <div class="star">
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                    <ion-icon name="star" id="i"></ion-icon>
                </div>
                <h4>₹799</h4>
            </div>
            <div class="Acart">
            <a href="mycart.php?action=add&type=blush&id=3"> <h1> Add To Cart </h1></a>
            </div>
            </a>
            <div class="like_btn">
                <ion-icon onclick="Toggle3()" name="heart-outline" class="like_button"></ion-icon>
            </div>
     </div>

</div>

<!-- ================ liquid blush ===================== -->
<h1 class="decorative-heading"> liquid blush </h1>
<div class="pro-container">

<div class="pro">
    <a href="liquid-blush-1.php">
    <img src="images/liquid-blush-1.jpg" alt="">
    <div class="des">
        <span> Rare </span>
        <h5> liquid blush- Skin tone </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹680</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=liquid-blush&id=1"> <h1> Add To Cart </h1></a>    
 </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle4()" name="heart-outline" class="like_button"></ion-icon>
    </div>
 </div>

 <div class="pro">
    <a href="liquid-blush-2.php">
    <img src="images/liquid-blush-2.jpg" alt="">
    <div class="des">
        <span> Rare </span>
        <h5> liquid blush- Rose pink </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹580</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=liquid-blush&id=2"> <h1> Add To Cart </h1></a>   
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle4()" name="heart-outline" class="like_button"></ion-icon>
    </div>
 </div>


 <div class="pro">
    <a href="liquid-blush-3.php">
    <img src="images/liquid-blush-3.jpg" alt="">
    <div class="des">
        <span> Rare </span>
        <h5> liquid blush- light pink</h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹590</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=liquid-blush&id=3"> <h1> Add To Cart </h1></a>   
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle4()" name="heart-outline" class="like_button"></ion-icon>
    </div>
</div>

</div>


<!-- ================ foundation ===================== -->
<h1 class="decorative-heading"> foundation </h1>
<div class="pro-container">

 <div class="pro">
    <a href="foundation-1.php">
    <img src="images/foundation-1.jpg" alt="">
    <div class="des">
        <span> ILIA </span>
        <h5> foundation </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹999</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=foundation&id=1"> <h1> Add To Cart </h1></a>   
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle7()" name="heart-outline" class="like_button"></ion-icon>
    </div>
   </div>

   <div class="pro">
    <a href="foundation-2.php">
    <img src="images/foundation-2.jpg" alt="">
    <div class="des">
        <span> ILIA </span>
        <h5> foundation </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹999</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=foundation&id=2"> <h1> Add To Cart </h1></a>  
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle7()" name="heart-outline" class="like_button"></ion-icon>
    </div>
  </div>


   <div class="pro">
    <a href="foundation-3.php">
    <img src="images/foundation-3.jpg" alt="">
    <div class="des">
        <span> ILIA </span>
        <h5> foundation </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹999</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=foundation&id=3"> <h1> Add To Cart </h1></a>  
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle7()" name="heart-outline" class="like_button"></ion-icon>
    </div>
</div>
</div>


<!-- ================ serum ===================== -->
<h1 class="decorative-heading"> serum </h1>
<div class="pro-container">

<div class="pro">
    <a href="serum-1.php">
    <img src="images/serum-1.jpg" alt="">
    <div class="des">
        <span> Glam </span>
        <h5> serum- Face glow  </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹1999</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=serum&id=1"> <h1> Add To Cart </h1></a>  

    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle7()" name="heart-outline" class="like_button"></ion-icon>
    </div>
</div>

<div class="pro">
    <a href="serum-2.php">
    <img src="images/serum-2.jpg" alt="">
    <div class="des">
        <span> Glam </span>
        <h5> Serum- Anti aging </h5>
        <div class="star">
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
            <ion-icon name="star" id="i"></ion-icon>
        </div>
        <h4>₹1999</h4>
    </div>
    <div class="Acart">
    <a href="mycart.php?action=add&type=serum&id=2"> <h1> Add To Cart </h1></a>  
    </div>
    </a>
    <div class="like_btn">
        <ion-icon onclick="Toggle7()" name="heart-outline" class="like_button"></ion-icon>
    </div>
</div>
</div>

 


<!-- ============================================</section> ===================================-->

     <footer>
        <div class="last_nav">
            <div class="last_nav-1">
               <h1>Categories </h1>
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


          <script src="shopping.js"></script>
      </body>
      </html>