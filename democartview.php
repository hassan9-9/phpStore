<?php
session_start();
foreach ($_SESSION['cart'] as $value){
    // echo "<pre>";
    echo $value . "<br>";
    // echo "<pre>";
}
session_unset();
session_destroy();
?>