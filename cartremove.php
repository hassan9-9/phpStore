<?php
session_start();
if(isset($_POST['remove'])){
    foreach ($_SESSION['cart'] as $key => $value){
        // echo "<pre>";
        // print_r($key);
        // print_r($_SESSION['cart']);
        // echo "</pre>";
        if($value['item_name'] == $_POST['item_name']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo "<script>
            alert('Item Removed successfully');
            window.location.href='cart.php';
            </script>";

        }
    }
}

?>