
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
    
    <title>My Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/shopping.css">
    <style>
        .product-image {
            width: 200px; 
            height: auto; 
        }
    </style>
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
                    <li><a href="shopping.php">PRODUCT</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <div class="cart"><a class="active" href="mycart.php"><ion-icon name="bag-handle-outline"></ion-icon></a></div>
                    <div class="user"> <ion-icon name="person-outline"> </ion-icon> <span class="username"><?php echo $_SESSION['username']; ?> </span></div>
                    <div class="sign"> <a href="logout.php"><ion-icon name="exit-outline"></ion-icon></a></div>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container mt-5">
        <h1> My Cart </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Remove</th> 
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['type']) && isset($_GET['id'])) {
    $product_type = $_GET['type'];
    $product_id = $_GET['id'];
    if ($product_type == 'lipstick') {
        $product_details = array("image" => "images/lip-$product_id.jpg", "name" => "lipstick $product_id", "price" => "₹499");
    } elseif ($product_type == 'liquid-lipstick') {
        $product_details = array("image" => "images/liquid-lip-$product_id.jpg", "name" => "liquid lipstick $product_id", "price" => "₹550");
    } elseif ($product_type == 'lip-liner') {
        $product_details = array("image" => "images/lip-liner-$product_id.jpeg", "name" => "lip liner$product_id", "price" => "₹299");
    } elseif ($product_type == 'kajal') {
        $product_details = array("image" => "images/kajal-$product_id.jpg", "name" => "kajal $product_id", "price" => "₹459");
    } elseif ($product_type == 'eyeliner') {
        $product_details = array("image" => "images/eyeliner-$product_id.jpg", "name" => "eyeliner $product_id", "price" => "₹569");
    } elseif ($product_type == 'mascara') {
        $product_details = array("image" => "images/mascara-$product_id.jpg", "name" => "mascara $product_id", "price" => "₹599");
    } elseif ($product_type == 'blush') {
        $product_details = array("image" => "images/blush-$product_id.jpg", "name" => "blush $product_id", "price" => "₹799");
    } elseif ($product_type == 'liquid-blush') {
        $product_details = array("image" => "images/liquid-blush-$product_id.jpg", "name" => "liquid-blush $product_id", "price" => "₹590");
    } elseif ($product_type == 'foundation') {
        $product_details = array("image" => "images/foundation-$product_id.jpg", "name" => "foundation $product_id", "price" => "₹999");
    } elseif ($product_type == 'serum') {
        $product_details = array("image" => "images/serum-$product_id.jpg", "name" => "serum $product_id", "price" => "₹1999");
    }

    array_unshift($_SESSION['cart'], $product_details);
}

if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['index'])) {
    $index = $_GET['index'];
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
    }
}

$grand_total = 0; 

foreach ($_SESSION['cart'] as $index => $item) {
    echo "<tr>";
    echo "<td><a href='mycart.php?action=remove&index=$index' class='btn btn-danger'>Remove</a></td>"; 
    echo "<td><img src='" . $item['image'] . "' alt='' class='product-image'></td>";
    echo "<td>" . $item['name'] . "</td>";
    echo "<td>" . $item['price'] . "</td>";
    echo "</tr>";

    $grand_total += str_replace('₹', '', $item['price']); 
}

echo "<tr>";
echo "<td colspan='3'><strong>Grand Total</strong></td>";
echo "<td><strong>₹$grand_total</strong></td>";
echo "</tr>";

?>


        </tbody>
        </table>
 

        <form action="store_shipping.php" method="post">
    <h3> Shipping info </h3>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" class="form-control" required maxlength="10">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea name="address" id="address" class="form-control" required></textarea>
    </div>
    <input type="hidden" name="grand_total" value="<?php echo $grand_total; ?>">
    <?php foreach ($_SESSION['cart'] as $product_details): ?>
        <input type="hidden" name="product_details[]" value="<?php echo htmlentities(serialize($product_details)); ?>">
    <?php endforeach; ?>
    <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
</form>

    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="mycart.js"></script>

</body>
</html>

