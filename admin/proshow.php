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
              $sql = "SELECT * FROM products WHERE id= ? ";
              $results = $connect->prepare($sql);
              $results->bindParam(1, $id, PDO::PARAM_INT);
              $results->execute();
              $row = $results->fetch(PDO::FETCH_ASSOC);

              ?>
              <h3>Name: <?php echo $row['name'] ?></h3><hr><br>
              <h3>Price: <?php echo $row['price'] ?></h3><hr><br>
              <h3>description: <?php echo $row['description'] ?></h3><hr><br>
              <img src="../<?php echo $row['picture'] ?>" alt="Photo" style = "height:300px; width:300px">

              

              



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