<?php
include "../partials/connect.php";
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
// echo $email;
// echo $password;

if($password == $password2){
    // echo "correct";
    $sql = "INSERT INTO customers (username, password) VALUES('$email', '$password')";
    $connect->exec($sql);
    echo "<script>alert('You are registered');
    window.location.href= '../customersforms.php';
    </script>";   
}
else {
    echo "<script>alert('Password did not match');
    window.location.href= '../customersforms.php';
    </script>"; 

}
