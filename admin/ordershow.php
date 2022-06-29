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
              
              <?php
              include "../partials/connect.php";
              
                $id = $_GET['pro_id'];
                // var_dump($id);
            //   $id = $_GET['pro_id'];
            //   $id = 15;
            //   $id = $_REQUEST['pro_id'];

            //   $id = 15;
              $sql = "SELECT * FROM orders WHERE id= ? ";
              $results = $connect->prepare($sql);
              $results->bindParam(1, $id, PDO::PARAM_INT);
              $results->execute();
              $row = $results->fetch(PDO::FETCH_ASSOC);

              ?>
              <h3>CustomerNo: <?php echo $row['customer_id'] ?></h3><hr><br>
              <h3>Total: <?php echo $row['total'] ?></h3><hr><br>
              <h3>Address: <?php echo $row['address'] ?></h3><hr><br>
          </div>

          <div class="col-sm-9">
              
              <?php
              include "../partials/connect.php";
              
                $id = $_GET['pro_id'];
                // var_dump($id);
            //   $id = $_GET['pro_id'];
            //   $id = 15;
            //   $id = $_REQUEST['pro_id'];

            //   $id = 15;
              $sql = "SELECT * FROM order_details WHERE id= ? ";
              $results = $connect->prepare($sql);
              $results->bindParam(1, $id, PDO::PARAM_INT);
              $results->execute();
              $row = $results->fetch(PDO::FETCH_ASSOC);

              ?>
              <h3>ProductNo: <?php echo $row['product_id'] ?></h3><hr><br>
              <h3>Quantity: <?php echo $row['quantity'] ?></h3><hr><br>
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
