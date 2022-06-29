<?php
session_start();
include "../partials/connect.php";
// $total = $_POST['total'];
// echo $total;
$total = $_POST['total'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$customerid = $_SESSION['customerid'];
$payment = $_POST['payment'];
// echo $total . $phone . $address; 

$sql = "INSERT INTO orders (customer_id, address, phone, total, pay_method) VALUES ('$customerid', '$address', '$phone', '$total', '$payment')";
$connect->exec($sql);

$sql2 = "SELECT id from orders ORDER BY id DESC LIMIT 1 ";
$results = $connect->prepare($sql2);
$results->execute();
$row = $results->fetch(PDO::FETCH_ASSOC);
$orderid = $row['id'];

foreach ($_SESSION['cart'] as $key => $value){
    $proid = $value['item_id'];
    $quantity = $value['quantity'];
    $sql3 = "INSERT INTO order_details (order_id, product_id, quantity) VALUES ('$orderid', '$proid', '$quantity')";
    $connect->exec($sql3);
}
if ($payment == "paypal"){
    $_SESSION['total'] = $total;
    header('location: paypal.php');
}
else {
    echo "<script>alert('ORDER IS PLACED');
    window.location.href = '../index.php';
    </script>";
}
unset($_SESSION['cart']);







