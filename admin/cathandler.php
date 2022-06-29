<?php
include ("../partials/connect.php");
$category = $_POST['name'];
// $msg = $_POST['msg'];

$sql = "INSERT INTO categories(name) VALUES ('$category')";
// $connect->query($sql);
$connect->exec($sql);
header("location: productsshow.php");
?>