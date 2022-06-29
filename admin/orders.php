<!DOCTYPE html>
<html>
<?php
include ("adminpartials/session.php");
include ("adminpartials/head.php");

?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php
    include ("adminpartials/header.php");
    include ("adminpartials/aside.php");

    ?>

 
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-9">
          
              
              <!-- include "../partials/connect.php";
              $sql = "SELECT * FROM products";
              $results = $connect->prepare($sql);
              $results->execute();
              while($row = $results->fetch(PDO::FETCH_ASSOC)){

                // <a href="proshpw.php?pro_id =  $row['id']">
                echo "<h3>" . $row['id'] . ":  " . $row['name'] . "<br><hr>" . "</h3>";  
                // </a>

              } -->

              <?php
              include "../partials/connect.php";
              $sql = "SELECT * FROM orders";
              $results = $connect->prepare($sql);
              $results->execute();
              while($row = $results->fetch(PDO::FETCH_ASSOC)){
                  ?>
                <a href="ordershow.php?pro_id=<?php echo  $row['id'] ?>">
               <h3><?php echo $row['id'] ?> : <?php echo $row['phone'] ?> <br> Total: <?php echo $row['total'] ?> </h3> <br>
                </a>

              
                <a href="orderdelete.php?remove_id= <?php echo $row['id'] ?>">
                <button style="color:red;margin-left:7px">Remove</button>
              </a>
              <hr>

              

              <?php
              }
              ?>
              
              

              

<?php
    $num = 2;
    for ($i = 1; $i <= 10; $i++) { 
?>
   
    <p><?= $num ?> * <?= $i ?>
        = <?= $num * $i ?></p>
   
<?php
    }
?>

          </div>
          
            <div class="col-sm-3">
                
            </div>
     </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include ('adminpartials/footer.php');
  ?>
</body>
</html>
