<?php
include "../partials/connect.php";
$newid = $_GET['remove_id'];
$sql = "DELETE FROM products WHERE id=?";
$results = $connect->prepare($sql);
$results->bindParam(1, $newid, PDO::PARAM_INT);
if($results->execute()){
    header('location: productsshow.php');

}
else {
    echo "it is not removed";


}

?>