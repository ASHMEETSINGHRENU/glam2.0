<?php
session_start();

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "shipping_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$grand_total = $_POST['grand_total'];
$product_details = $_POST['product_details'];

// Insert shipping info into the database
$sql = "INSERT INTO shipping_info (name, phone, address, grand_total) VALUES ('$name', '$phone', '$address', $grand_total)";

if ($conn->query($sql) === TRUE) {
    // Retrieve the last inserted shipping ID
    $shipping_id = $conn->insert_id;

    // Insert product details associated with this shipping into another table
    foreach ($product_details as $serialized_product) {
        $product = unserialize(html_entity_decode($serialized_product));
        $image = $product['image'];
        $name = $product['name'];
        $price = $product['price'];

    $sql = "INSERT INTO shipping_products (shipping_id, image, name, price) VALUES ($shipping_id, '$image', '$name', '$grand_total')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error inserting product details: " . $conn->error;
            exit();
        }
    }

    unset($_SESSION['cart']);
    header("Location: shopping.php");
    exit();
} else {
    echo "Error inserting shipping information: " . $conn->error;
}

$conn->close();
?>