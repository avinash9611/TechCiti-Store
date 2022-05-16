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

                $sql="SELECT * from contact";
                $results=$connect->query($sql);
                while($final=$results->fetch_assoc()){ ?>
                  
                  <h3><?php echo $final['id'] ?>:
                  <?php echo $final['name']?><br><br> <strong>Email: </strong> <?php echo $final['email']?><br><br> <strong>Query: </strong> <?php echo $final['msg']?></h3><br>

                  <a href="contactdelete.php?del_id=<?php echo $final['id'] ?>">
                    <button style="color:red">Delete</button><hr>
                  </a>
      
                <?php }
                ?>
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
