<!DOCTYPE html>
<html>
<?php
include("adminpartials/session.php");
include("adminpartials/head.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php
include("adminpartials/header.php");
include("adminpartials/aside.php");
?>

  
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
        <div class="row">
            <div class="col-sm-9">
                <?php
                include('../partials/connect.php');
                $id=$_GET['pro_id'];
                $sql="SELECT * from orders WHERE id='$id'";
                $results=$connect->query($sql);
                $final=$results->fetch_assoc();
                ?>

                <h3>
                    Customer Number: <?php echo $final['customer_id']?>
                </h3><hr><br>
                <h3>
                    Total: Rs.  <?php echo $final['total']?>
                </h3><hr><br>
                <h3>
                    Address: <?php echo $final['address']?>
                </h3><hr><br>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-9">
                <?php
                include('../partials/connect.php');
                $id=$_GET['pro_id'];
                $sql="SELECT * from order_details WHERE order_id='$id'";
                $results=mysqli_query($connect,$sql);
                while($row=mysqli_fetch_assoc($results)) {
                ?>

                <h3>
                    Product Number: <?php echo $row['product_id']?>
                </h3><hr><br>
                <h3>
                    Quantity: <?php echo $row['quantity']?>
                </h3><hr><br>
                <?php }?>
            </div>
        </div>
        <div class="col-sm-3">

        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include("adminpartials/footer.php");
?>
</body>
</html>
