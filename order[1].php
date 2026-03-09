<?php
error_reporting(E_ALL);
ini_set('dispay_errors',1);
include "db.php";

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$items = $_POST['items'];
$total = $_POST['total'];

$sql = "INSERT INTO orders (name, address, phone, items, total)
        VALUES ('$name', '$address', '$phone', '$items', '$total')";

if (mysqli_query($conn, $sql)) {
    header("Location: admin.php");
    exit();
} else {
    echo "❌ Error placing order";
}
?>