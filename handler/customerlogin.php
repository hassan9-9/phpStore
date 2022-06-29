<?php
session_start();

if(isset($_POST['login'])){
    include '../partials/connect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM customers WHERE username = '$email' AND password = '$password' ";
    $results = $connect->prepare($sql);
    $results->execute();
    $row = $results->fetch(PDO::FETCH_ASSOC);

    $_SESSION['email'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['customerid'] = $row['id'];

    if($email === $row['username'] && $password === $row['password']){
        header('location: ../cart.php');
    }
    else {
        echo "<script>alert('Credentials are wrong');
        window.location.href='../customersforms.php';
        </script>";

    }
}

?>

