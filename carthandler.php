<?php
session_start();
// $e = $_GET['cart_id'];
// echo $e;



if (isset($_SESSION['cart'])) {
    $checker = array_column($_SESSION['cart'], 'item_name');

    if (in_array($_GET['cart_name'], $checker)){
    
        echo "<script>alert('Product is already in the cart');
        window.location.href='product.php';
    
        </script>";
    }
    else{
    
    $count = count($_SESSION['cart']);  
    $_SESSION['cart'][$count] = array('item_id' => $_GET['cart_id'], 'item_name' => $_GET['cart_name'], 'item_price' => $_GET['cart_price']
    , 'quantity' => 1,);
    echo "<script>alert('Product Added Successfully1');
    window.location.href='product.php';
    </script>";
    }

}
else {
    $_SESSION['cart'][0]= array('item_id' => $_GET['cart_id'], 'item_name' => $_GET['cart_name'], 'item_price' => $_GET['cart_price']
    , 'quantity' => 1,);
    echo "<script>alert('Product Added Successfully');
          window.location.href='product.php';
          </script>";

}
// echo "<pre>";
// print_r($_SESSION['cart']);
// echo "</pre>";
// session_unset();
// session_destroy();

?>
