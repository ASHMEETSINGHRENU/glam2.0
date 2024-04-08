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
    <link rel="stylesheet" type="text/css" href="style/offer.css">
    
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
                    <li><a  href="home.php">HOME</a></li>
                    <li><a class="active" href="offer.html">OFFER</a></li>
                    <li><a href="shopping.php">PRODUCT</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <div class="cart"><a href="#"><ion-icon name="bag-handle-outline"></ion-icon></a></div>
                    <div class="user"> <ion-icon name="person-outline"> </ion-icon> <span class="username"><?php echo $_SESSION['username']; ?> </span></div>
                    <div class="sign"> <a href="logout.php"><ion-icon name="exit-outline"></ion-icon></a></div>
                </ul>
            </nav>
        </div>
</header>



<!-- ----------------- main contain ------------------------- -->
  <div class="offer_page_1">
    <div class="background_1"></div>
    <div class="offer_content_1">
        <h1>all product <span>20%</span> off</h1>
    </div>
  </div>

  <div id="container">
    <div class="box" id="box1">
      <div class="main_offer_page">
        <div class="single_item_1">
            <div class="image-container_1">
            </div>
            <h1> lip liner </h1>
            <div class="price">
                <h3> $250 </h3>
                <h2> $200 </h2>
            </div>
            <button> add to cart </button>
        </div>
        <div class="single_item_2">
            <div class="image-container_2">
            </div>
            <h1> eyeliner </h1>
            <div class="price">
                <h3> $300 </h3>
                <h2> $200 </h2>
            </div>
            <button> add to cart </button>
        </div>
      </div>
    </div>
    <div class="box" id="box2">
        <div class="main_offer_page">
            <div class="single_item_3">
                <div class="image-container_3">
                </div>
                <h1> Foundation </h1>
                <div class="price">
                    <h3> $250 </h3>
                    <h2> $200 </h2>
                </div>
                <button> add to cart </button>
            </div>
            <div class="single_item_4">
                <div class="image-container_4">
                </div>
                <h1> LIQUIDBLUSH  </h1>
                <div class="price">
                    <h3> $400 </h3>
                    <h2> $200 </h2>
                </div>
                <button> add to cart </button>
            </div>
          </div>

    </div>
  </div>

  <button id="left-btn"><ion-icon name="arrow-back-outline"></ion-icon></button>
  <button id="right-btn"><ion-icon name="arrow-forward-outline"></ion-icon></button>
  


    
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


<script>
    const container = document.getElementById('container');
    const leftBtn = document.getElementById('left-btn');
    const rightBtn = document.getElementById('right-btn');
    let currentIndex = 0;

    leftBtn.addEventListener('click', () => {
      currentIndex = Math.max(currentIndex - 1, 0);
      updateTransform();
    });

    rightBtn.addEventListener('click', () => {
      currentIndex = Math.min(currentIndex + 1, 1);
      updateTransform();
    });

    function updateTransform() {
      const translateValue = -currentIndex * 99 + 'vw';
      container.style.transform = `translateX(${translateValue})`;
    }
  </script>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="offer.js"></script>

</body>
</html>