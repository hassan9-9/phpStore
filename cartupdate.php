<?php
session_start();
$q = $_POST['quantity'];

if(isset($_POST['update'])){
    foreach ($_SESSION['cart'] as $key => $value){
        // echo "<pre>";
        // print_r($key);
        // print_r($_SESSION['cart']);
        // echo "</pre>";
        if($value['item_name'] == $_POST['item_name']) {
            $_SESSION['cart'][$key]['quantity']= $q;
            echo "<script>
            alert('Item Updated successfully');
            window.location.href='cart.php';
            </script>";

        }
    }
}

?>