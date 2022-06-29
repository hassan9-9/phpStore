<?php
include "../partials/connect.php";
if(isset($_POST['update'])){
    // echo "work";
    $newid =$_POST['form_id'];
    $newname = $_POST['name'];
    $newprice = $_POST['price'];
    $newdesc = $_POST['description'];
    $newcat = $_POST['category'];

    $target = "uploads/";
    $file_path = $target.basename($_FILES['file']['name']); // image Path
    $file_name = $_FILES['file']['name']; //getting user uploaded name
    $file_tmp = $_FILES['file']['tmp_name'];  //this temporary name is used to save/move file in our folder.
    $file_store =  "uploads/" . $file_name;
    move_uploaded_file($file_tmp, $file_store);


    $sql = "UPDATE products set name =' $newname ', price= ' $newprice ', description= ' $newdesc ', category_id= ' $newcat ', picture= ' $file_path '
    WHERE id=? ";
     
        $results = $connect->prepare($sql);
        $results->bindParam(1, $newid, PDO::PARAM_INT);
        if($results->execute()){
            header('location: productsshow.php');   
        } else {
            header('location: adminindex.php');  
        }
        
        
        

    
   
    
    // $results->execute();
    

    // if(){
    //     header('location: productsshow.php');
    //  else {
    //     header('location: adminindex.php');
    // }
}

?>