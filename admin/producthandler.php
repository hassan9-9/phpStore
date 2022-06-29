<?php
include ("../partials/connect.php");
$name = $_POST['name'];
$price = $_POST['price'];

// $pic = $_POST['picture'];
// to send an image and save it into a file
$target = "uploads/";
$file_path = $target.basename($_FILES['file']['name']); // image Path
$file_name = $_FILES['file']['name']; //getting user uploaded name
$file_tmp = $_FILES['file']['tmp_name'];  //this temporary name is used to save/move file in our folder.
$file_store =  "uploads/" . $file_name;
move_uploaded_file($file_tmp, $file_store);




$desc = $_POST['description'];      
$category = $_POST['category'];


$sql = "INSERT INTO products(name, price, picture, description, category_id) VALUES ('$name', '$price', '$file_path', '$desc', '$category')";
// $connect->query($sql);
$connect->exec($sql);
header("location: productsshow.php");
?>